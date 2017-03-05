<!DOCTYPE html>
<!-- saved from url=(0024)http://wallwa.com/custom -->
<html><head lang="zh-cmn-Hans"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp">
        <meta name="description" content="Wallwa 墙蛙 - 墙上艺术的专家。">
        <meta name="keywords" content=",定制画,装饰画,墙上艺术,钉子">
        <base href="<?php echo site_url()?>">
        <title> - 定制</title>
        <link rel="stylesheet" href="css/baozhen/base.css">
        <link rel="stylesheet" href="css/baozhen/atom.css">
        <link rel="stylesheet" href="css/baozhen/new.css">


<link rel="stylesheet" href="css/baozhen/custom.css">
<link rel="stylesheet" href="css/baozhen/introjs.css">
<link rel="stylesheet" href="css/baozhen/flexslider.css">
<!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

    <div class="navbar top-navbar navbar-fixed-top h64 navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand paddrn" href="http://wallwa.com/home">
                <img src="images/baozhen/logo-wallwa-normal.png" alt="墙蛙 - 唤醒你的墙">
            </a>
            <div class="list-menu">
                <span class="ww-icon pack-menu"></span>
                <ul class="wm-dropdown-menu wp-dropdown">
                    <li>
                        <a target="_blank" href="http://wallwa.com/shopGuide">开店引导</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://blog.wallwa.com/article/34/wallwa15.html">
                            <img src="images/baozhen/disney-nav.png" class="disney-nav" alt="迪士尼正版授权">
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="http://blog.wallwa.com/">墙蛙博客</a>
                    </li>
                    <li>
                        <a target="_blank" href="https://wallwa.tmall.com/?spm=a220o.1000855.w9378884-9436674517.14.HUmbeG">墙蛙旗舰店</a>
                    </li>
                    <li>
                        <a target="_blank" href="https://wallwa.jiyoujia.com/shop/view_shop.htm?spm=a1z10.1-c.w9263053-9619899774.11.rtTpKG">墙蛙淘宝店</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="menu">
                    <a class="def-menu" href="user/custom1" target="_blank">
                       定制
                    </a>
                </li>
                <li class="toplist dropdown menu h75">
                    <a target="_blank" class="def-menu discovery readed" href="user/find">
                        <i class="red-point0"></i>
                        发现
                    </a>
                </li>
                
                        
                            <li class="menu last" id="new-pro" data-indentify="4">
                                <a target="_blank" href="user/startShop" class="btn btn-ghost btn-xs">创建新产品</a>
                            </li>
                        
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <div class="nav-search-open-btn">
                    <i class="wa wa-search mr4"></i>搜索
                </div>
                <div class="nav-search">
                    <i class="wa wa-search"></i>
                    <div class="search-hidden">
                        <input class="nav-search-content" type="text" placeholder="搜索wallwa网">
                        <i class="wa wa-close"></i>
                        <div class="search-tips">
                            点击回车键进行搜索
                        </div>
                        <div class="nav-search-result">
                            <ul>
                                <li>动物</li>
                                <li>风景</li>
                                <li>花草</li>
                                <li>人物</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <li>
                    <a href="http://wallwa.com/user/message" class="message-link"><span class="wa wa-e-mail"><i class="red-point"></i></span> 消息</a>
                </li>
                <li class="dropdown avatar-item">
                    <a href="user/userProfile" class="user-item" data-id="14499">
                        <img class="item" src="images/custom1/e9bee17d93df9d4124892ab9189f5915-14499.jpeg">
                        <span class="item name">
                            <?php
                            echo $this->session->userdata("userinfo")->username;
                            ?>
                        </span>
                        <span class="item caret"></span>
                    </a>
                    <ul class="ww-dropdown-menu" role="menu">
                        <li>
                            <a href="user/userProfile">个人中心</a>
                        </li>
                        <li>
                            <!--<a href="/user/coupon#couponCode">专属优惠码</a>-->
                            <!--                            <a href="http://wallwa.com/user/coupon#couponCode">专属优惠码</a>-->
                        </li>
                        <li>
                            <a href="http://wallwa.com/user/order">订单管理</a>
                        </li>
                        <li>
                            <a href="http://wallwa.com/user/profile">账号管理</a>
                        </li>
                        <li class="bottom">
                            <a href="http://wallwa.com/logout">退出</a>
                        </li>
                    </ul>
                </li>
                
                <li class="cart-item">
                    <a href="http://wallwa.com/cart" target="_blank" class="cart-itema">
                        <span class="add-cart-count">10</span>
                        <i class="wa wa-shopping-cart-fill cart-icon"></i>
                    </a>
                    <div class="cart-wrap">
                        <div class="load-wrap loading"><div class="ww-loading"></div></div>
                        <ul class="cart-wrap-ul clearfix">
                        </ul>
                        <ul class="cart-wrap-none clearfix disn">
                            <li class="bdn">您的购物车中暂时没有商品<i class="wa wa-shopping-cart-fill"></i></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<input class="hide" value="true" id="login-status">
<div class="search-zzc"></div>
<!----问题联系浮动微信二维码----->
<div class="contact-wechat">
    <div class="contact-box">
        <a class="contact-close" href="javascript:void(0)">
            <img src="images/baozhen/contact-kf.png">
        </a>
        <div class="wechat-erwm">
            <img src="images/baozhen/contact-weixin.png">
        </div>
    </div>
</div>
<!--    <div id="custom-header">-->
<!--        <div class="custom-category-nav">-->
<!--            <div class="container">-->
<!--                <ul class="custom-nav custom-cate-list row clearfix" role="tablist">-->
<!--                    <li role="presentation" data-type="framePic" data-cate="paint" class="col-md-2">-->
<!--                        <a href="http://wallwa.com/custom#framePic" role="tab" class="default-link cate-box">-->
<!--                            <p>装饰画</p>-->
<!--                            <span class="right-line"></span>-->
<!--                        </a>-->
<!--                        <span class="arrow-down-cont"></span>-->
<!--                        <span class="arrow-down-border"></span>-->
<!--                    </li>-->
<!--                    <li role="presentation" data-type="bolsterPic" class="col-md-2 active">-->
<!--                        <a href="http://wallwa.com/custom#bolsterPic" role="tab" class="default-link cate-box">-->
<!--                            <p>抱枕</p>-->
<!--                            <span class="right-line"></span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li role="presentation" data-type="shirtManPic" data-cate="shirt" class="col-md-2">-->
<!--                        <a href="http://wallwa.com/custom#shirtManPic" role="tab" class="default-link cate-box">-->
<!--                            <p>T恤</p>-->
<!--                            <span class="right-line"></span>-->
<!--                        </a>-->
<!--                        <span class="arrow-down-cont"></span>-->
<!--                        <span class="arrow-down-border"></span>-->
<!--                    </li>-->
<!--                    <li role="presentation" data-type="casePic" class="col-md-2">-->
<!--                        <a href="http://wallwa.com/custom#casePic" role="tab" class="default-link cate-box">-->
<!--                            <p>手机壳</p>-->
<!--                            <span class="right-line"></span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li role="presentation" data-type="bagPic" class="col-md-2">-->
<!--                        <a href="http://wallwa.com/custom#bagPic" role="tab" class="default-link cate-box">-->
<!--                            <p>帆布包</p>-->
<!--                            <span class="right-line"></span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li role="presentation" data-type="cupPic" class="col-md-2">-->
<!--                        <a href="http://wallwa.com/custom#cupPic" role="tab" class="default-link cate-box">-->
<!--                            <p>旅行杯</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="custom-category-detail" style="display: none;">-->
<!--            <div class="container">-->
<!--                <ul id="paint" class="row custom-nav custom-cate-detail-list clearfix" style="display: block; height: 150px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">-->
<!--                    <li class="col-md-2" data-type="framePic" role="tab">-->
<!--                        <a href="http://wallwa.com/custom#framePic" class="custom-cate-detail">-->
<!--                            <img src="images/baozhen/frame.png">-->
<!--                            <p>有框画</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="col-md-2" data-type="rimlessPic" role="tab">-->
<!--                        <a href="http://wallwa.com/custom#rimlessPic" class="custom-cate-detail">-->
<!--                            <img src="images/baozhen/rimless.png">-->
<!--                            <p>布艺画</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="col-md-2" data-type="scrollPic" role="tab">-->
<!--                        <a href="http://wallwa.com/custom#scrollPic" class="custom-cate-detail">-->
<!--                            <img src="images/baozhen/scroll.png">-->
<!--                            <p>卷轴画</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--                <ul id="shirt" class="row custom-nav custom-cate-detail-list clearfix" style="display: none; height: 150px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">-->
<!--                    <li class="col-md-2" data-type="shirtManPic" role="tab">-->
<!--                        <a href="http://wallwa.com/custom#shirtManPic" class="custom-cate-detail">-->
<!--                            <img src="images/baozhen/shirtMan.png">-->
<!--                            <p>男款T恤</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="col-md-2" data-type="shirtWomanPic" role="tab">-->
<!--                        <a href="http://wallwa.com/custom#shirtWomanPic" class="custom-cate-detail">-->
<!--                            <img src="images/baozhen/shirtWoman.png">-->
<!--                            <p>女款T恤</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="col-md-2" data-type="shirtChildPic" role="tab">-->
<!--                        <a href="http://wallwa.com/custom#shirtChildPic" class="custom-cate-detail">-->
<!--                            <img src="images/baozhen/shirtChild.png">-->
<!--                            <p>儿童T恤</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <?php include "custom-header.php"?>

    <div class="ww-wrap custom-wrap clearfix">
        <div id="custom-stage" class="cont-wrap container">
            <!--work&&scene-->
            <div id="ws-area">
                <ul class="list-unstyled tab-nav">
                    <li data-type="scene">
                        <a href="http://wallwa.com/custom#scene-area" id="scene-btn" class="hide">
                            <i class="glyphicon glyphicon-menu-right"></i>
                            实景展示
                        </a>
                    </li>
                    <li class="line hide"></li>
                    <li data-type="work">
                        <a href="http://wallwa.com/custom#work-area">我的定制
                            <i class="glyphicon glyphicon-menu-right"></i>
                        </a>
                    </li>
                </ul>
                <div class="tab-content-wrap">
                    <div class="load-wrap">
                        <div class="knight-rider-loader animate">
                            <div class="knight-rider-bar"></div>
                            <div class="knight-rider-bar"></div>
                            <div class="knight-rider-bar"></div>
                        </div>
                    </div>
                    <div class="page-wrap">
                        <a class="item prev" href="http://wallwa.com/custom#" data-type="prev">上页</a>
                        <a class="item mid-item" href="http://wallwa.com/custom#" data-type="num">
                            <div>
                                第 <span>1</span> 页
                                <i class="glyphicon glyphicon-menu-down"></i>
                                <i class="glyphicon glyphicon-menu-up"></i>
                            </div>

                            <div class="page-list">
                                <div class="page-cont">
                                    <ul class="list-unstyled"></ul>
                                </div>
                            </div>
                        </a>
                        <a class="item next" href="http://wallwa.com/custom#" data-type="next">下页</a>
                    </div>
                    <div class="pane-wrap tab-content">
                        <div id="work-area" class="tab-pane fade tab-cont-item" data-type="work"></div>
                        <div id="scene-area" class="tab-pane fade tab-cont-item" data-type="scene"></div>
                    </div>
                </div>
            </div>

            <!--customArea-->
            <div class="custom-cont">
                <div class="load-wrap"><div class="ww-loading"></div></div>

                <div class="pic-area">
                    <div class="pic-cont-wrap  tab-content">
                        <div id="framePic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="framePic-wrap pic-content" style="background-image: url(&quot;//wallwa.com/ic/bom/line-box/38?Width=480&amp;Height=350&amp;Border=16&quot;); padding: 16px; width: 480px; height: 350px; margin-left: 220px;"><div class="top-mat mat" style="background: none rgb(255, 255, 251);"><div class="view-port mat-bg" style="top: 29px; left: 45px; width: 360px; height: 262px;"><div class="middle-mat mat"><div class="bottom-mat mat"><div class="hole-wrap mat no-bg grab"><div class="img-content-wrap"><div class="shade"></div><div class="img-content" style="transform: scale(1, 1); left: 0px;"><img src="images/baozhen/1c73b381d22ae998328e798326796193-3264x2448.jpeg" class="img-target" style="display: inline; width: 356px; height: 267px; margin-top: -134px; margin-left: -178px; transform: rotate(0deg);"></div></div></div></div></div></div></div></div>
                                <div class="multiPic-wrap pic-content" style="display: none;"><div class="top-mat mat"></div></div>
                            </div>
                        </div>
                        <div id="rimlessPic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="rimlessPic-wrap fire"><div class="cube-img-wrap" style="height: 306px;"><div class="cube-img left" style="width: 20.4255px;"><div class="hole-wrap no-bg"><div class="img-content-wrap"><img src="images/baozhen/1c73b381d22ae998328e798326796193-3264x2448.jpeg" class="sub-target" style="display: block; width: 460px; height: 345px; transform: scale(1, 1) rotate(0deg); left: 0px;"><div class="overlay"></div></div></div></div><div class="cube-img front" style="width: 460px;"><div class="hole-wrap mat no-bg grab"><div class="img-content-wrap"><div class="img-content" style="transform: scale(1, 1); left: 0px;"><img src="images/baozhen/1c73b381d22ae998328e798326796193-3264x2448.jpeg" class="img-target" style="display: inline; width: 460px; height: 345px; margin-top: -173px; margin-left: -230px; transform: rotate(0deg);"></div></div></div></div></div></div>
                                <div class="swf-wrap hide"><div id="swf-cont"></div></div>
                                <div class="framePic-wrap rimlessFramePic-wrap pic-content" style="display: none;"><div class="top-mat mat"><div class="view-port"><div class="hole-wrap mat"><div class="img-content-wrap"><div class="img-content"><img src="http://wallwa.com/custom" class="img-target"></div></div></div></div></div></div>
                            </div>
                        </div>
                        <div id="photoWall" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="photoWall-wrap pic-content"></div>
                            </div>
                        </div>
                        <div id="scrollPic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="scrollPic-wrap pic-content fire" style="width: 246px; height: 480px; margin-left: 337px;"><img src="images/baozhen/4feb56c9cee81307721eaf615333c34c-439x858.png" class="bg-img"><div class="scrollPic-cont" style="width: 246px; height: 344px; top: 87.084px; left: 0px;"><div class="hole-wrap mat no-bg grab" style="width: 246px; height: 344px;"><div class="img-content-wrap"><div class="img-content" style="transform: scale(1, 1); top: 0px;"><img src="images/baozhen/1c73b381d22ae998328e798326796193-3264x2448.jpeg" class="img-target" style="display: inline; width: 458.667px; height: 344px; margin-top: -172px; margin-left: -229.333px; transform: rotate(0deg);"></div></div></div></div></div>
                            </div>
                        </div>
                        <!--<div id="paintPic" class="pic-wrap tab-pane" role="tabpanel">-->
                            <!--<div class="pic-cell">-->
                                <!--<div class="paintPic-wrap pic-content"></div>-->
                            <!--</div>-->
                        <!--</div>-->
                        <div id="cupPic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="side-control"><a href="javascript:void(0)" class="default-side">正面</a> <a href="javascript:void(0)" class="other-side active">侧面</a></div><div class="cupPic-wrap pic-content htPic-wrap fire" style="width: 480px; height: 480px; margin-left: 220px;"><div class="cupPic-cont" style="width: 142px; height: 322px; top: 119px; left: 168px;"><img src="images/baozhen/ac6cfeeb38948d946fa27120516bff27-503x1139.jpeg" class="bg-img"><div class="hole-wrap mat no-bg grab" style="width: 505px; height: 369px; top: -24px; left: -311px;"><div class="img-content-wrap"><div class="img-content" style="transform: scale(1, 1);"><img src="images/baozhen/1c73b381d22ae998328e798326796193-3264x2448.jpeg" class="img-target" style="display: inline; width: 505px; height: 378.795px; margin-top: -190px; margin-left: -253px; transform: rotate(0deg);"></div></div></div></div><img src="images/baozhen/60cd3f332a872dac0be4c8c59553494e-1700x1700.png" class="hg-img"></div>
                            </div>
                        </div>
                        <div id="bolsterPic" class="pic-wrap tab-pane active" role="tabpanel">
                            <div class="pic-cell">
                                <div class="bolsterPic-wrap pic-content htPic-wrap fire" style="width: 480px; height: 480px; margin-left: 220px;">
                                    <div class="bolsterPic-cont htType-cont" style="width: 418px; height: 418px; top: 34px; left: 33px;">
                                        <img src="images/baozhen/a7a23f33e333b108e72ab2c090afb5fc-1740x1740.png" class="bg-img">
                                        <div class="hole-wrap mat no-bg grab" style="width: 418px; height: 418px;"><div class="img-content-wrap">
                                                <div class="img-content" style="transform: scale(1, 1);">
<!--                                                    <img src="images/baozhen/1c73b381d22ae998328e798326796193-3264x2448.jpeg" class="img-target" style="display: inline; width: 557.333px; height: 418px; margin-top: -209px; margin-left: -279px; transform: rotate(0deg);">-->

                                                    <?php
                                                    $this -> load -> model("user_model");
                                                    $userid=$this->session->userdata("userinfo")->user_id;
                                                    if($this->session->userdata("justbaozhenkind")){
                                                        $tagbaozhen=$this->session->userdata("justbaozhenkind")->tagkind;
//                                                        var_dump($tagbuyihua);
//                                                        die();
                                                        if( $findbaozhen=$this->user_model->findbaozhen($userid,$tagbaozhen)){
//
                                                            echo '<img src='.$baozhenImg->youkuanghua_img.' class="img-target" style="display: inline; width: 458.667px; height: 344px; margin-top: -172px; margin-left: -229.333px; transform: rotate(0deg);">';
//                                                              echo '<img src='.$youkuanghuaImg->youkuanghua_img.' class="img-target" style="display: inline; width: 448px; height: 336px; margin-top: -168px; margin-left: -224px; transform: rotate(0deg);">';
                                                        }
//                                                            else{
//                                                                echo   '<img src="images/custom1/1c73b381d22ae998328e798326796193-3264x2448.jpeg" class="img-target" style="display: inline; width: 460px; height: 345px; margin-top: -173px; margin-left: -230px; transform: rotate(0deg);">';
//                                                            }
                                                    }else{
                                                        if($baozhenImg){
                                                            echo '<img src='.$baozhenImg->youkuanghua_img.' class="img-target" style="display: inline; width: 458.667px; height: 344px; margin-top: -172px; margin-left: -229.333px; transform: rotate(0deg);">';
                                                        }else{
                                                            echo '<img src="images/baozhen/1c73b381d22ae998328e798326796193-3264x2448.jpeg" class="img-target" style="display: inline; width: 557.333px; height: 418px; margin-top: -209px; margin-left: -279px; transform: rotate(0deg);">';
                                                        }

                                                    }
                                                    ?>



                                                </div></div></div></div>
                                    <img src="images/baozhen/07180040d18cb0a5205499cd83d5994d-2000x2000.png" class="hg-img">
                                    <img src="images/baozhen/bbdb0b35bbeddfb47de30980e1a9b569-2000x2000.png" class="outline-img">
                                    <form action="user/changebaozhen" method="post" enctype="multipart/form-data" class="shade">
                                        <input  type="file" name="changebaozhen" accept="*/*"  class=" btn btn-block btn-primary changebaozhen" id="trigger-upload">
                                        <input type="submit" class="submit1">
                                        <input type="hidden" value="抱枕" class="tagkind" name="namebaozhen">
                                    </form>
                                    <div class="masks">更换图片</div>

                                </div>
                            </div>
                        </div>
                        <div id="shirtPic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="shirtPic-wrap pic-content htPic-wrap"></div>
                            </div>
                        </div>
                        <div id="shirtManPic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="shirtManPic-wrap pic-content htPic-wrap fire" style="width: 480px; height: 480px; margin-left: 220px;"><div class="shirtManPic-cont htType-cont" style="width: 180px; height: 212px; top: 128px; left: 150px;"><img src="images/baozhen/d16fc0dfaea78eba449820ff93fce30e-752x885.png" class="bg-img"><div class="hole-wrap mat no-bg grab" style="width: 180px; height: 212px;"><div class="img-content-wrap"><div class="img-content" style="transform: scale(0.636792, 0.636792);"><img src="images/baozhen/1c73b381d22ae998328e798326796193-3264x2448.jpeg" class="img-target" style="display: inline; width: 282.667px; height: 212px; margin-top: -106px; margin-left: -142px; transform: rotate(0deg);"></div></div></div></div><img src="images/baozhen/fa5ed0c1139f1b2438258eaeb7e02041-2000x2000.png" class="hg-img"><img src="images/baozhen/1324f850e97f9c9593b529b1c45cb8d1-2000x2000.png" class="outline-img"></div>
                            </div>
                        </div>
                        <div id="shirtWomanPic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="shirtWomanPic-wrap pic-content htPic-wrap fire" style="width: 480px; height: 480px; margin-left: 220px;"><div class="shirtWomanPic-cont htType-cont" style="width: 173px; height: 200px; top: 147px; left: 154px;"><img src="images/baozhen/d7cb831a4c07d3026d9e54628937ced2-721x835.png" class="bg-img"><div class="hole-wrap mat no-bg" style="width: 173px; height: 200px;"><div class="img-content-wrap"><div class="img-content" style="transform: scale(0.648482, 0.648482);"><img src="images/baozhen/1c73b381d22ae998328e798326796193-3264x2448.jpeg" class="img-target" style="display: inline; width: 266.777px; height: 200px; margin-top: -100px; margin-left: -134px; transform: rotate(0deg);"></div></div></div></div><img src="images/baozhen/fc7c4321effe23ba4e31f88e286fcbfb-2000x2000.png" class="hg-img"><img src="images/baozhen/6d21f9dc6f936f7eac126ac38375f2ff-2000x2000.png" class="outline-img"></div>
                            </div>
                        </div>
                        <div id="shirtChildPic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="shirtChildPic-wrap pic-content htPic-wrap"></div>
                            </div>
                        </div>
                        <div id="bagPic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="bagPic-wrap pic-content htPic-wrap fire" style="width: 480px; height: 480px; margin-left: 220px;"><div class="bagPic-cont htType-cont" style="width: 199px; height: 199px; top: 221px; left: 141px;"><img src="images/baozhen/74e5620cfb3d8eff1325df5ad94b2029-828x828.png" class="bg-img"><div class="hole-wrap mat no-bg" style="width: 199px; height: 199px;"><div class="img-content-wrap"><div class="img-content" style="transform: scale(0.74933, 0.74933);"><img src="images/baozhen/1c73b381d22ae998328e798326796193-3264x2448.jpeg" class="img-target" style="display: inline; width: 265.571px; height: 199px; margin-top: -100px; margin-left: -133px; transform: rotate(0deg);"></div></div></div></div><img src="images/baozhen/8686656d4b5ffd187a929db7d13e23f1-2000x2000.png" class="hg-img"><img src="images/baozhen/708b773f5c5e717d6fd9e2d94575fa28-2000x2000.png" class="outline-img"></div>
                            </div>
                        </div>
                        <div id="casePic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="casePic-wrap pic-content htPic-wrap fire" style="width: 480px; height: 480px; margin-left: 220px;"><div class="casePic-cont htType-cont" style="width: 223px; height: 381px; top: 49px; left: 128px;"><img src="images/baozhen/5556ca0a9b01011be64452d57ce6acef-930x1586.png" class="bg-img"><div class="hole-wrap mat no-bg grab" style="width: 223px; height: 381px;"><div class="img-content-wrap"><div class="img-content" style="transform: scale(1, 1); top: 0px;"><img src="images/baozhen/1c73b381d22ae998328e798326796193-3264x2448.jpeg" class="img-target" style="display: inline; width: 507.919px; height: 381px; margin-top: -191px; margin-left: -254px; transform: rotate(0deg);"></div></div></div></div><img src="images/baozhen/1697f496a517fb3600512f5b8231bf4f-2000x2000.png" class="hg-img"><img src="images/baozhen/5844983541394ef97da84485288f3bb2-2000x2000.png" class="hg-img-hover"><div class="case-tips">为避免手机壳出现白边，请确保红色线框内已填满图像</div></div>
                            </div>
                        </div>
                    </div>

                    <!--big pw sub -->
                    <div class="photoWall-big-wrap">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <button class="btn btn-primary batch-btn">
                            批量处理 <i class="glyphicon glyphicon-info-sign" data-original-title="" title=""></i>
                        </button>

                        <div class="carousel box-carousel slide load-container loading">
                            <div class="load-wrap"><div class="ww-loading"></div></div>
                            <div class="carousel-inner"></div>
                            <a class="left carousel-control" href="http://wallwa.com/custom#" data-target=".box-carousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="http://wallwa.com/custom#" data-target=".box-carousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
<!--                    <div class="custom-tools-area">-->
<!--                        <div class="image-actions">-->
<!--                            <a title="垂直居中" href="javascript:void(0)" class="primary-link v-align-middle"><i class="wa wa-vertical-center"></i><span>垂直居中</span></a>-->
<!--                            <a title="水平居中" href="javascript:void(0)" class="primary-link h-align-center"><i class="wa wa-horizontal-center"></i><span>水平居中</span></a>-->
<!--                            <a title="全显" href="javascript:void(0)" class="primary-link imagine-fill"><i class="wa wa-imagine-fill"></i><span>完整展示</span></a>-->
<!--                            <a title="铺满" href="javascript:void(0)" class="primary-link imagine-full"><i class="wa wa-imagine-full"></i><span>铺满画面</span></a>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!--工具条-->
<!--                    <div class="custom-toolbar">-->
<!--                        <div class="ope-area zoom-area">-->
<!--                            <a href="http://wallwa.com/custom#" class="ope-btn zoom-btn zoomin" data-type="1">-->
<!--                                <i class="ct-i minus-i"></i>-->
<!--                            </a>-->
<!--                            <div class="zoom-bar">-->
<!--                                <div class="zoom-line">-->
<!--                                    <span class="zoom-active-line" style="width: 36.4372%;"></span>-->
<!--                                </div>-->
<!--                            <span class="zoom-ball" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); left: 36.4372%;">-->
<!--                                <i class="ww-icon ball"></i>-->
<!--                            </span>-->
<!--                            </div>-->
<!--                            <a href="http://wallwa.com/custom#" class="ope-btn zoom-btn zoomout" data-type="2">-->
<!--                                <i class="ct-i plus-i"></i>-->
<!--                            </a>-->
<!--                            <span id="scale-count" class="scale-count">100%</span>-->
<!--                        </div>-->
<!--                        <div class="ope-area rotate-area">-->
<!--                            <a href="http://wallwa.com/custom#" class="ope-btn rotate-btn rotete-left" data-type="4">-->
<!--                                <i class="ww-icon rotate-l"></i>-->
<!--                            </a>-->
<!--                            <a href="http://wallwa.com/custom#" class="ope-btn rotate-btn rotete-right ml20" data-type="3">-->
<!--                                <i class="ww-icon rotate-r"></i>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->

                    <div class="dialog-prompt" style="display: none;"><div id="prompt" class="ww-prompt custom-prompt"><div class="alert"></div></div></div>
                </div>

                <!--scene area-->
                <div class="scene-area loading">
                    <button type="button" class="scene-close" aria-label="Close">
                        <span class="ww-icon ww-close">关闭</span>
                    </button>

                    <div class="scene-load-wrap text-center">
                        <img class="pre-loading" src="images/baozhen/loading-32.gif" alt="wallwa loading">
                        <span>加载中...</span>
                    </div>

                    <img class="scene-bg" src="http://wallwa.com/custom" alt="场景图">

                    <div class="scene-pic-wrap">
                        <div class="pic-item"></div>
                    </div>
                </div>
            </div>

            <!--customAside-->
            <div class="custom-aside">
                <div class="step-btn hide">
                    <i class="ww-icon help-i"></i>
                </div>
                <div class="side summary-wrap">
                    <ul class="list-unstyled info">
                        <li class="hd">
                            <span class="title">售价</span>
                            <span class="pull-right price">
                                <img src="images/baozhen/discount.png" class="item discount-icon" alt="">
                                <span class="item ori-price">￥118</span>
                                <span class="item discount-price">
                                   <strong>￥</strong><strong id="completedMoney">82.6</strong>
                                </span>
                            </span>
                        </li>
                        <li>
                            <span class="title">完成尺寸</span>
                            <span class="pull-right size" id="completedSize">45 x 45 cm</span>
                        </li>
                        <li>
                            <span class="title">我的产品</span>
                            <a href="http://wallwa.com/custom#" class="pull-right check-detail">材料明细</a>
                        </li>
                    </ul>

                    <div class="btn-group-wrap">
                        <div class="step step1 active clearfix" data-step="1">
                            <div class="num-wrap">
                                    <span class="input-item">
                                        <input type="text" id="buy-count" class="form-control" value="1" data-id="113">
                                    </span>
                                <a href="javascript:void(0)" class="default-link num-ope-item minus">
                                    -
                                </a>
                                <a href="javascript:void(0)" class="default-link num-ope-item plus">
                                    +
                                </a>
                            </div>
                            <div class="cartmask"></div>
                            <button class="btn btn-lg btn-block btn-success add-cart" id="custom-add-cart-btn" data-type="1">
                                <i class="wa wa-shopping-cart-fill"></i>
                                <span>加入购物车</span>
                            </button>
                        </div>

                        <div class="step step2" data-step="2">
                            <a href="http://wallwa.com/cart" class="btn btn-lg btn-block btn-success " target="_blank" data-type="link">
                                <img src="images/baozhen/circle-money.png" alt="">
                                <span>去结算</span>
                            </a>
                            <button class="btn btn-lg btn-block btn-default" data-type="4">
                                <span>再定制一幅</span>
                            </button>
                        </div>

                        <div class="step step3" data-step="3">
                            <button class="btn btn-lg btn-block btn-success" data-type="3">
                                <i class="wa wa-shopping-cart-fill"></i>
                                <span>加入购物车</span>
                            </button>
                            <button class="btn btn-lg btn-block btn-default" data-type="4">
                                <span>再定制一幅</span>
                            </button>
                        </div>

                        <div class="step step4" data-step="4">
                            <button class="btn btn-lg btn-block btn-success" data-type="5">
                                <span>保存修改</span>
                            </button>
                            <button class="btn btn-lg btn-block btn-default" data-type="6">
                                <span>放弃修改</span>
                            </button>
                        </div>
                    </div>

                    <div class="bottom">
                        <a href="javascript:void(0)" class="item cus-to-pro"><span>售卖这件产品</span></a>

                        <!--<button class="btn btn-lg btn-block btn-default" data-type="2">-->

                        <!--</button>-->
                        <div class="item share-wrap">
                            <span class="share-tit">
                                <i class="bd"></i> 分享大作 <i class="wa wa-share-fill"></i>
                            </span>
                            <div class="share-list">
                                <span class="share-social" data-type="weibo">
                                    <i class="ww-icon social-color weibo-light-color"></i>
                                </span>
                                <span class="share-social" data-type="qq">
                                    <i class="ww-icon social-color qq-light-color"></i>
                                </span>
                                <span class="share-social" data-type="weixin">
                                    <i class="ww-icon social-color weixin-light-color"></i>
                                </span>
                                <span class="share-social" data-type="douban">
                                    <i class="ww-icon social-color douban-light-color"></i>
                                </span>
                            </div>
                        </div>
                        <div class="share-erweima invisible">
                            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <p>扫一扫进行分享</p>
                            <div class="code-wrap">
                                <img src="images/baozhen/loading-32.gif" alt="墙蛙微信分享二维码" class="code">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="side pack-wrap clearfix">
                    <!--<div class="left">-->
                        <!--<ul class="nav bom-list-nav">-->
                            <!--<li id="img-material-nav">-->
                                <!--<a href="javascript:void(0)" id="trigger-upload" class="title"><span class="wa wa-cloud-upload"></span></a>-->
                            <!--</li>-->
                        <!--</ul>-->
                    <!--</div>-->
                    <div id="material-wrap" class="right">
                        <div id="image" data-type="image" class="image-tab-content">



































<!--<div class="r-content-wrap material-cont-wrap img-wrap">-->
<!--    <div class="list-wrap">-->
<!--        <a class="show-more " href="javascript:void(0)">»</a>-->
<!--        <ul class="list-unstyled scroll-list scroll-list-img" data-type="image">-->
<!--            <li class="add-item" id="upload-btn">-->
<!--                <span class="add-img ct-i cross-i"></span>-->
<!--            </li>-->
<!---->
<!--            <li class="item img-item  stat-load" data-image="//wallwa.com/ic/image/48392/200/a3ea4d90e7fef7e040e5cda43f061882-600x901.jpeg" data-id="48392">-->
<!--                <div class="img-wrap">-->
<!--                    <img src="images/baozhen/a3ea4d90e7fef7e040e5cda43f061882-600x901.jpeg" title="2" style="width: 45px; height: 67.6692px; margin-top: -11px; margin-left: 0px;">-->
<!--                </div>-->
<!--                <div class="mask">-->
<!--                    <div class="ope-group">-->
<!--                        <i class="ct-i delete-circle-i" data-type="2"></i>-->
<!--                    </div>-->
<!--                    <!--<i class="ct-i mask-i"></i>-->
<!--                    <div class="mask-bg"></div>-->
<!--                </div>-->
<!--            </li>-->
<!---->
<!--            <li class="item img-item  stat-load" data-image="//wallwa.com/ic/image/48391/200/8d49492d7403f899435f608097b4b3d6-700x1244.jpeg" data-id="48391">-->
<!--                <div class="img-wrap">-->
<!--                    <img src="images/baozhen/8d49492d7403f899435f608097b4b3d6-700x1244.jpeg" title="3" style="width: 45px; height: 80.3571px; margin-top: -17px; margin-left: 0px;">-->
<!--                </div>-->
<!--                <div class="mask">-->
<!--                    <div class="ope-group">-->
<!--                        <i class="ct-i delete-circle-i" data-type="2"></i>-->
<!--                    </div>-->
<!--                    <!--<i class="ct-i mask-i"></i>-->
<!--                    <div class="mask-bg"></div>-->
<!--                </div>-->
<!--            </li>-->
<!---->
<!--            <li class="item img-item  stat-load" data-image="//wallwa.com/ic/image/48262/200/1c73b381d22ae998328e798326796193-3264x2448.jpeg" data-id="48262">-->
<!--                <div class="img-wrap">-->
<!--                    <img src="images/baozhen/1c73b381d22ae998328e798326796193-3264x2448(1).jpeg" title="24" style="width: 60px; height: 45px; margin-top: 0px; margin-left: -7px;">-->
<!--                </div>-->
<!--                <div class="mask">-->
<!--                    <div class="ope-group">-->
<!--                        <i class="ct-i delete-circle-i" data-type="2"></i>-->
<!--                    </div>-->
<!--                    <!--<i class="ct-i mask-i"></i>-->
<!--                    <div class="mask-bg"></div>-->
<!--                </div>-->
<!--            </li>-->
<!---->
<!--            <li class="item img-item  stat-load" data-image="//wallwa.com/ic/image/48259/200/2751f4d7bad13f259ec021be760aee0c-400x295.jpeg" data-id="48259">-->
<!--                <div class="img-wrap">-->
<!--                    <img src="images/baozhen/2751f4d7bad13f259ec021be760aee0c-400x295.jpeg" title="3(1)" style="width: 61.2245px; height: 45px; margin-top: 0px; margin-left: -8px;">-->
<!--                </div>-->
<!--                <div class="mask">-->
<!--                    <div class="ope-group">-->
<!--                        <i class="ct-i delete-circle-i" data-type="2"></i>-->
<!--                    </div>-->
<!--                    <!--<i class="ct-i mask-i"></i>-->
<!--                    <div class="mask-bg"></div>-->
<!--                </div>-->
<!--            </li>-->
<!---->
<!--            <li class="item img-item  stat-load" data-image="//wallwa.com/ic/image/48258/200/30fec6cb4963d239c9c66d6d5d99ff2e-200x200.jpeg" data-id="48258">-->
<!--                <div class="img-wrap">-->
<!--                    <img src="images/baozhen/30fec6cb4963d239c9c66d6d5d99ff2e-200x200.jpeg" title="3(2)" style="width: 45px; height: 45px; margin-top: 0px; margin-left: 0px;">-->
<!--                </div>-->
<!--                <div class="mask">-->
<!--                    <div class="ope-group">-->
<!--                        <i class="ct-i delete-circle-i" data-type="2"></i>-->
<!--                    </div>-->
<!--                    <!--<i class="ct-i mask-i"></i>-->
<!--                    <div class="mask-bg"></div>-->
<!--                </div>-->
<!--            </li>-->
<!---->
<!--            <li class="item img-item  stat-load" data-image="//wallwa.com/ic/image/48215/200/791c151dd59c663aab129bc5c86be073-400x295.jpeg" data-id="48215">-->
<!--                <div class="img-wrap">-->
<!--                    <img src="images/baozhen/791c151dd59c663aab129bc5c86be073-400x295.jpeg" title="2" style="width: 61.2245px; height: 45px; margin-top: 0px; margin-left: -8px;">-->
<!--                </div>-->
<!--                <div class="mask">-->
<!--                    <div class="ope-group">-->
<!--                        <i class="ct-i delete-circle-i" data-type="2"></i>-->
<!--                    </div>-->
<!--                    <!--<i class="ct-i mask-i"></i>-->
<!--                    <div class="mask-bg"></div>-->
<!--                </div>-->
<!--            </li>-->
<!---->
<!--            <li class="item img-item  stat-load" data-image="//wallwa.com/ic/image/48074/200/2cb0b8172136bfea6d265bdcfc211873-1200x800.jpeg" data-id="48074">-->
<!--                <div class="img-wrap">-->
<!--                    <img src="images/baozhen/2cb0b8172136bfea6d265bdcfc211873-1200x800.jpeg" title="1" style="width: 67.6692px; height: 45px; margin-top: 0px; margin-left: -11px;">-->
<!--                </div>-->
<!--                <div class="mask">-->
<!--                    <div class="ope-group">-->
<!--                        <i class="ct-i delete-circle-i" data-type="2"></i>-->
<!--                    </div>-->
<!--                    <!--<i class="ct-i mask-i"></i>-->
<!--                    <div class="mask-bg"></div>-->
<!--                </div>-->
<!--            </li>-->
<!---->
<!--            <li class="item img-item  stat-load" data-image="//wallwa.com/ic/image/48073/200/e6537d63299db9be583cef0e6d227c7b-1080x1920.jpeg" data-id="48073">-->
<!--                <div class="img-wrap">-->
<!--                    <img src="images/baozhen/e6537d63299db9be583cef0e6d227c7b-1080x1920.jpeg" title="1" style="width: 45px; height: 80.3571px; margin-top: -17px; margin-left: 0px;">-->
<!--                </div>-->
<!--                <div class="mask">-->
<!--                    <div class="ope-group">-->
<!--                        <i class="ct-i delete-circle-i" data-type="2"></i>-->
<!--                    </div>-->
<!--                    <!--<i class="ct-i mask-i"></i>-->
<!--                    <div class="mask-bg"></div>-->
<!--                </div>-->
<!--            </li>-->
<!---->
<!--        </ul>-->
<!---->
<!--    </div>-->
<!--    <div class="pagination-wrap hide">-->
<!--        <div class="num pull-left">1/1</div>-->
<!--        <div class="center">-->
<!--            <a href="http://wallwa.com/custom#" class="ctr-label prev disable">-->
<!--                <span class="arrow"></span>-->
<!--            </a>-->
<!--            <input type="text" class="form-control" value="1">-->
<!--            <a href="http://wallwa.com/custom#" class="ctr-label next disable">-->
<!--                <span class="arrow"></span>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!--</div>-->
                        <div class="shangchuanmask"></div>
                        <div class="img-material-nav" style="position: relative;">

                            <div class="div1">上传图片</div>
<!--                            <input type="file" name="pic" accept="*/*"  class=" btn btn-block btn-primary uploadPic" id="trigger-upload">-->
                            <form action="user/dingzhibaozhen" method="post" enctype="multipart/form-data" >
                                <input  type="file" name="dingzhibaozhen" accept="*/*"  class=" btn btn-block btn-primary uploadPic shangchuanform" id="trigger-upload">
                                <input type="submit" class="submit">
                                <input type="hidden" value="抱枕" name="tagbaozhen">
                            </form>
<!--                            <a href="javascript:void(0)" id="trigger-upload" class=" btn btn-block btn-primary" style="z-index: 1;">-->
<!--                                     上传图片-->
<!--                            </a>-->
<!--                            <p class="cate-tips">-->
<!--                                <span class="error">* </span>建议上传尺寸：≥ <span id="size-tips">400 x 400 </span> 像素-->
<!--                            </p>-->
                        <div id="html5_1b8gvlnvusld1pau1ejlpr17873_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 298px; height: 42px; overflow: hidden; z-index: 0;"><input id="html5_1b8gvlnvusld1pau1ejlpr17873" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept="image/jpeg,image/png"></div></div>
                    




































































































































































































<!--<div id="bstTpl" data-type="bstTpl" class="bom-tab-content " role="tabpane">-->
<!---->
<!--    <div class="r-content-wrap material-cont-wrap bstTpl-wrap">-->
<!--        <h3 class="bom-title clearfix">-->
<!---->
<!--    可选形状-->
<!---->
<!--</h3>-->
<!--<div class="list-wrap icon-list-wrap">-->
<!---->
<!--    <ul class="list-unstyled scroll-list scroll-list-img" data-type="bstTpl">-->
<!---->
<!---->
<!--            <li class="item active" data-id="4546" title="全幅">-->
<!---->
<!--                        <img src="images/baozhen/18ba6854dd9635545f83bd2ee2795fe5-200x200.jpeg" title="全幅">-->
<!---->
<!--                <div class="mask">-->
<!---->
<!--                    <!--<i class="ct-i mask-i"></i>-->
<!--                    <div class="mask-bg"></div>-->
<!--                </div>-->
<!--            </li>-->
<!---->
<!---->
<!--            <li class="item " data-id="4556" title="笔刷">-->
<!---->
<!--                        <img src="images/baozhen/7506bcb199a6ccc66d0f1efe77f8a8d3-200x200.jpeg" title="笔刷">-->
<!---->
<!--                <div class="mask">-->
<!---->
<!--                    <!--<i class="ct-i mask-i"></i>-->
<!--                    <div class="mask-bg"></div>-->
<!--                </div>-->
<!--            </li>-->
<!---->
<!---->
<!--            <li class="item " data-id="4537" title="圆形">-->
<!---->
<!--                        <img src="images/baozhen/80b45029918e851fd57717ff3999f427-200x200.jpeg" title="圆形">-->
<!---->
<!--                <div class="mask">-->
<!---->
<!--                    <!--<i class="ct-i mask-i"></i>-->
<!--                    <div class="mask-bg"></div>-->
<!--                </div>-->
<!--            </li>-->
<!---->
<!---->
<!--            <li class="item " data-id="4553" title="拼图">-->
<!---->
<!--                        <img src="images/baozhen/b5d04031520c732262c00aedff48ff6a-200x200.jpeg" title="拼图">-->
<!---->
<!--                <div class="mask">-->
<!---->
<!--                    <!--<i class="ct-i mask-i"></i>-->
<!--                    <div class="mask-bg"></div>-->
<!--                </div>-->
<!--            </li>-->
<!---->
<!---->
<!--            <li class="item " data-id="4552" title="线圈">-->
<!---->
<!--                        <img src="images/baozhen/da0d45151dc9b9707b106d747391b045-200x200.jpeg" title="线圈">-->
<!---->
<!--                <div class="mask">-->
<!---->
<!--                    <!--<i class="ct-i mask-i"></i>-->
<!--                    <div class="mask-bg"></div>-->
<!--                </div>-->
<!--            </li>-->
<!---->
<!---->
<!--            <li class="item " data-id="4554" title="餐具">-->
<!---->
<!--                        <img src="images/baozhen/9142df8661f0daa53b33242e81a1cb46-200x200.jpeg" title="餐具">-->
<!---->
<!--                <div class="mask">-->
<!---->
<!--                    <!--<i class="ct-i mask-i"></i>-->
<!--                    <div class="mask-bg"></div>-->
<!--                </div>-->
<!--            </li>-->
<!---->
<!--    </ul>-->
<!--    <div class="pagination-wrap hide">-->
<!--        <div class="num pull-left">1/0</div>-->
<!--        <div class="center">-->
<!--            <a href="http://wallwa.com/custom#" class="ctr-label prev disable">-->
<!--                <span class="arrow"></span>-->
<!--            </a>-->
<!--            <input type="text" class="form-control" value="1">-->
<!--            <a href="http://wallwa.com/custom#" class="ctr-label next disable">-->
<!--                <span class="arrow"></span>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--    </div>-->
<!--</div><div id="shape" class="bom-tab-content text-pane" role="tabpane">-->
    <div class="r-content-wrap material-cont-wrap ">
        <h3 class="bom-title bom-title-sele clearfix">
            
            尺码：
            
        </h3>
        <ul class="list-unstyled scroll-list bom-text-list " data-type="shape">
            
                
                    <li class="no-special">
                        
                        45x45cm
                        
                    </li>
                
            
        </ul>
        <span class="wa  show-sele"></span>
        </div>
    </div>





<div id="texture" class="bom-tab-content text-pane" role="tabpane">
    <div class="r-content-wrap material-cont-wrap ">
        <h3 class="bom-title bom-title-sele clearfix">
            
            材质：
            
        </h3>
        <ul class="list-unstyled scroll-list bom-text-list " data-type="texture">
            
                
                    <li class="no-special">
                        
                        细绒
                        
                    </li>
                
            
        </ul>
        <span class="wa  show-sele"></span>
        </div>
    </div>





</div>
                </div>
            </div>

        </div>
        <!--详情-->
        <div class="bg-white">
            <div class="pro-detail-container pro-detail-area ">
                <div class="pro-detail-box" id="pro-detail-des">
                    <div class="load-wrap"><div class="ww-loading"></div></div>
                    <!-- Place somewhere in the <body> of your page -->
                    <div class="bom-detail-slider active">
                        <img class="lazy shirt-bom">
                        <img class="lazy normal" data-original="/images/bom-detail/bolster.jpg" src="images/baozhen/bolster.jpg" style="display: inline;">
                    </div>
                    <h2 class="des-title">物流与包装</h2>
                    <div class="des-con">
                        <p>墙蛙为您考虑到每一步，采用行业专用包装方案——用缓冲层抗挤压，抗摔落；专用气泡塑料包裹，抗潮湿，防止液体流入。确保在快递与转运过程中，多次周转无破损。 请您放心，如果您的商品不幸在物流中遭遇百斤挤压/重力撞击/野蛮踩踏/高空坠落，外伤与内伤并发，墙蛙会尽千分之千的努力，为您补发商品，直到您满意为止！</p>

                        <p>1.墙蛙网合作物流为<span class="txt-blue">顺丰包邮</span>；</p>

                        <p>2.墙蛙网产品均为手工工艺品，制作需耗费时间，墙蛙承诺在您付款后48小时内发货（周日及法定节假日不发货），还请耐心等待。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bom-detail-modal"><!--物料详情-->
        <div class="carousel slide bom-detail-carousel">
            <div class="carousel-inner detail-inner"></div>
            <a class="left carousel-control hide" href="http://wallwa.com/custom#" data-target=".bom-detail-carousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span></a>
            <a class="right carousel-control hide" href="http://wallwa.com/custom#" data-target=".bom-detail-carousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span></a>
        </div>
    </div>
    <div class="modal fade" id="size-table-dialog" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog w760">
            <img class="lazy img-responsive" data-original="">
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
                    <img src="images/baozhen/weixinma.png" alt="微信二维码" class="erweima">
                </a>
                <span class="item ceo-item">
                    意见反馈 <a href="mailto:ceo@wallwa.com?subject=%E5%8F%8D%E9%A6%88%E6%9C%89%E5%A5%96&amp;body=%E6%82%A8%E5%9C%A8%E4%BD%BF%E7%94%A8%E4%B8%AD%E5%8F%91%E7%8E%B0%E5%A2%99%E8%9B%99%E7%BD%91%E7%9A%84%E4%B8%8D%E8%B6%B3%E4%B9%8B%E5%A4%84%EF%BC%8C%E4%B8%8D%E5%A5%BD%E7%9A%84%E4%BD%93%E9%AA%8C%EF%BC%8C%E6%8A%80%E6%9C%AF%E7%9A%84bug%EF%BC%8C%E8%AF%B7%E6%82%A8%E5%92%8C%E6%88%91%E8%81%94%E7%B3%BB%EF%BC%8C%E4%BC%98%E8%B4%A8%E7%9A%84%E5%8F%8D%E9%A6%88%EF%BC%8C%E4%B8%B0%E5%8E%9A%E7%9A%84%E5%A5%96%E5%93%81%E3%80%82%E8%AF%B7%E5%9C%A8%E9%82%AE%E4%BB%B6%E4%B8%AD%E6%B3%A8%E6%98%8E%E6%82%A8%E7%9A%84%E5%A2%99%E8%9B%99%E7%BD%91%E8%B4%A6%E5%8F%B7%E3%80%82"> ceo@wallwa.com</a>
                </span>
            </div>
        </div>
        <p class="copyrights">© 2015 wallwa.com 版权所有 浙ICP备 1102094</p>
    </div>
</div>
<a href="http://wallwa.com/custom#top" id="back-to-top" class="">
    <i class="glyphicon glyphicon-chevron-up"></i>
    <div class="inner1"><div class="inner2"></div></div>
</a>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/custom/zhankai.js"></script>
<script src="js/baozhen/hm.js"></script><script type="text/javascript" src="js/baozhen/common.js"></script>
<script type="text/javascript" src="js/baozhen/ejs.min.js"></script>
<script src="js/baozhen/moxie.min.js"></script>
<script src="js/baozhen/plupload.dev.js"></script>
<script type="text/javascript" src="js/baozhen/custom.js"></script><div class="modal gift-modal fade">
    <div class="table-modal">
        <div class="tbody">
            <div class="cont normal">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ww-icon ww-close">关闭</span>
                </button>
                <ul class="image-list list-unstyled">
                    <li class="active" style="z-index: 4;"><img src="images/baozhen/1.jpg" alt="墙蛙 注册有礼"></li>
                    <li style="z-index: 3;"><img src="images/baozhen/2.jpg" alt="墙蛙 注册有礼"></li>
                    <li style="z-index: 2;"><img src="images/baozhen/3.jpg" alt="墙蛙 注册有礼"></li>
                    <li style="z-index: 1;"><img src="images/baozhen/4.jpg" alt="墙蛙 注册有礼"></li>
                </ul>
                <div class="coupon-cont">
                    <p class="tit color-p1">打折需要理由吗？不需要吗？需要吗？</p>
                    <div class="cont">
                        诶，就是想请你体验一下墙蛙定制嘛，干嘛非要理由呢？<br>
                        即日起墙蛙网<strong> 7折包邮</strong>体验，注册再送 <strong>5元体验券</strong><br>
                        <strong>分享优惠码</strong>还有10元返现！
                    </div>
                    <div class="btn-wrap hide ">
                        <a class="btn btn-ghost" href="http://wallwa.com/custom">去定制</a>
                        <a class="btn btn-primary reg-btn" href="http://wallwa.com/register">去注册</a>
                        <a class="btn btn-primary disabled login-btn" href="javascript:void(0)">已登录</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
        $(".plus").on("click",function(){
            var $vals= $("#buy-count").val();
            //            console.log($vals);
            $valss=++$vals;
            $("#buy-count").val($valss);
            console.log($valss);
        });

        $(".minus").on("click",function(){
            var $vals= $("#buy-count").val();
            if($vals==1){
                $("#buy-count").val(1);
            }else{
                $valss=--$vals;
                $("#buy-count").val($valss);
                console.log($valss);
            }

        });

    </script>


    <script>
        <?php
        $this->load->model("user_model");
        $userid=$this->session->userdata("userinfo")->user_id;
        if($this->session->userdata("justbaozhenkind")){
        $namebaozhen=$this->session->userdata("justbaozhenkind")->tagkind;
        if($finddingzhibaozhen=$this->user_model->finddingzhibaozhen($userid,$namebaozhen)) {
        ?>
    </script>
        <script>
            console.log("1111");
            $(".shangchuanmask").css("display","block");
            $(".cartmask").css("display","none");
        </script>
    <?php
    }else{
    ?>
        <script>
            $(".shangchuanmask").css("display","none");
            $(".cartmask").css("display","block");
        </script>
        <?php
        }
        }
        ?>


    <?php
    if($this->session->userdata("justbaozhenkind")){
        $namebaozhen=$this->session->userdata("justbaozhenkind")->tagkind;
        if($finddingzhijuanzhouhua=$this->user_model->finddingzhijuanzhouhua($userid,$namebaozhen)){
            ?>
            <script>
                $(".htType-cont").mouseenter(function(e){
                    console.log("22222");
                    $(".masks").css("display","block");
                    $(".changebaozhen").css("z-index","999");
                    return false;
                });

                $(".changebaozhen").mouseleave(function(e){
                    $(".masks").css("display","none");
                    $(".changebaozhen").css("z-index","0");
                    return false;
//            e.stopPropagation()
                });
            </script>
            <?php
        }
    }
    ?>

</body></html>