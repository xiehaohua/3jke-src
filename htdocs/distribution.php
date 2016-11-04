<?php
    require_once 'const.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>webrx-title</title>
    <meta name="description" content="简介">
    <meta name="keywords" content="关键字">
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/layer/layer.js"></script>
    <script src="<?php echo rtrim(SHOP_URL, '/'); ?>/member/login-3jk.php"></script>
    <script type="text/javascript">
        $(function(){
            if (typeof Users_Account != 'underfined') {
                if (Users_Account != '') {
                    $('#biz_login').html(Users_Account + ' 欢迎您！');
                }
            }
        });
    </script>

    <style>

        .tedian {
            width: 100%;
            margin: 0 auto;
            margin-top: 20px;
            height: 640px;
        }

        .tedian-con {
            width: 901px;
            margin: 0 auto;
        }

        .tedian-con ul li {
            list-style: none;
            float: left;
            margin-left: 90px;
            margin-top: 30px;
        }

        .tedian-con ul .li3 {
            position: relative;
        }

        .tedian-con ul .li3 .zi {
            margin-top: 15px;
        }

        .tedian-con ul .li2 p {
            margin-left: -28px;
        }

        .tedian-con ul .li5 p {
            margin-left: -13px;
        }

        .tedian-con ul li h5 {
            color: #3c3c3c;
            font-size: 20px;
            font-family: "微软雅黑";
            font-weight: bold;
            margin-top: 15px;
        }

        .tedian-con ul li p {
            color: #3b3838;
            font-size: 16px;
            font-family: "微软雅黑";
            font-weight: normal;
            margin-left: -10px;
            margin-top: 15px;
        }

        @font-face {
            font-family: 'iconfont';
            src: url('font/iconfont.eot'); /* IE9*/
            src: url('font/iconfont.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */ url('font/iconfont.woff') format('woff'), /* chrome、firefox */ url('font/iconfont.ttf') format('truetype'), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/ url('font/iconfont.svg#iconfont') format('svg'); /* iOS 4.1- */
        }

        .iconfont {
            font-family: "iconfont" !important;
            font-size: 56px;
            font-style: normal;
            -webkit-font-smoothing: antialiased;
            -webkit-text-stroke-width: 0.2px;
            -moz-osx-font-smoothing: grayscale;
        }

        body, html, div {
            border: none;
            padding: 0;
            margin: 0;
        }

        .t {
            width: 158px;
            height: 158px;
            border: 2px solid #F0EFEF;
            border-radius: 79px;
            color: #bebebe;
            text-align: center;
            line-height: 154px;
        }

        .t:hover {
            background: red;
            color: #fff;
            border: 2px solid #fff;
        }
    </style>

</head>

<body>
<!--————————————————nav——————————————————-->
<div class="nav">
    <div class="nav-con">
        <div class="left-con">
            <img src="images/ruzhu_03.png">
        </div>

        <div class="mid-con">
            <ul>
                <li><a href="index.php">首页</a></li>
                <li><a href="shop.php">豆来开店</a></li>
                <li class="li1"><a href="distribution.php">豆来分销</a></li>
                <li><a href="#">豆来批发</a></li>
                <li><a href="#">关于我们</a></li>
            </ul>
        </div>

        <div class="right-con">
            <span class="span1" id="biz_login">没有账号？</span>
            <span class="span2">立即注册  |  常见问题</span>
        </div>
    </div>
</div>

<div class="banner2"></div>
<!--————————————————nav结束——————————————————-->

<!--——————————————————产品优势————————————-->
<div class="tit1">
    <div class="t1">
        <img src="images/dt_05.png">
    </div>
</div>

<div class="youshi">
    <div class="youshi-con">
        <ul>
            <li>
                <div class="li-con">

                    <h5>全国<span>最</span>便宜的分销系统</h5>

                    <div class="tu">
                        <a href="#"><i ico-solution1></i></a>
                    </div>

                    <p>7800元 / 年为什么这么便宜？<br>
                        只因商业模式不同！</p>

                </div>
            </li>

            <li>
                <div class="li-con">

                    <h5>销量<span>最</span>好的分销系统</h5>

                    <div class="tu">
                        <a href="#"><i class="ico-solution2"></i></a>
                    </div>

                    <p>不仅开通自己店铺还将产品同步<br>
                        到产品库，让其它商家代销你的产品</p>

                </div>
            </li>

            <li>
                <div class="li-con">

                    <h5>销量<span>最</span>好的分销系统</h5>

                    <div class="tu">
                        <a href="#"><i class="ico-solution3"></i></a>
                    </div>

                    <p>5000家用户使用4年<br>
                        技术沉淀造就品质</p>

                </div>
            </li>
        </ul>
    </div>
</div>
<!--——————优势end——————————————————————————-->

<!--——————特点部分——————————————————————————-->
<div class="tit1">
    <div class="t1">
        <img src="images/dt_08.png">
    </div>
</div>

<div class="tedian">
    <div class="tedian-con">

        <ul>
            <li>
                <div class="t">
                    <i class="iconfont">&#xe67b;</i><!--电脑-->
                </div>
                <div class="zi">
                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;官方分销商城</h5>
                    <p>不仅做自己的官方商城，还<br>
                        可以将产品同步到豆来批发<br>
                        网，让别人代卖你的产品</p>
                </div>
            </li>

            <li class="li2">
                <div class="t">
                    <i class="iconfont">&#xe61f;</i><!--火箭-->
                </div>

                <div class="zi">
                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;网站页面DIY</h5>
                    <p>傻瓜式操作，设置简单，只要会<br>
                        用电脑就可做出精美页面内设几<br>
                        十套豪华模板还可以自定义装修</p>
                </div>
            </li>

            <li class="li3">
                <div class="t t3">
                    <i class="iconfont">&#xe60b;</i><!--网络-->
                </div>
                <div class="zi">
                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;网站安全性</h5>
                    <p>数据统计及数据导出，安全<br>
                        保障，订单导出会员导出佣<br>
                        金记录导出、提现记录导出</p>
                </div>

            </li>

            <li>
                <div class="t">
                    <i class="iconfont">&#xe65b;</i><!--盾-->
                </div>

                <div class="zi">
                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;官方分销商城</h5>
                    <p>商品一键搬家，一键导入到<br>
                        此平台</p>
                </div>

            </li>

            <li class="li5">
                <div class="t">
                    <i class="iconfont">&#xe638;</i><!--退出-->
                </div>

                <div class="zi">
                    <h5>解决个人支付问题</h5>
                    <p>可对核自己的支付也可使用第<br>
                        三方支付订阅号、服务号、网<br>
                        页都可使用</p>
                </div>

            </li>

            <li>
                <div class="t">
                    <i class="iconfont">&#xe627;</i><!--跟进-->
                </div>

                <div class="zi">
                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;分销入口</h5>
                    <p>多入口分销pc端，微信端APP<br>
                        一个都不能少
                </div>

            </li>

        </ul>

    </div>
</div>


<!--————————————————————————————anli——————————————————————————-->

<div class="nj">
    <div class="nj1">
        <img src="images/dt_11.png">
    </div>
</div>

<div class="anli">
    <div class="anli-con">
        <img src="images/lizi_03.png">
    </div>
</div>

<!--_______________广告________________________-->
<div class="guanggao1">
    <div class="guanggao-con">
        <div class="left-g">
            <p>没货源，想开店</p>
            <a href="#">立即进入豆来批发</a>
        </div>

        <div class="right-g">
            <p>有货源，要供货</p>
            <a href="#">立即进入豆来批发</a>
        </div>
    </div>
</div>

<!--——————————————————footer开始————————————————————————-->
<div class="footer">
    <div class="footer-con">

        <div class="f-left">
            <img src="images/f_07.png">
        </div>

        <div class="f-mid">

            <ul class="ul1 ul">
                <li class="li1"><a href="#">关于我们</a></li>
                <li><a href="#">加入豆来</a></li>
                <li><a href="#">关于豆来</a></li>
            </ul>

            <ul class="ul3 ul">
                <li class="li1"><a href="#">联系我们</a></li>
                <li><a href="#">联系我们</a></li>
                <li><a href="#">自主解答</a></li>
            </ul>

            <ul class="ul3 ul">
                <li class="li1"><a href="#">新手指南</a></li>
                <li><a href="#">使用帮助</a></li>
                <li><a href="#">售后服务</a></li>
            </ul>

            <p>Copyright:emoji:2012-2016 网中网科技 版权所有 豫ICP备12014703号-2</p>
        </div>

        <div class="f-right">
            <img src="images/f_10.png">
            <span>400-0570-881</span>
        </div>
    </div>
</div>
<!--——————————footer结束-->

</body>
</html>
