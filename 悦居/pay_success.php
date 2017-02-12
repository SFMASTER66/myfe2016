<!DOCTYPE html>
<html>
    <head>
        <title>支付成功</title>
        <meta charset="utf-8">
        <base href="<?php echo site_url();?>">
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/pay_success.css"/>
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
<?php include "header.php"?>
        <div class="container">
            <div class="wrapper">
                <div class="pay-status">
                    <div class="success font18">支付成功！</div>
                    <div class="click title font18">点击此，跳转个人中心</div>
                </div>
                <ul class="pay-info">
                    <li class="order-num title font18">
                       订单编号：2193979323423
                    </li>
                    <hr/>
                    <li class="check-in-info">
                        <p class="title font18">入住信息：</p>
                        <div class="house-con">
                            <span class="check-in-source content font16">房源信息：</span>
                            <span class="check-in-address content font16">哈尔滨市南岗区xx路xx号    整租    一间</span>
                        </div>
                        <div class="check-in-con">
                            <span class="check-in-info content font16">入住信息：</span>
                            <span class="check-in-time content font16">2016年12月12日(星期一)10：00入住-2016年12月14日(星期三)10：00退房 共两晚</span>
                        </div>
                    </li>
                    <hr/>
                    <li class="order-info">
                        <p class="title font18">订单信息：</p>
                        <div class="order-con">
                            <sapn class="title font16">姓名：</sapn>
                            <sapn class="order-name content font16">王小丫</sapn>
                            <span class="title font16">电话;</span>
                            <span class="order-phone-number content font16">138072739182</span>
                        </div>
                    </li>
                    <hr/>
                    <li class="order-fee">
                        <p class="title font18">订单费用：</p>
                        <div class="order-house-fee">
                            <span class="order title font16">房租费用：</span>
                            <span class="house-fee content font16">￥240.00</span>
                        </div>
                        <div class="order-insur">
                            <span class="order title font16">保险：</span>
                            <span class="insur-fee content font16">￥20.00</span>
                        </div>
                        <div class="order-deposit">
                            <span class="order title font16">在线收取押金：</span>
                            <span class="deposit-fee content font16">￥100.00</span>
                        </div>
                    </li>
                </ul>
                <ul class="pay-question">
                    <li class="title font18">帮助问题：</li>
                    <li class="question1 content font16">1.我的订单要在多长时间之内才能处理?</li>
                    <li class="question2 content font16">2.我的订单被接受了以后，我该怎么做?</li>
                    <li class="content font16">更多帮助</li>
                </ul>
            </div>
        </div>
<?php include "footer.php"?>

    </body>
</html>
