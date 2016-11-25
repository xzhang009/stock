<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:83:"/Users/ducong/nginxroot/stock/public/../application/index/view/member/personal.html";i:1479805602;s:72:"/Users/ducong/nginxroot/stock/public/../application/index/view/base.html";i:1479805602;s:81:"/Users/ducong/nginxroot/stock/public/../application/index/view/public/header.html";i:1479805602;s:81:"/Users/ducong/nginxroot/stock/public/../application/index/view/public/footer.html";i:1479805602;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<meta name="description" content="">
<meta name="keywords" content="">
<title>个人中心</title>

<!-- Amaze ui -->
<link rel="stylesheet" href="/static/amaze/css/amazeui.min.css">
<link rel="stylesheet" href="/static/amaze/css/app.css">


<style type="text/css">
.tr-personal .am-panel-title{font-size: 14px;}
.tr-personal .tr-panel-asset table{border-width: 1px 0 0;}
.tr-personal .tr-table-td-asset{font-size: 16px;width: 60px; vertical-align: middle; border-left: none;}
.tr-personal table thead th{background: #f2f2f2;}
</style>

</head>
<body>
<header class="am-topbar am-topbar-fixed-top">
	<div class="am-g tr-login-topbar">
		<div class="am-container">
			<div class="am-u-sm-12">
				<div class="am-nav am-nav-pills am-topbar-nav am-fl">
					<a href="http://www.sjqcj.com/" target="_blank" title="水晶球网">水晶球首页</a>&nbsp;|&nbsp;<a href="http://www.baidu.com" target="_blank">CCC</a>
				</div>
				<div class="am-topbar-right am-fr">
					<?php if(false): ?>
						欢迎来到模拟炒股，请&nbsp;
						<a href="<?php echo url('stocks/member/login'); ?>" title="登录" class="topbar-login">登录</a>
						&nbsp;|&nbsp;
						<a href="<?php echo url('stocks/member/register'); ?>" title="注册" class="topbar-register">注册</a>
					<?php else: ?>
						您好，
						<a href="<?php echo url('stocks/member/index'); ?>" title="个人中心" class="topbar-login">username</a>
						<a href="<?php echo url('stocks/member/loginout'); ?>" title="退出" class="topbar-out">退出</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="am-g tr-menu-topbar">
		<div class="am-container">
			<h1 class="am-topbar-brand">
				<a href="/" title="logo"><img src="/static/img/logo1.png" alt="logo" /></a>
			</h1>
			<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only am-collapsed" data-am-collapse="{target: '#tr-header-nav'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
			<div class="am-collapse am-topbar-collapse tr-menu-nav" id="tr-header-nav">
				<div class="tr-menu-nav-item">
				<ul class="am-nav am-nav-pills am-topbar-nav">
				    <li class="home<?php if(\think\Request::instance()->controller() == 'index' and \think\Request::instance()->action() == 'index'): ?> am-active<?php endif; ?>"><a href="/" title="模拟炒股首页">首页</a></li>
				    <li class="<?php if(\think\Request::instance()->controller() == 'index' and \think\Request::instance()->action() == 'matchList'): ?> am-active<?php endif; ?>"><a href="<?php echo url('index/index/matchList'); ?>">模拟赛场</a></li>
				    <li class="<?php if(\think\Request::instance()->controller() == 'index' and \think\Request::instance()->action() == 'rankingList'): ?> am-active<?php endif; ?>"><a href="<?php echo url('index/index/rankingList'); ?>">牛人排行榜</a></li>
				    <li class="<?php if(\think\Request::instance()->controller() == 'index' and \think\Request::instance()->action() == 'index'): ?> am-active<?php endif; ?>"><a href="<?php echo url('index/index/tradingRules'); ?>">交易规则</a></li>
				</ul>
				</div>
			</div>
		</div>
	</div>
</header>

<div class="am-g">
    <div class="am-container am-margin-top tr-personal">
        <div class="am-u-md-3 am-padding-right-sm">
            <section class="am-panel am-panel-default">
              <header class="am-panel-hd">
                <h3 class="am-panel-title">个人中心</h3>
              </header>
              <div class="am-panel-bd am-text-center">
                <p><img src="/static/img/portrait.gif" class="am-circle" width="180" />
                </p>
                <p>mo_20640***6</p>
                <hr data-am-widget="divider" style="" class="am-divider am-divider-dotted" />
                <p><a href="" class="am-btn am-btn-primary am-btn-xs am-radius am-margin-right">去他的微博</a><a href="<?php echo url('stocks/trading/tradingCenter'); ?>" class="am-btn am-btn-primary am-btn-xs am-radius">进入交易区</a></p>
                <table class="am-table am-margin-top am-table-bordered">
                    <tbody>
                        <tr>
                            <td>资金账号</td>
                            <td>无</td>
                        </tr>
                        <tr>
                            <td>仓位</td>
                            <td>90.5%</td>
                        </tr>
                        <tr>
                            <td>选股成功率</td>
                            <td>60%</td>
                        </tr>
                        <tr>
                            <td>操作总数</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td>加入时间</td>
                            <td>2015年6月11日</td>
                        </tr>
                        <tr>
                            <td>最后操作时间</td>
                            <td>2015年6月11日</td>
                        </tr>
                    </tbody>
                </table>
              </div>
            </section>
        </div>
        <div class="am-u-md-9 am-padding-left-sm">
            <div class="am-panel-group">
                <section class="am-panel am-panel-default tr-panel-asset">
                    <header class="am-panel-hd"><h2 class="am-panel-title">账户资金</h2></header>
                        <table class="am-table am-table-centered am-table-bordered">
                            <tbody>
                                <tr>
                                    <td rowspan="4" class="tr-table-td-asset"><span class="">资产状况</span></td>
                                    <td>总盈利率</td>
                                    <td>总盈亏</td>
                                    <td>浮动盈亏</td>
                                    <td>实现盈亏</td>
                                </tr>
                                <tr>
                                    <td>无</td>
                                    <td>无</td>
                                    <td>无</td>
                                    <td>无</td>
                                </tr>
                                <tr>
                                    <td>总资产</td>
                                    <td>起始资产</td>
                                    <td>资金余额</td>
                                    <td>股票市值</td>
                                </tr>
                                <tr>
                                    <td>无</td>
                                    <td>无</td>
                                    <td>无</td>
                                    <td>无</td>
                                </tr>
                            </tbody>
                        </table>
                </section>
                <section class="am-panel am-panel-default">
                    <header class="am-panel-hd"><h2 class="am-panel-title">盈亏走势图</h2></header>
                    <main class="am-panel-bd">
                        <div id="main" style="height: 400px;"></div>
                    </main>
                </section>
                <section class="am-panel am-panel-default">
                    <header class="am-panel-hd"><h2 class="am-panel-title">持仓情况</h2></header>
                    <main class="am-panel-bd">
                        <table class="am-table am-margin-bottom-0 am-table-centered am-table-bordered  am-table-hover">
                            <thead>
                                <tr>
                                    <th>股票名称</th>
                                    <th>股票代码</th>
                                    <th>持仓数量</th>
                                    <th>最新价格</th>
                                    <th>盈亏比例</th>
                                    <th>仓数比重</th>
                                    <th>操作详情</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>浦发银行</td>
                                    <td>600000</td>
                                    <td>3000</td>
                                    <td>10</td>
                                    <td><span class="tr-color-win">50%</span></td>
                                    <td>100%</td>
                                    <td><a href="#" title="详情">查看详情</a></td>
                                </tr>
                                <tr>
                                    <td>浦发银行</td>
                                    <td>600000</td>
                                    <td>3000</td>
                                    <td>10</td>
                                    <td><span class="tr-color-win">50%</span></td>
                                    <td>100%</td>
                                    <td><a href="#" title="详情">查看详情</a></td>
                                </tr>
                                <tr>
                                    <td>浦发银行</td>
                                    <td>600000</td>
                                    <td>3000</td>
                                    <td>10</td>
                                    <td><span class="tr-color-lose">-3.2%</span></td>
                                    <td>100%</td>
                                    <td><a href="#" title="详情">查看详情</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </main>
                </section>
                <section class="am-panel am-panel-default">
                    <header class="am-panel-hd"><h2 class="am-panel-title">交易记录</h2></header>
                    <main class="am-panel-bd">
                        <table class="am-table am-margin-bottom-0 am-table-centered am-table-bordered  am-table-hover">
                            <thead>
                                <tr>
                                    <th>股票名称</th>
                                    <th>股票代码</th>
                                    <th>方式</th>
                                    <th>最新价格</th>
                                    <th>数量</th>
                                    <th>时间</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>浦发银行</td>
                                    <td>600000</td>
                                    <td><span class="tr-color-buy">买入</span></td>
                                    <td>11</td>
                                    <td>200</td>
                                    <td>2016年8月3日</td>
                                </tr>
                                <tr>
                                    <td>浦发银行</td>
                                    <td>600000</td>
                                    <td><span class="tr-color-buy">买入</span></td>
                                    <td>11</td>
                                    <td>200</td>
                                    <td>2016年8月3日</td>
                                </tr>
                                <tr>
                                    <td>浦发银行</td>
                                    <td>600000</td>
                                    <td><span class="tr-color-sale">卖出</span></td>
                                    <td>11</td>
                                    <td>200</td>
                                    <td>2016年8月3日</td>
                                </tr>
                            </tbody>
                        </table>
                    </main>
                </section>
                <section class="am-panel am-panel-default tr-comments">
                    <header class="am-panel-hd"><h2 class="am-panel-title">留言板</h2></header>
                    <main class="am-panel-bd">
                        <ul class="am-comments-list tr-comments-list">
                          <li class="am-comment">
                            <a href="#link-to-user-home">
                              <img src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg?imageView/1/w/96/h/96/q/80" alt="" class="am-comment-avatar" width="48" height="48">
                            </a>
                            <div class="am-comment-main">
                              <header class="am-comment-hd">
                                <div class="am-comment-meta">
                                  <a href="#link-to-user" class="am-comment-author am-margin-right">某人</a><time datetime="2013-07-27T04:54:29-07:00" title="2013年7月27日 下午7:54 格林尼治标准时间+0800">2014-7-12 15:30</time>
                                </div>
                              </header>
                              <div class="am-comment-bd">
                                <p>《永远的蝴蝶》一文，还吸收散文特长，多采用第一人称，淡化情节，体现一种思想寄托和艺术追求。</p>
                              </div>
                            </div>
                          </li>
                          <li class="am-comment">
                            <a href="#link-to-user-home">
                              <img src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg?imageView/1/w/96/h/96/q/80" alt="" class="am-comment-avatar" width="48" height="48">
                            </a>
                            <div class="am-comment-main">
                              <header class="am-comment-hd">
                                <div class="am-comment-meta">
                                  <a href="#link-to-user" class="am-comment-author am-margin-right">路人甲</a><time datetime="2013-07-27T04:54:29-07:00" title="2013年7月27日 下午7:54 格林尼治标准时间+0800">2014-7-13 0:03</time>
                                </div>
                              </header>
                              <div class="am-comment-bd">
                                <p>感觉仿佛是自身的遭遇一样，催人泪下</p>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="am-form">
                            <form class="am-form" action="" method="post">
                                <fieldset>
                                    <div class="am-form-group">
                                      <textarea class="" rows="5" id="doc-ta-1"></textarea>
                                    </div>
                                    <p class="am-text-right"><button type="submit" class="am-btn am-btn-default">留言</button></p>
                                </fieldset>
                            </form>    
                        </div>
                    </main>
                </section>
            </div>
        </div>
    </div>
</div>

<footer>
	<br>
	<hr >
	<br>
	<div class="am-g am-text-center">
		&copy;2016 成都水晶球股份有限公司  All rights reserved.
	</div>
	<br>
</footer>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/static/amaze/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="/static/amaze/js/amazeui.min.js"></script>
<script src="/static/js/vue.js"></script>


    <script type="text/javascript" src="/static/js/echarts.js"></script>
    <script type="text/javascript">
        var myChart = echarts.init(document.getElementById('main')); 
        var option = {
            title : {
                text: '账户总盈亏',
                textStyle: {
                    fontSize: 12,
                }
            },
            tooltip : {
                trigger: 'axis',
                formatter: function (params) {
                    var res = params[0].seriesName + ' ' + params[0].name;
                    res += '<br/>  开盘 : ' + params[0].value[0] + '  最高 : ' + params[0].value[3];
                    res += '<br/>  收盘 : ' + params[0].value[1] + '  最低 : ' + params[0].value[2];
                    return res;
                }
            },
            legend: {
                data:['上证指数']
            },
            toolbox: {
                show : false,
                feature : {
                    mark : {show: true},
                    dataZoom : {show: true},
                    dataView : {show: true, readOnly: false},
                    restore : {show: true},
                    saveAsImage : {show: true}
                }
            },
            xAxis : [
                {
                    type : 'category',
                    boundaryGap : true,
                    axisTick: {onGap:false},
                    splitLine: {show:false},
                    data : [
                        "2013/5/9", "2013/5/10", "2013/5/13", "2013/5/14", "2013/5/15", 
                        "2013/5/16", "2013/5/17", "2013/5/20", "2013/5/21", "2013/5/22", 
                        "2013/5/23", "2013/5/24", "2013/5/27", "2013/5/28", "2013/5/29", 
                        "2013/5/30", "2013/5/31", "2013/6/3", "2013/6/4", "2013/6/5", 
                        "2013/6/6", "2013/6/7", "2013/6/13"
                    ]
                }
            ],
            yAxis : [
                {
                    type : 'value',
                    scale:true,
                    boundaryGap: [0.01, 0.01]
                }
            ],
            series : [
                {
                    name:'上证指数',
                    type:'k',
                    barMaxWidth: 20,
                    itemStyle: {
                        normal: {
                            color: 'red',           // 阳线填充颜色
                            color0: 'lightgreen',   // 阴线填充颜色
                            lineStyle: {
                                width: 2,
                                color: 'orange',    // 阳线边框颜色
                                color0: 'green'     // 阴线边框颜色
                            }
                        },
                        emphasis: {
                            color: 'black',         // 阳线填充颜色
                            color0: 'white'         // 阴线填充颜色
                        }
                    },
                    data:[ // 开盘，收盘，最低，最高
                        {
                            value:[2320.26,2302.6,2287.3,2362.94],
                            itemStyle: {
                                normal: {
                                    color0: 'blue',         // 阴线填充颜色
                                    lineStyle: {
                                        width: 3,
                                        color0: 'blue'      // 阴线边框颜色
                                    }
                                },
                                emphasis: {
                                    color0: 'blue'          // 阴线填充颜色
                                }
                            }
                        },
                        [2300,2291.3,2288.26,2308.38],
                        [2295.35,2346.5,2295.35,2346.92],
                        [2347.22,2358.98,2337.35,2363.8],
                        [2360.75,2382.48,2347.89,2383.76],
                        [2383.43,2385.42,2371.23,2391.82],
                        [2377.41,2419.02,2369.57,2421.15],
                        [2425.92,2428.15,2417.58,2440.38],
                        [2411,2433.13,2403.3,2437.42],
                        [2432.68,2434.48,2427.7,2441.73],
                        [2430.69,2418.53,2394.22,2433.89],
                        [2416.62,2432.4,2414.4,2443.03],
                        [2441.91,2421.56,2415.43,2444.8],
                        [2420.26,2382.91,2373.53,2427.07],
                        [2383.49,2397.18,2370.61,2397.94],
                        [2378.82,2325.95,2309.17,2378.82],
                        [2322.94,2314.16,2308.76,2330.88],
                        [2320.62,2325.82,2315.01,2338.78],
                        [2313.74,2293.34,2289.89,2340.71],
                        [2297.77,2313.22,2292.03,2324.63],
                        [2322.32,2365.59,2308.92,2366.16],
                        [2364.54,2359.51,2330.86,2369.65],
                        [2332.08,2273.4,2259.25,2333.54],
                    ],
                    markPoint : {
                        symbol: 'star',
                        //symbolSize:20,
                        itemStyle:{
                            normal:{label:{position:'top'}}
                        },
                        data : [
                            {name : '最高', value : 2444.8, xAxis: '2013/2/18', yAxis: 2466}
                        ]
                    }
                }
            ]
        }; 

        // 为echarts对象加载数据 
        myChart.setOption(option); 
    </script>

</body>
</html>