<!DOCTYPE html>
<!-- saved from url=(0030)http://wallwa.com/user/profile -->
<html><head lang="zh-cmn-Hans"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp">
        <meta name="description" content="Wallwa 墙蛙 - 墙上艺术的专家。">
        <meta name="keywords" content="墙蛙,定制画,装饰画,墙上艺术,钉子">
        <base href="<?php echo site_url()?>">
        <title>个人信息</title>
        <link rel="stylesheet" href="css/editProfile/base.css">
        <link rel="stylesheet" href="css/editProfile/atom.css">
        <link rel="stylesheet" href="css/editProfile/new.css">
        <link rel="stylesheet" href="css/index/new.css">
        <link rel="stylesheet" href="css/common.css">

    <link rel="stylesheet" href="css/createNewItem/new.css">
    <link rel="stylesheet" href="css/editProfile/product.css">

<link rel="stylesheet" href="css/editProfile/userAccount.css">
<link rel="stylesheet" href="css/editProfile/lightbox.css">
<link rel="stylesheet" href="css/editProfile/validationEngine.css">
<link rel="stylesheet" href="css/editProfile/jquery.Jcrop.css">
<link rel="stylesheet" href="css/editProfile/cxcalendar.css">

    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php include "custom1header.php"?>


<input class="hide" value="true" id="login-status">
<div class="search-zzc"></div>


<?php include "user-head-bnr.php"?>

<div class="modal fade" id="change-bnr-dialog" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body clearfix">
                <div class="change-bnr clearfix">
                    <h2 class="change-bnr-title">修改店招
                        <a class="close close-light" data-dismiss="modal" aria-label="Close" href="javascript:void(0)"><span aria-hidden="true">×</span></a>
                    </h2>
                    <div class="change-bnr-list row">
                        <div class="col-md-6 select-img-area">
                            <div class="album-select">
                                <span class="wa wa-caret-down"></span>
                                <ul class="album-text-sel">
                                    <li class="album-item" data-id="0">墙蛙推荐</li>
                                </ul>
                            </div>

                            <div class="img-list-wrap">
                                <h4>墙蛙推荐</h4>
                                <div class="img-list-area clearfix">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 upload-area">
                            <div class="upload-box" style="position: relative;">
                                <h4>自定义上传</h4>
                                <div class="upload-loading">

                                </div>
                                <span class="loading-percent">
                                </span>
                                <a href="javascript:void(0)" id="upload-bnr-btn" class="bnr-link custom-link" style="z-index: 1;">
                                    <span class="img-wrap">
                                    </span>
                                    <i class="wa wa-cloud-upload"></i>
                                    <span class="upload-msg"> 添加本地图片</span>
                                    <span class="upload-tips">建议上传1920x200像素及以上的图片<br>文件大小小于1M，以达到最佳效果</span>
                                    <span class="error-msg error"></span>
                                    <span class="wa-hover-layout">
                                        <span class="wa wa-cloud-update"></span>
                                        <span class="change-tips">更换作品</span>
                                    </span>
                                </a>
                            <div id="html5_1b79n60munf5pnd1n3b99bsau3_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 0px; height: 0px; overflow: hidden; z-index: 0;"><input id="html5_1b79n60munf5pnd1n3b99bsau3" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept="image/jpeg,image/png"></div></div>
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="btn btn-primary pull-right" id="bnr-save-btn">保存</a>
                    <a href="javascript:void(0)" class="btn btn-default pull-right mr10 w120" data-dismiss="modal" aria-label="Close">取消</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="user-nav">
    <ul class="user-nav-ul clearfix">
<!--        <li class="user-pro-list-list"><a href="http://wallwa.com/user/item/list">我的产品</a></li>-->
<!--        <li class="user-intro"><a href="http://wallwa.com/user">简介</a></li>-->
<!--        <li class="user-shop"><a href="/goods/master">我要开店</a></li>-->
<!--        <li class="user-like"><a href="http://wallwa.com/user/like">喜欢</a></li>-->
<!--        <li class="user-follow"><a href="http://wallwa.com/user/follow">关注</a></li>-->
<!--        <li class="user-coupon"><a href="http://wallwa.com/user/coupon">我的优惠</a></li>-->
<!--        <li class="user-album"><a href="http://wallwa.com/album">作品集</a></li>-->
<!--        <li class="user-income"><a href="http://wallwa.com/user/income">我的收入</a></li>-->
    </ul>
</div>





<div class="ww-wrap user-wrap">
    <div class="user-cont-wrap cont-wrap container">
        <div class="row">

          <?php include "profile-tab-menu.php"?>

            <div class="main-cont tab-content col-md-10">
                <div role="tabpanel" id="profile-setting" class="tab-pane fade active in">
                    <div class="form-wrap">
    <form class="form form-base user-form" id="infoForm">
        <div class="panel panel-default">
            <div class="panel-heading">个人信息</div>
            <div class="panel-body profile-panel-body">
                <div class="form-group">
                    <label for="nickname">昵称：</label>
                    <div class="form-cont">
                        <span class="msg color-d1"></span>
                        <input type="text" name="username" class="form-control validate[required]" id="nickname" placeholder="昵称">
                    </div>
                </div>
                <div class="form-group sex-group">
                    <label>性别：</label>
                    <div class="form-cont">
                        <label class="radio-inline text-left" for="female">
                            <input type="radio" name="sex" id="female" value="女" checked="">
                            女
                        </label>
                        <label class="radio-inline text-left" for="male">
                            <input type="radio" name="sex" id="male" value="男">
                            男
                        </label>
                    </div>
                </div>
<!--                <div class="form-group place-group">-->
<!--                    <label for="abode">居住地：</label>-->
<!--                    <div class="form-cont">-->
<!--                        <span class="msg color-d1"></span>-->
<!--                        <input type="text" class="form-control validate[required]"  placeholder="居住地">-->
<!--                    </div>-->
<!--                </div>-->
                <div class="form-group mobile-form-group validated">
                    <label for="mobile">手机：</label>
                    <div class="form-cont">
                        <span class="msg color-d1"></span>
                        <input type="text" name="phone" class="form-control validate[required]"  placeholder="电话">
                    </div>
                </div>
                <div class="form-group">
                    <label for="intro">邮箱：</label>
                    <div class="form-cont">
                        <span class="msg color-d1"></span>
                        <input type="text"  name="email" class="form-control validate[required]"  placeholder="邮箱">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg userinfo" id="submit-btn">保存</button>
    </form>
</div>
                </div>

<!--                <div role="tabpanel" id="master-setting" class="tab-pane fade">-->
<!--                    <div class="form-wrap">-->
<!--    <div class="panel panel-default">-->
<!--        <div class="panel-heading">我要开店</div>-->
<!--        <div class="panel-body master-panel-body ">-->
<!--            <div class="master-tips">-->
<!--                <p class="mb30">为了保障图片的正版权益，开店需先经过身份认证，提交您的个人身份信息。<br>-->
<!--                    您也可以选择暂不认证，直接开店。体验期间，您可以正常使用墙蛙网的开店功能。为确保您的资金安全，在您进行-->
<!--                    收益提现时，仍需提交个人身份信息。</p>-->
<!--                <a id="master-start-edit" class="btn btn-default btn-group-lg">开店认证</a>-->
<!--                <a id="master-immd" class="btn btn-default btn-group-lg">暂不认证，直接开店</a>-->
<!--            </div>-->
<!--            <div class="item form-item master-cont-wrap" style="display: none;">-->
<!--                <div class="title">-->
<!--                    开店需先经过身份证认证，请提交您的个人身份信息-->
<!--                </div>-->
<!---->
<!--                <form class="form form-base user-form" id="master-form">-->
<!--                    <input type="hidden" id="master-user-id" value="14499">-->
<!--                    <div class="form-group">-->
<!--                        <label for="master-name">真实姓名：</label>-->
<!--                        <div class="form-cont">-->
<!--                            <input type="text" class="form-control validate[required]" id="master-name" placeholder="真实姓名">-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="form-group mobile-form-group validated">-->
<!--                        <label for="master-mobile">手机号码：</label>-->
<!--                        <div class="form-cont">-->
<!--                            <div class="item normal-item">-->
<!--                                <div class="form-cont-input">-->
<!--                                    <select class="user-phone-select" id="identity-phone1">-->
<!--                                        <option value="">中国大陆</option>-->
<!--                                        <option value="852-">香港</option>-->
<!--                                        <option value="853-">澳门</option>-->
<!--                                        <option value="886-">台湾</option>-->
<!--                                    </select>-->
<!--                                    <input type="text" class="form-control validate[required,custom[mobile2]]" id="master-mobile" placeholder="手机号码">-->
<!--                                </div>-->
<!--                                <button class="btn btn-default send-code-btn ml10">-->
<!--                                    验证手机号-->
<!--                                </button>-->
<!--                                <span class="msg color-d1"></span>-->
<!--                            </div>-->
<!--                            <div class="item valid-item">-->
<!--                                <span class="validated-mb">18745688642</span>(已验证)-->
<!--                            </div>-->
<!--                            <div class="valid-block mt20">-->
<!--                                <span class="msg color-d1"></span>-->
<!--                                <input type="text" class="form-control mb20" id="master-valid-code" placeholder="验证码">-->
<!--                                <button class="btn btn-primary valid-mb-btn">验证</button>-->
<!--                                <button class="btn btn-link cancel-valid">取消</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="form-group">-->
<!--                        <label for="identity-card">身份证号：</label>-->
<!--                        <div class="form-cont">-->
<!--                            <input type="text" class="form-control validate[required, custom[chinaIdLoose]] w300" id="identity-card" placeholder="身份证号">-->
<!--                        </div>-->
<!--                        <span class="identity-span ml10">国家/地区：</span>-->
<!--                        <div class="form-cont">-->
<!--                            <select class="form-control w110" id="identity-district">-->
<!--                                <option value="CN">中国大陆</option>-->
<!--                                <option value="HK">香港</option>-->
<!--                                <option value="MO">澳门</option>-->
<!--                                <option value="TW">台湾</option>-->
<!--                                <option value="Other">海外</option>-->
<!--                            </select>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="form-group">-->
<!--                        <label>身份证正面照片：</label>-->
<!--                        <div class="form-cont">-->
<!--                            <button type="button" id="front-upload" class="btn btn-default vt" style="position: relative; z-index: 1;">点击上传</button>-->
<!--                            <input type="hidden" id="front-rand" class="validate[required]">-->
<!--                            <div class="img-wrap mt10">-->
<!--                                <div class="mask"></div>-->
<!--                                <img src="http://wallwa.com/user/profile" alt="身份证正面照片" class="hide" width="100">-->
<!--                            </div>-->
<!---->
<!--                        <div id="html5_1b79n6gsosal1fq7187jsg2qaa_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 0px; height: 0px; overflow: hidden; z-index: 0;"><input id="html5_1b79n6gsosal1fq7187jsg2qaa" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,image/png"></div></div>-->
<!--                        <div class="show-example">-->
<!--                            <a href="javascript:void(0)">-->
<!--                                查看范例-->
<!--                                <img src="images/editProfile/head.jpg">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="form-group">-->
<!--                        <label>身份证反面照片：</label>-->
<!--                        <div class="form-cont">-->
<!--                            <button type="button" id="reverse-upload" class="btn btn-default vt" style="position: relative; z-index: 1;">点击上传</button>-->
<!--                            <input type="hidden" id="reverse-rand" class="validate[required]">-->
<!--                            <div class="img-wrap mt10">-->
<!--                                <div class="mask"></div>-->
<!--                                <img src="http://wallwa.com/user/profile" alt="身份证反面照片" class="hide " width="100">-->
<!--                            </div>-->
<!--                        <div id="html5_1b79n6gss1bne1ij5khglhq1jkhc_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 0px; height: 0px; overflow: hidden; z-index: 0;"><input id="html5_1b79n6gss1bne1ij5khglhq1jkhc" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,image/png"></div></div>-->
<!--                        <div class="show-example">-->
<!--                            <a href="javascript:void(0)">-->
<!--                                查看范例-->
<!--                                <img src="images/editProfile/back.jpg">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="form-group">-->
<!--                        <label>手持身份证照片：</label>-->
<!--                        <div class="form-cont">-->
<!--                            <button type="button" id="hand-upload" class="btn btn-default vt" style="position: relative; z-index: 1;">点击上传</button>-->
<!--                            <input type="hidden" id="hand-rand" class="validate[required]">-->
<!--                            <div class="img-wrap mt10">-->
<!--                                <div class="mask"></div>-->
<!--                                <img src="http://wallwa.com/user/profile" alt="手持身份证照片" class="hide" width="100">-->
<!--                            </div>-->
<!--                        <div id="html5_1b79n6gsst7h1vs7t0c15obhjje_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 0px; height: 0px; overflow: hidden; z-index: 0;"><input id="html5_1b79n6gsst7h1vs7t0c15obhjje" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,image/png"></div></div>-->
<!--                        <div class="show-example">-->
<!--                            <a href="javascript:void(0)">-->
<!--                                查看范例-->
<!--                                <img src="images/editProfile/with-hand.jpg">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="title">-->
<!--                        请认真阅读以下协议，确认无误后点击同意选项并提交信息-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <div class="copyright-detail">-->
<!--                            <p readonly="">-->
<!--                                1、所有作品的版权都依然属于您，我们是在您的签约授权下，生成商品用以销售。<br>-->
<!--                                2、作品图片上传后将保存在后台，在墙蛙网展示的产品仅会使用原图的缩略图。<br>-->
<!--                                3、除您之外的任何人都无法取得原图，以保障原图不被窃取，原图的保存在服务器仅仅是用于 最高质量的订单生产。<br>-->
<!--                                4、不可上传任何含有反动政治、黄色、严重暴力、污秽及损害他人利益的内容，一旦发现，墙蛙有权下架该商品且永久封杀账号，无法分成改内容所得利润。此外因此产生的所有经济、法律责任，由您本人承担。<br>-->
<!--                                5、   必须保证上传作品的原创性，正视版权归属。一旦发生盗图、版权疑问，墙蛙有权下架该商品且永久封杀账号，无法分成改内容所得利润。此外因此产生的所有经济、法律责任，由您本人承担。<br>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <label class="checkbox-inline text-left copyright-label" id="rule-allow-area" for="rule-allow-checkbox">-->
<!--                            <input class="validate[required]]" type="checkbox" name="weixin" id="rule-allow-checkbox">-->
<!--                            我已阅读并同意<a href="http://wallwa.com/copyright"> 《杭州墙蛙科技有限公司版权承诺协议》</a>-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <button type="submit" class="btn btn-primary btn-lg" id="master-submit-btn">保存</button>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</div>-->
<!--                </div>-->

<!--                <div role="tabpanel" id="withdraw-setting" class="tab-pane fade">-->
<!---->
<!--<!--                    <div class="form-wrap">-->
<!--<!--    <div class="panel panel-default">-->
<!--<!--        <div class="panel-heading">提现账户</div>-->
<!--<!--        <div class="panel-body">-->
<!--<!--            <ul id="withdraw-list" class="list-unstyled user-addr-list">-->
<!--<!--</ul>-->
<!--<!--            <a href="http://wallwa.com/user/profile#" id="add-withdraw">+新增提现账户</a>-->
<!--<!--        </div>--
<!--<!--    </div>-->
<!--<!--</div>-->
<!---->
<!--<div class="modal fade" id="withdraw-from-wrap">-->
<!--    <div class="modal-dialog">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>-->
<!--                <h4 class="modal-title">提现账户</h4>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <div class="form form-horizontal form-base" id="withdraw-from">-->
<!--                    <div class="form-group">-->
<!--                        <label for="ship-name">账户类型：</label>-->
<!--                        <div class="form-cont account">-->
<!--                            <button class="btn btn-default active"><span class="wa wa-check-tri"></span>银行账户</button>-->
<!--                            <!--<button class="btn btn-default"><span class="wa wa-check-tri"></span>支付宝账户</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="btn-div">-->
<!--                        <form class="bank active" id="bankform">-->
<!--                            <div class="form-group">-->
<!--                                <label for="account-name">开户名：</label>-->
<!--                                <div class="form-cont">-->
<!--                                    <input class="form-control width346 validate[required]" type="text" maxlength="40" id="account-name">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label>开户行：</label>-->
<!--                                <div class="form-cont form-inline">-->
<!--                                    <select class="form-control" id="banks">-->
<!--                                        <option value="中国工商银行">中国工商银行</option>-->
<!--                                        <option value="中国农业银行">中国农业银行</option>-->
<!--                                        <option value="中国建设银行">中国建设银行</option>-->
<!--                                        <option value="中国银行">中国银行</option>-->
<!--                                        <option value="招商银行">招商银行</option>-->
<!--                                        <option value="中国邮政储蓄银行">中国邮政储蓄银行</option>-->
<!--                                        <option value="中国民生银行">中国民生银行</option>-->
<!--                                        <option value="中国光大银行">中国光大银行</option>-->
<!--                                        <option value="中信银行">中信银行</option>-->
<!--                                        <option value="交通银行">交通银行</option>-->
<!--                                        <option value="兴业银行">兴业银行</option>-->
<!--                                        <option value="上海浦东发展银行">上海浦东发展银行</option>-->
<!--                                        <option value="中国人民银行">中国人民银行</option>-->
<!--                                        <option value="华夏银行">华夏银行</option>-->
<!--                                        <option value="深圳发展银行">深圳发展银行</option>-->
<!--                                        <option value="广东发展银行">广东发展银行</option>-->
<!--                                        <option value="国家开发银行">国家开发银行</option>-->
<!--                                        <option value="中国进出口银行">中国进出口银行</option>-->
<!--                                        <option value="中国农业发展银行">中国农业发展银行</option>-->
<!--                                    </select>-->
<!--                                    <input class="form-control validate[required,custom[chinese]]" type="text" maxlength="40" id="bank-name" placeholder="支行名称">-->
<!--                                </div>-->
<!--                                <div>-->
<!--                                    <label></label>-->
<!--                                    <div class="form-cont">-->
<!--                                        <span>注：支行名称请务必填写准确，否则收入无法提现</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label for="bank-mb">账号： </label>-->
<!--                                <div class="form-cont">-->
<!--                                    <input class="form-control width346 validate[required,custom[number],minSize[16]]" type="text" placeholder="" id="bank-mb" maxlength="40">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label>&nbsp;</label>-->
<!--                                <div class="form-cont">-->
<!--                                    <button id="addBankBtn" class="btn btn-primary">保存账户</button>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </form>-->
<!---->
<!--                        <form class="alipay" id="alipayform">-->
<!--                            <div class="form-group">-->
<!--                                <label for="ship-name">真实姓名：</label>-->
<!--                                <div class="form-cont">-->
<!--                                    <input class="form-control width346 validate[required,custom[chinese]]" type="text" maxlength="40" id="ali-name" name="">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label for="ship-mb">账号： </label>-->
<!--                                <div class="form-cont">-->
<!--                                    <input class="form-control width346 validate[required]" type="text" placeholder="" id="alipay-mb" maxlength="50">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label>&nbsp;</label>-->
<!--                                <div class="form-cont">-->
<!--                                    <button id="addAlipayBtn" class="btn btn-primary">保存账户</button>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--                </div>-->

                <div role="tabpanel" id="password-setting" class="tab-pane fade">
                    <div class="form-wrap">
    <form class="form form-base user-form" id="userPwdFrom">
        <div class="panel panel-default">
            <div class="panel-heading">修改密码</div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="oldpwd">旧密码：</label>
                    <div class="form-cont">
                        <input type="password" class="oldpsd form-control validate[required,minSize[6]]" id="oldpwd" placeholder="旧密码">
                    </div>
                </div>
                <div class="form-group">
                    <label for="newpwd">新密码：</label>
                    <div class="form-cont">
                        <input type="password" class="newpsd form-control validate[required,minSize[6]]" id="newpwd" placeholder="必须且只含有数字和字母，6-10位">
                    </div>
                </div>
                <div class="form-group">
                    <label for="cfmpwd">确认密码：</label>
                    <div class="form-cont">
                        <input type="password" class="renewpsd form-control validate[equals[newpwd]]" id="cfmpwd" placeholder="确认密码">
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-lg passwordbtn" id="submit-btn">保存</button>
    </form>
</div>
                </div>


                <div role="tabpanel" id="address-setting" class="tab-pane fade">
                    <div class="form-wrap">
                        <div class="panel panel-default">
                            <div class="panel-heading">收货地址</div>
                            <div class="panel-body">
                                <ul id="address-list" class="list-unstyled user-addr-list">
                                </ul>
                                <!--            <a href="javascript:;" id="add-btn">+新增收货地址</a>-->



                                <div class="modal-body">
                                    <form class="form form-horizontal form-base" id="address-from">
                                        <input type="hidden" name="id" id="addrId" value="">
                                        <div class="form-group">
                                            <label for="ship-address"><strong>*</strong> 详细地址：</label>
                                            <div class="form-cont">
                                                <input class="form-control validate[required]" type="text" maxlength="120" id="ship-address" name="Detail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <div class="form-cont">
                                                <button type="submit" id="addAddrBtn" class="btn btn-primary">确认收货地址</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="address-from-wrap" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title">收货地址</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div role="tabpanel" id="head-img-setting" class="tab-pane fade">
                    <div class="form-wrap">
    <div class="panel panel-default">
        <div class="panel-heading">上传图片</div>
        <div class="single-upload" id="upload-btn" style="z-index: 1;">

            <img src="" alt="" id="preview" class="btn btn-block">
            <form action="user/userProImg" method="post" enctype="multipart/form-data">
                <input  type="file" name="userProImg" accept="*/*"  class="btn btn-block btn-primary uploadPic file_upload" id="trigger-upload">
                <input type="submit" class="submit" value="上传作品">
            </form>
    <span class="single-upload-preview">
        <div class="wa-hover-layout">
            <span class="wa wa-cloud-update"></span>
            <span class="change-tips">更换作品</span>
        </div>
        <img alt="Clear" src="http://wallwa.com/item/new">
    </span>
            <div class="single-upload-select">
                <i class="wa wa-cloud-upload"></i>
                <div class="primary-link upload-tips">上传头像</div>
            </div>
        </div>

    </div>
</div>
</div>

            </div>
        </div>
    </div>
</div>

<div id="footer">
    <div class="ft-wrapper">
        <div class="footer-hd mb20">
            <div class="ft-right">
                 <ul class="list-inline">
                     <li><a href="http://wallwa.com/copyright">版权声明</a></li>
                     <li><a href="http://wallwa.com/sign">版权签约</a></li>
                     <li><a href="http://wallwa.com/useAgreement">用户协议</a></li>
                     <li><a href="http://wallwa.com/issue">常见问题</a></li>
                     <li><a href="http://wallwa.com/about">关于墙蛙</a></li>
                     <li><a href="http://wallwa.com/join">加入墙蛙</a></li>
                     <li><a href="http://wallwa.com/contact">联系我们</a></li>
                 </ul>
            </div>
            <div class="social-follow">
                <span class="item title">关注我们</span>
                <a href="http://weibo.com/wallwa" class="item social-item" target="_blank">
                    <i class="ww-icon social-i weibo-b"></i>
                </a>
                <a href="javascript:void(0)" class="item social-item weixin-item">
                    <i class="ww-icon social-i weixin-b"></i>
                    <img src="images/editProfile/weixinma.png" alt="微信二维码" class="erweima">
                </a>
                <span class="item ceo-item">
                    意见反馈 <a href="mailto:ceo@wallwa.com?subject=%E5%8F%8D%E9%A6%88%E6%9C%89%E5%A5%96&amp;body=%E6%82%A8%E5%9C%A8%E4%BD%BF%E7%94%A8%E4%B8%AD%E5%8F%91%E7%8E%B0%E5%A2%99%E8%9B%99%E7%BD%91%E7%9A%84%E4%B8%8D%E8%B6%B3%E4%B9%8B%E5%A4%84%EF%BC%8C%E4%B8%8D%E5%A5%BD%E7%9A%84%E4%BD%93%E9%AA%8C%EF%BC%8C%E6%8A%80%E6%9C%AF%E7%9A%84bug%EF%BC%8C%E8%AF%B7%E6%82%A8%E5%92%8C%E6%88%91%E8%81%94%E7%B3%BB%EF%BC%8C%E4%BC%98%E8%B4%A8%E7%9A%84%E5%8F%8D%E9%A6%88%EF%BC%8C%E4%B8%B0%E5%8E%9A%E7%9A%84%E5%A5%96%E5%93%81%E3%80%82%E8%AF%B7%E5%9C%A8%E9%82%AE%E4%BB%B6%E4%B8%AD%E6%B3%A8%E6%98%8E%E6%82%A8%E7%9A%84%E5%A2%99%E8%9B%99%E7%BD%91%E8%B4%A6%E5%8F%B7%E3%80%82"> ceo@wallwa.com</a>
                </span>
            </div>
        </div>
        <p class="copyrights">© 2015 wallwa.com 版权所有 浙ICP备 1102094</p>
    </div>
</div>
<a href="http://wallwa.com/user/profile#top" id="back-to-top" class="active">
    <i class="glyphicon glyphicon-chevron-up"></i>
    <div class="inner1"><div class="inner2"></div></div>
</a>
<script src="js/editProfile/hm.js"></script><script type="text/javascript" src="js/editProfile/common.js"></script>
<script type="text/javascript" src="js/editProfile/ejs.min.js"></script>
<script src="js/editProfile/moxie.min.js"></script>
<script src="js/editProfile/plupload.dev.js"></script>
<script src="js/editProfile/userAccount.js"></script><div id="prompt" class="ww-prompt static-prompt"><div class="alert"></div></div>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?8695c25c89ea839a3312d658c8b34e44";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

<script src="js/jquery-1.12.4.js"></script>
<script>

    $(function(){
        $(".profile-menu-list li").on("click",function(){
            var $index=$(this).index();
            console.log($index);
            $(this).addClass("active").siblings().removeClass("active");
            $('.tab-pane').eq($index).addClass("active in").siblings().removeClass("active in");
        });


        $(".head-icon").on("click",function(){
            $(".profile-menu-list li:eq(3)").addClass("active").siblings().removeClass("active");
            $('.tab-pane').eq(3).addClass("active in").siblings().removeClass("active in");
        });


        var $username=$('input[name="username"]');
        var $newusername;
        $username.on("blur",function(){
            $newusername=$(this).val();
            $.get("user/checknewusername",{newusername:$newusername},function(data){
                if(data=="success"){
                }else if(data=="fail"){
                    $username.val("该用户名已被占用").css("color","red");
                    $(".userinfo").attr("disabled",true);
                }
            });
            if($newusername.length>6){
                $username.val("用户名长度小于6").css("color","red");
            }else if($newusername==""){
                $username.val("用户名不能为空").css("color","red");
            }

        });
        $username.on("focus",function(){
            $username.val($newusername).css("color","black");
        });
        $('input[name="username"]').on("blur",function(){
            recheck();
        });
        $('input[name="phone"]').on("blur",function(){
            recheck();
        });
        $('input[name="email"]').on("blur",function(){
            recheck();
        });
        $('input[name="address"]').on("blur",function(){
            recheck();
        });
        recheck();
        function recheck(){
            if($username.val()=="该用户名已被占用"||$username.val()=="用户名长度小于6"||$username.val()=="用户名不能为空"){
                console.log("55555");
                $(".userinfo").attr("disabled",true);
            }else{
                register();
            }
        }
        register();
        function register(){
            if($('input[name="username"]').val()!=""&&$('input[name="phone"]').val()!=""&&$('input[name="email"]').val()!=""){
                console.log("2222");
                $(".userinfo").attr("disabled",false);
            }else{
                no();
            }
        }
        no();
        function no(){
            if($('input[name="username"]').val()==""||$('input[name="phone"]').val()==""||$('input[name="email"]').val()==""){
                $(".userinfo").attr("disabled",true);
            }
        }

        $(".userinfo").on("click",function(){
            var $username=$('input[name="username"]').val();
            var $phone=$('input[name="phone"]').val();
            var $email=$('input[name="email"]').val();
            var $sex=$('input:checked').val();
            $.post("user/changedetail",{username:$username,phone:$phone,email:$email,sex:$sex},function(data){
                if(data=="success"){
                    window.location.href="user/editProfile";
                }else if(data=="fail"){
                }
            });
        });


        nochangepsd();
        function nochangepsd(){
            if($(".oldpsd").val()==""||$(".newpsd").val()==""||$(".repsdpsd").val()==""){
                $(".passwordbtn").attr("disabled",true);
                $(".renewpsd").attr("disabled",true);
            }
        }
        $(".oldpsd").on("blur",function(){
            $(".tip").remove();
            var _this=this;
            var $oldpsd=$(this).val();
            console.log($oldpsd);
            $.post("user/changepsd",{oldpsd:$oldpsd},function(data){
                if(data=="success"){
                    $(_this).after($('<span class="tip" style="color: green">旧密码输入正确</span>'));
                }else if(data=="fail"){
                    $(_this).after($('<span class="tip" style="color: red">请重新输入旧密码</span>'));
                }
            });
        });
        $(".newpsd").on("blur",function(){
            $(".tip").remove();
            var $newpsd=$(this).val();
            var $pattern=/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,10}$/;
            if($pattern.test($newpsd)&&$(this).val()!=""){
                    $(this).after($('<span class="tip" style="color: green">新密码可用</span>'));
                $(".renewpsd").attr("disabled",false);
            }else{
                $(this).after($('<span class="tip" style="color: red">请重新输入新密码</span>'));
            }
        });


        $(".renewpsd").on("keyup",function(){
            $(".tip").remove();
            var $newpsd=$(".newpsd").val();
            if($(this).val()==$newpsd){
                    $(this).after($('<span class="tip" style="color: green">密码输入成功</span>'));
                    $(".passwordbtn").attr("disabled",false);
            }else{
                    $(this).after($('<span class="tip" style="color: green">请再次输入密码</span>'));
                    $(".passwordbtn").attr("disabled",true);
            }
        });

        $(".passwordbtn").on("click",function(){
            if($(".oldpsd").val()!=""&&$(".newpsd").val()==$(".renewpsd").val()&&$(".newpsd").val()!=""&&$(".renewpsd").val()!=""){
                alert("zhnegwue ");
            }else{
                alert("请把空格填写正确");
            }
        });














        $(".file_upload").change(function() {
            var $file = $(this);
            var fileObj = $file[0];
            var windowURL = window.URL || window.webkitURL;
            var dataURL;
            var $img = $("#preview");

            if(fileObj && fileObj.files && fileObj.files[0]){
                dataURL = windowURL.createObjectURL(fileObj.files[0]);
                $img.attr('src',dataURL);
            }else{
                dataURL = $file.val();
                var imgObj = document.getElementById("preview");
// 两个坑:
// 1、在设置filter属性时，元素必须已经存在在DOM树中，动态创建的Node，也需要在设置属性前加入到DOM中，先设置属性在加入，无效；
// 2、src属性需要像下面的方式添加，上面的两种方式添加，无效；
                imgObj.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
                imgObj.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = dataURL;

            }
        });
    });

</script>

<div class="cxcalendar"><div class="cxcalendar_hd"><a class="prev" href="javascript://" rel="prev"></a><a class="next" href="javascript://" rel="next"></a><div class="intxt"><span class="y">1989</span><span class="m">12</span></div><div class="inset"><select class="year"><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option></select><select class="month"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select></div></div><div class="cxcalendar_bd"><ul class="week"><li class="sun">日</li><li>一</li><li>二</li><li>三</li><li>四</li><li>五</li><li class="sat">六</li></ul><ul class="days"><li class="other sun" title="1989-11-26" data-year="1989" data-month="11" data-day="26">26</li><li class="other" title="1989-11-27" data-year="1989" data-month="11" data-day="27">27</li><li class="other" title="1989-11-28" data-year="1989" data-month="11" data-day="28">28</li><li class="other" title="1989-11-29" data-year="1989" data-month="11" data-day="29">29</li><li class="other" title="1989-11-30" data-year="1989" data-month="11" data-day="30">30</li><li title="1989-12-1" data-year="1989" data-month="12" data-day="1">1</li><li class="sat" title="1989-12-2" data-year="1989" data-month="12" data-day="2">2</li><li class="sun" title="1989-12-3" data-year="1989" data-month="12" data-day="3">3</li><li title="1989-12-4" data-year="1989" data-month="12" data-day="4">4</li><li title="1989-12-5" data-year="1989" data-month="12" data-day="5">5</li><li title="1989-12-6" data-year="1989" data-month="12" data-day="6">6</li><li title="1989-12-7" data-year="1989" data-month="12" data-day="7">7</li><li title="1989-12-8" data-year="1989" data-month="12" data-day="8">8</li><li class="sat" title="1989-12-9" data-year="1989" data-month="12" data-day="9">9</li><li class="sun" title="1989-12-10" data-year="1989" data-month="12" data-day="10">10</li><li title="1989-12-11" data-year="1989" data-month="12" data-day="11">11</li><li title="1989-12-12" data-year="1989" data-month="12" data-day="12">12</li><li title="1989-12-13" data-year="1989" data-month="12" data-day="13">13</li><li title="1989-12-14" data-year="1989" data-month="12" data-day="14">14</li><li title="1989-12-15" data-year="1989" data-month="12" data-day="15">15</li><li class="sat" title="1989-12-16" data-year="1989" data-month="12" data-day="16">16</li><li class="sun" title="1989-12-17" data-year="1989" data-month="12" data-day="17">17</li><li title="1989-12-18" data-year="1989" data-month="12" data-day="18">18</li><li title="1989-12-19" data-year="1989" data-month="12" data-day="19">19</li><li title="1989-12-20" data-year="1989" data-month="12" data-day="20">20</li><li title="1989-12-21" data-year="1989" data-month="12" data-day="21">21</li><li title="1989-12-22" data-year="1989" data-month="12" data-day="22">22</li><li class="sat" title="1989-12-23" data-year="1989" data-month="12" data-day="23">23</li><li class="sun" title="1989-12-24" data-year="1989" data-month="12" data-day="24">24</li><li title="1989-12-25" data-year="1989" data-month="12" data-day="25">25</li><li title="1989-12-26" data-year="1989" data-month="12" data-day="26">26</li><li title="1989-12-27" data-year="1989" data-month="12" data-day="27">27</li><li title="1989-12-28" data-year="1989" data-month="12" data-day="28">28</li><li title="1989-12-29" data-year="1989" data-month="12" data-day="29">29</li><li class="sat" title="1989-12-30" data-year="1989" data-month="12" data-day="30">30</li><li class="selected sun" title="1989-12-31" data-year="1989" data-month="12" data-day="31">31</li><li class="other" title="1990-1-1" data-year="1990" data-month="1" data-day="1">1</li><li class="other" title="1990-1-2" data-year="1990" data-month="1" data-day="2">2</li><li class="other" title="1990-1-3" data-year="1990" data-month="1" data-day="3">3</li><li class="other" title="1990-1-4" data-year="1990" data-month="1" data-day="4">4</li><li class="other" title="1990-1-5" data-year="1990" data-month="1" data-day="5">5</li><li class="other sat" title="1990-1-6" data-year="1990" data-month="1" data-day="6">6</li></ul></div></div><div class="cxcalendar_lock"></div></body></html>