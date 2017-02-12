<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>确认订单</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/confirmorder.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php include "header.php"?>

<div class="payline">
    <div class="payline-div1"></div>
    <span class="payline-span1">填写订单</span>
    <span class="payline-span2">订单确认</span>
    <span class="payline-span3">支付定金</span>
    <span class="payline-span4">预定完成</span>
</div>

<div class="submitsuccess">
    <span class="submitsuccess-span1">订单提交成功!</span>
    <span class="submitsuccess-span2">确认后，我们后发送短信通知您支付订金</span>
</div>

<div class="orderinfo">
    <div class="orderinfo-div1">
        <span>订单编号:</span>
        <span>2222222222222</span>
    </div>
    <hr class="hr1">
    <div class="houseinfo">
        <span class="houseinfo-span1">入住信息:</span>
        <div class="houseinfo-div1">
            <span>房源信息:</span>
            <span class="houseinfo-span2">哈尔滨市</span>
        </div>
        <div class="houseinfo-div2">
            <span>入住信息:</span>
            <span class="houseinfo-span2">201633433433333333333455</span>
        </div>
    </div>
    <hr class="hr2">
    <div class="orderuser">
        <span class="orderuser-span1">预定信息:</span>
        <div class="orderuser-div1">
            <div class="sub-orderuser-div1">
                <span>姓名:</span>
                <span>王小丫</span>
            </div>
            <div class="sub-orderuser-div2">
                <span>电话:</span>
                <span>12345678</span>
            </div>
        </div>
    </div>
    <hr class="hr3">
    <div class="orderoutlay">
        <span class="orderoutlay-span1">订单费用:</span>
        <div  class="orderoutlay-div1">
            <div>
                <span>房租费用:</span>
                <span class="orderoutlay-span2">￥240.00</span>
            </div>
            <div>
                <span>保险:</span>
                <span class="orderoutlay-span3">￥20.00</span>
            </div>
            <div>
                <span>在线收取押金:</span>
                <span class="orderoutlay-span4">￥100.00</span>
            </div>
        </div>
    </div>
    <hr class="hr4">
    <div class="wayofpayment">
        <span class="wayofpayment-span1">支付方式:</span>
        <div class="wayofpayment-div1">
            <input type="radio" name="payment">
            <span class="wayofpayment-span2">微信</span>
            <input type="radio" name="payment" class="zhifubao">
            <span class="wayofpayment-span3">支付宝</span>
        </div>
    </div>
    <hr class="hr5">
    <div class="commit">
        <button type="button" class="btn">去支付</button>
    </div>
</div>

<div class="help">
    <span>帮助问题:</span>
    <p class="help-p1">1.我的订单要在多长时间之内才能处理？</p>
    <p class="help-p2">2.我的订单被接受了以后，我该怎么做？</p>
    <a href="#">更多帮助></a>
</div>

<?php include "footer.php"?>

</body>
</html>