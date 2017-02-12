<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>提交订单</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/submitorder.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/laydate/need/laydate.css">
    <link rel="stylesheet" href="js/laydate/skins/default/laydate.css">

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

<div class="houseinfo">
    <div class="houseinfo-div1">入住信息</div>
    <div class="houseinfo-div2">
        <span class="houseinfo-span1">房源信息:</span>
        <span class="houseinfo-span2">哈尔滨市南岗区xx路xx号</span>
    </div>
    <div class="houseinfo-div3">
        <span class="houseinfo-span3">入住时间:</span>
        <div class="houseinfo-input1"><input placeholder="请输入入住日期" name="star_time" class="laydate-icon" onclick="laydate()"></div>
        <div class="houseinfo-input2"><input placeholder="请输入离开日期" name="star_time" class="laydate-icon" onclick="laydate()"></div>
    </div>
</div>

<div class="userinfo">
    <div class="userinfo-div1">预定人信息</div>
    <div class="userinfo-div2">
        <div class="sub-userinfo-div1">
            <span class="userinfo-span1">真实姓名:</span>
            <span class="userinfo-span2">小明</span>
        </div>
        <div class="sub-userinfo-div2">
            <span class="userinfo-span3">手机号码:</span>
            <span class="userinfo-span4">123456789</span>
        </div>
    </div>

    </div>

<div class="orderinfo">
    <div class="orderinfo-div1">订单费用信息</div>
    <div class="orderinfo-div2">
        <div class="sub-orderinfo-div1">
            <span class="orderinfo-div2-span1">日均价</span>
            <span class="orderinfo-div2-span">预定数</span>
            <span class="orderinfo-div2-span">天数</span>
            <span class="orderinfo-div2-span">优惠</span>
            <span class="orderinfo-div2-span price">总价</span>
        </div>
        <div class="sub-orderinfo-div2">
            <span class="orderinfo-div2-span2">房租</span>
            <span class="orderinfo-div2-span3">￥465元</span>
            <span class="orderinfo-div2-span4">3天</span>
            <span class="orderinfo-div2-span5">3天</span>
            <span class="orderinfo-div2-span6">￥465元</span>
            <span class="orderinfo-div2-span7">￥5005元</span>
        </div>
        <div class="sub-orderinfo-div3">
            <span class="orderinfo-div2-span2">住宿旅客意外保险</span>
            <span class="orderinfo-div2-span3">￥465元</span>
            <span class="orderinfo-div2-span4">一人</span>
            <span class="orderinfo-div2-span5">3天</span>
            <span class="orderinfo-div2-span6">省￥10（悦居）</span>
            <span class="orderinfo-div2-span7">￥5005元</span>
        </div>
    </div>
    <div class="orderinfo-div3">在线收取押金:100元</div>
    <div class="orderinfo-div4">订单总金额:￥465元</div>
</div>

<div class="receiptinfo">
    <div class="receiptinfo-div1">发票信息</div>
    <div class="receiptinfo-div2">
        <div class="sub-receiptinfo-div1">
            <span class="receiptinfo-span1">填写邮寄地址</span>
            <input class="receiptinfo-input1" type="text">
        </div>
        <div class="sub-receiptinfo-div2">
            <span class="receiptinfo-span2">填写电话</span>
            <input class="receiptinfo-input2" type="text">
        </div>
    </div>
</div>

<div class="cancelinfo">
    <div class="cancelinfo-div1">退订规则</div>
    <p class="cancelinfo-p1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;配合图片进行说明Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin
        gravida dolor sit amet lacus accumsan et viverra justo commodo.
    </p>
    <div class="cancelinfo-div2">
<!--        <button class="cancelinfo-button1"></button>-->
        <input class="cancelinfo-input1" type="radio">
        <div class="sub-cancelinfo-div1">我同意退订规则</div>
    </div>
</div>


<div class="commit">
    <button type="button" class="btn">提交订单</button>
</div>

<?php include "footer.php"?>
</body>
<script src="js/laydate/laydate.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>


</html>