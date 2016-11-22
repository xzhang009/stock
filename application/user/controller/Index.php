<?php

namespace app\user\controller;

use think\Controller;
use think\Request;
use app\index\controller\Base;
use app\common\model\UserPosition;
use app\common\model\Transaction as Trans;
use app\common\model\UserFunds;
use app\common\model\DaysRatio;
use app\common\model\OptionalStock;
/**
 * 用户控制器
 */
class Index extends Base
{
    protected $_base;
    public function __construct(){
        $this->_base = new Base();
    }
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $data = input('get.');
        $res = $this->validate($data,'UserPosition');
        if (true !== $res) {
            return json(['status'=>'failed','data'=>$res]);
        }
        $position = $this->getUserPosition($data); //获取持仓信息
        $noOrder = $this->getUserNoOrder($data); //获取待成交信息
        return json(['status'=>'success','data'=>$position['data'],'totalPage'=>$position['totalPage'],'nData'=>$noOrder['data'],'nTotalPage'=>$noOrder['totalPage']]);
    }

    /**
     * 用户自选股
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $data = $request->param();
        $res = $this->validate($data,'OptionalStock');
        if (true !== $res) {
            return json(['status'=>'failed','data'=>$res]);
        }
        $data['time'] = date("Y-m-d H:i:s");
        if(UserFunds::where(['uid'=>$data['uid']])->find()){
            if(OptionalStock::where($data])->find()){
                $result = json(['status'=>'failed','data'=>'股票已经存在']);
            }else{
                getStock($data['stock'],'s_');
                if(OptionalStock::create($data)){
                    $result = json(['status'=>'success','data'=>'添加自选股成功']);
                }else{
                    $result = json(['status'=>'failed','data'=>'添加自选股失败']);
                }
            }
        }else{
            $result = json(['status'=>'failed','data'=>'用户不存在']);
        }
        return $result;
    }

    /**
     * [read 获取用户账户信息]
     * @param  [number] $id [用户uid]
     * @return [json]     [返回json]
     */
    public function read($id)
    {   
        $stockFunds = $this->_base->_stockFunds;
        $fund = UserFunds::where(['uid'=>$id])->Field('id,uid,funds,time,operationTime,available_funds,sorts,total_rate,avg_position_day,total_profit_rank')->find();
        //获取用户资产信息
        if($fund){
            $fund->append(['username']);
            $userInit = DaysRatio::where(['uid'=>$id])->whereTime('time','today')->value('initialCapital');
            $fund['shares'] = $userInit ? $fund['funds'] - $userInit : 0 ;  //今日盈亏
            $fund['position'] = round(($fund['funds'] - $fund['available_funds'])/$fund['funds']*100,2);
            $result = json(['status'=>'success','data'=>$fund]);
        }else{
            $result = json(['status'=>'failed','data'=>'没有这个用户']);
        }
        
        return $result;
    }

    /**
     * [getUserPosition 获取用户持仓]
     * @param  [array] $data [传入的数据]
     * @return [json]       [description]
     */
    protected function getUserPosition($data){
        $limit = $this->_base->_limit;

        $data['p'] = isset($data['p']) ? (int)$data['p'] > 0 ? $data['p'] : 1 : 1;
        $result['totalPage'] = ceil(UserPosition::where(['uid'=>$data['uid'],'is_position'=>1])->count()/$limit);
        $result['data'] = UserPosition::where(['uid'=>$data['uid'],'is_position'=>1])->limit(($data['p']-1)*$limit,$limit)->select();
        return $result;
    }

    protected function getUserNoOrder($data){
        $limit = $this->_base->_limit;
        $data['np'] = isset($data['np']) ? (int)$data['np'] > 0 ? $data['np'] : 1 : 1;
        $result['totalPage'] = ceil(Trans::where(['uid'=>$data['uid'],'status'=>0])->whereTime('time','today')->count()/$limit);
        $result['data'] = Trans::where(['uid'=>$data['uid'],'status'=>0])->whereTime('time','today')->limit(($data['np']-1)*$limit,$limit)->order('time desc')->select();
        return $result;
    }
}
