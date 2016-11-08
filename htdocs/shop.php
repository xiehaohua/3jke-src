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
    <script src="<?php echo rtrim(SHOP_URL, '/'); ?>/member/login-3jke.php"></script>
    <script type="text/javascript">
        $(function(){
            if ("underfined" != typeof Users_Account) {
                if (Users_Account != '') {
                    $('#biz_login').html('<a target="_blank" href="<?php echo rtrim(SHOP_URL, '/'); ?>/member">' + Users_Account + ' 欢迎您！');
                }
            }
        });
    </script>
</head>

<body>
<div class="nav">
    <div class="nav-con">
        <div class="left-con">
            <img src="images/ruzhu_03.png">
        </div>

        <div class="mid-con">
            <ul>
                <li><a href="index.php">首页</a></li>
                <li class="li1"><a href="shop.php">豆来开店</a></li>
                <li><a href="distribution.php">豆来分销</a></li>
                <li><a href="javascript:;">豆来批发</a></li>
                <li><a href="javascript:;">关于我们</a></li>
            </ul>
        </div>

        <div class="right-con">
           <span class="span2" id="biz_login"><a target="_blank" href="<?php echo rtrim(SHOP_URL, '/'); ?>/reg.php">没有账号？  |  立即注册</a></span>
            <span class="span1">常见问题</span>
        </div>
    </div>
</div>
<div class="banner_x"></div>
<div class="second">
    <div class="sec-con">
        <img src="images/s_05.png">
        <a href="javascript:;">立即注册开店</a>
    </div>
</div>

<div class="youshi">
    <div class="youshi-con1">
        <div class="img"><img src="images/tu_03.png"></div>
        <ul>
            <li>
                <img src="images/tu_07.png">
                <p>人人都能成为分销商
                    分销您的产品及业务</p>
            </li>

            <li>
                <img src="images/tu_10.png">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;裂变式营销 </p>
            </li>

            <li>
                <img src="images/tu_13.png">
                <p>自助计算佣金提成
                    自助分账店主无忧</p>
            </li>

            <li>
                <img src="images/tu_15.png">
                <p>绑定微信公众号
                    让粉丝迅速暴增</p>
            </li>
        </ul>
    </div>
</div>

<div class="tit">

    <p>建立一个庞大的销售网络让数以万人帮你卖货</p>
    <img src="images/tit_02.jpg">
</div>

<div class="lizi">
    <div class="lizi-con">

        <div class="left-1 l-con">
            <p class="p1 p">李某某：在校大学生</p>
            <p class="p2 p">业余时间开店6个月，每月会员超过200人<br>
                使用豆来网平台后帮助了很多投资者找到<br>
                人生的第一桶金，甚至可以说达到"人生小<br>
                巅峰"！希望对大家有用。分享是幸福！<br>
            </p>
        </div>

        <div class="right-1 l-con">
            <p class="p1 p">李某某：在校大学生</p>
            <p class="p2 p">业余时间开店6个月，每月会员超过200人<br>
                使用豆来网平台后帮助了很多投资者找到<br>
                人生的第一桶金，甚至可以说达到"人生小<br>
                巅峰"！希望对大家有用。分享是幸福！<br>
            </p>
        </div>


        <div class="left-2 l-con">
            <p class="p1 p">李某某：在校大学生</p>
            <p class="p2 p">业余时间开店6个月，每月会员超过200人<br>
                使用豆来网平台后帮助了很多投资者找到<br>
                人生的第一桶金，甚至可以说达到"人生小<br>
                巅峰"！希望对大家有用。分享是幸福！<br>
            </p>
        </div>

        <div class="right-2 l-con">
            <p class="p1 p">李某某：在校大学生</p>
            <p class="p2 p">业余时间开店6个月，每月会员超过200人<br>
                使用豆来网平台后帮助了很多投资者找到<br>
                人生的第一桶金，甚至可以说达到"人生小<br>
                巅峰"！希望对大家有用。分享是幸福！<br>
            </p>
        </div>


    </div>
</div>


<!--_______________广告________________________-->
<div class="guanggao">
    <div class="guanggao-con">
        <div class="left-g">
            <p>没货源，想开店</p>
            <a href="javascript:;">立即进入豆来批发</a>
        </div>

        <div class="right-g">
            <p>有货源，要供货</p>
            <a href="javascript:;">立即进入豆来批发</a>
        </div>
    </div>
</div>

<!--——————————————————footer开始————————————————————————-->

</div>
<div class="footer">
    <div class="footer-con">

        <div class="f-left">
            <img src="images/f_07.png">
        </div>

        <div class="f-mid">

            <ul class="ul1 ul">
                <li class="li1"><a href="javascript:;">关于我们</a></li>
                <li><a href="javascript:;">加入豆来</a></li>
                <li><a href="javascript:;">关于豆来</a></li>
            </ul>

            <ul class="ul3 ul">
                <li class="li1"><a href="javascript:;">联系我们</a></li>
                <li><a href="javascript:;">联系我们</a></li>
                <li><a href="javascript:;">自主解答</a></li>
            </ul>

            <ul class="ul3 ul">
                <li class="li1"><a href="javascript:;">新手指南</a></li>
                <li><a href="javascript:;">使用帮助</a></li>
                <li><a href="javascript:;">售后服务</a></li>
            </ul>

            <p>Copyright:emoji:2012-2016 网中网科技 版权所有 豫ICP备12014703号-2</p>
        </div>

        <div class="f-right">
            <img src="images/f_10.png">
            <span>400-0570-881</span>
        </div>

    </div>
</div>

</body>
</html>
