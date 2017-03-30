<!DOCTYPE html>
<!-- saved from url=(0024)http://wallwa.com/custom -->
<html><head lang="zh-cmn-Hans"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp">
        <meta name="description" content="Wallwa 墙蛙 - 墙上艺术的专家。">
        <meta name="keywords" content="墙蛙,定制画,装饰画,墙上艺术,钉子">
        <base href="<?php echo site_url()?>">
        <title>墙蛙网 - 定制</title>
        <link rel="stylesheet" href="css/lvxingbei/base.css">
        <link rel="stylesheet" href="css/lvxingbei/atom.css">
        <link rel="stylesheet" href="css/lvxingbei/new.css">


<link rel="stylesheet" href="css/lvxingbei/custom.css">
<link rel="stylesheet" href="css/lvxingbei/introjs.css">
<link rel="stylesheet" href="css/lvxingbei/flexslider.css">
<!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

<?php include "custom1header.php"?>
<input class="hide" value="true" id="login-status">
<div class="search-zzc"></div>


    <?php include "custom-header.php"?>

    <div class="ww-wrap custom-wrap clearfix">
        <div id="custom-stage" class="cont-wrap container">
            <!--work&&scene-->


            <!--customArea-->
            <div class="custom-cont">
                <div class="load-wrap"><div class="ww-loading"></div></div>

                <div class="pic-area">
                    <div class="pic-cont-wrap  tab-content">
                        <div id="framePic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="framePic-wrap pic-content" style="background-image: url(&quot;//wallwa.com/ic/bom/line-box/38?Width=480&amp;Height=480&amp;Border=27&quot;); padding: 27px; width: 480px; height: 480px; margin-left: 220px;"><div class="top-mat mat" style="background: none rgb(255, 255, 251);"><div class="view-port mat-bg" style="top: 65px; left: 65px; width: 298px; height: 298px;"><div class="middle-mat mat"><div class="bottom-mat mat"><div class="hole-wrap mat"><div class="img-content-wrap"><div class="shade"></div><div class="img-content" style=""><img src="http://wallwa.com/custom" class="img-target" style="display: none;"></div></div></div></div></div></div></div></div>
                                <div class="multiPic-wrap pic-content" style="display: none;"><div class="top-mat mat"></div></div>
                            </div>
                        </div>
                        <div id="rimlessPic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="rimlessPic-wrap"></div>
                                <div class="swf-wrap hide"><div id="swf-cont"></div></div>
                                <div class="framePic-wrap rimlessFramePic-wrap pic-content"></div>
                            </div>
                        </div>
                        <div id="photoWall" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="photoWall-wrap pic-content"></div>
                            </div>
                        </div>
                        <div id="scrollPic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="scrollPic-wrap pic-content"></div>
                            </div>
                        </div>
                        <!--<div id="paintPic" class="pic-wrap tab-pane" role="tabpanel">-->
                            <!--<div class="pic-cell">-->
                                <!--<div class="paintPic-wrap pic-content"></div>-->
                            <!--</div>-->
                        <!--</div>-->
                        <div id="cupPic" class="pic-wrap tab-pane active" role="tabpanel">
                            <div class="pic-cell">
                                <div class="side-control">
<!--                                    <a href="javascript:void(0)" class="default-side active">正面</a> <a href="javascript:void(0)" class="other-side">侧面</a>-->
                                </div><div class="cupPic-wrap pic-content htPic-wrap fire" style="width: 480px; height: 480px; margin-left: 220px;">
                                    <div class="cupPic-cont" style="width: 142px; height: 322px; top: 119px; left: 168px;">
                                        <img src="images/lvxingbei/ac6cfeeb38948d946fa27120516bff27-503x1139.jpeg" class="bg-img">
                                        <div class="hole-wrap mat no-bg grab" style="width: 505px; height: 369px; top: -24px; left: -169px;"><div class="img-content-wrap">
                                                <div class="img-content htType-cont" style="transform: scale(1, 1);">
<!--                                                    <img src="images/lvxingbei/1c73b381d22ae998328e798326796193-3264x2448.jpeg" class="img-target" style="display: inline; width: 505px; height: 378.795px; margin-top: -190px; margin-left: -253px; transform: rotate(0deg);">-->
                                                    <?php
                                                    $this -> load -> model("user_model");
                                                    $userid=$this->session->userdata("userinfo")->user_id;
                                                    if($this->session->userdata("justbeizikind")){
                                                        $tagbeizi=$this->session->userdata("justbeizikind")->tagkind;
//                                                        var_dump($tagbeizi);die();
                                                        if( $findbeizi=$this->user_model->findbeizi($userid,$tagbeizi)){
                                                            echo '<img src='.$beiziImg->youkuanghua_img.' class="img-target" style="display: inline; width: 505px; height: 378.795px; margin-top: -190px; margin-left: -253px; transform: rotate(0deg);">';
                                                        }
                                                    }else{
                                                        if($beiziImg){
                                                            echo '<img src='.$beiziImg->youkuanghua_img.' class="img-target" style="display: inline; width: 505px; height: 378.795px; margin-top: -190px; margin-left: -253px; transform: rotate(0deg);">';
                                                        }else{
//                                                            $tagbeizi=$this->session->userdata("justbeizikind")->tagkind;
//                                                            var_dump($tagbeizi);die();
                                                            echo '<img src="images/lvxingbei/1c73b381d22ae998328e798326796193-3264x2448.jpeg" class="img-target" style="display: inline; width: 505px; height: 378.795px; margin-top: -190px; margin-left: -253px; transform: rotate(0deg);">';
                                                        }
                                                    }
                                                    ?>
                                                </div></div></div></div>
                                    <img src="images/lvxingbei/60cd3f332a872dac0be4c8c59553494e-1700x1700.png" class="hg-img">
                                </div>
                                <form action="user/changebeizi" method="post" enctype="multipart/form-data" class="shade">
                                    <input  type="file" name="changebeizi" accept="*/*"  class=" btn btn-block btn-primary changebeizi" id="trigger-upload">
                                    <input type="submit" class="submit1">
                                    <input type="hidden" value="旅行杯" class="tagkind" name="namebeizi">
                                </form>
                                <div class="masks">更换图片</div>
                            </div>
                        </div>
                        <div id="bolsterPic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="bolsterPic-wrap pic-content htPic-wrap"></div>
                            </div>
                        </div>
                        <div id="shirtPic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="shirtPic-wrap pic-content htPic-wrap"></div>
                            </div>
                        </div>
                        <div id="shirtManPic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="shirtManPic-wrap pic-content htPic-wrap"></div>
                            </div>
                        </div>
                        <div id="shirtWomanPic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="shirtWomanPic-wrap pic-content htPic-wrap"></div>
                            </div>
                        </div>
                        <div id="shirtChildPic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="shirtChildPic-wrap pic-content htPic-wrap"></div>
                            </div>
                        </div>
                        <div id="bagPic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="bagPic-wrap pic-content htPic-wrap fire" style="width: 480px; height: 480px; margin-left: 220px;"><div class="bagPic-cont htType-cont" style="width: 199px; height: 199px; top: 221px; left: 141px;">
                                        <img src="images/lvxingbei/74e5620cfb3d8eff1325df5ad94b2029-828x828.png" class="bg-img">
                                        <div class="hole-wrap mat no-bg grab" style="width: 199px; height: 199px;"><div class="img-content-wrap">
                                                <div class="img-content" style="transform: scale(0.74933, 0.74933); top: 0px; left: 0px;">
                                                    <img src="images/lvxingbei/1c73b381d22ae998328e798326796193-3264x2448.jpeg" class="img-target" style="display: inline; width: 265.571px; height: 199px; margin-top: -100px; margin-left: -133px; transform: rotate(0deg);">
                                                </div></div></div></div><img src="images/lvxingbei/8686656d4b5ffd187a929db7d13e23f1-2000x2000.png" class="hg-img"><img src="images/lvxingbei/708b773f5c5e717d6fd9e2d94575fa28-2000x2000.png" class="outline-img"></div>
                            </div>
                        </div>
                        <div id="casePic" class="pic-wrap tab-pane" role="tabpanel">
                            <div class="pic-cell">
                                <div class="casePic-wrap pic-content htPic-wrap"></div>
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

                    <!--工具条-->


                    <div class="dialog-prompt" style="display: none;"><div id="prompt" class="ww-prompt custom-prompt"><div class="alert"></div></div></div>
                </div>

                <!--scene area-->
                <div class="scene-area loading">
                    <button type="button" class="scene-close" aria-label="Close">
                        <span class="ww-icon ww-close">关闭</span>
                    </button>

                    <div class="scene-load-wrap text-center">
                        <img class="pre-loading" src="images/lvxingbei/loading-32.gif" alt="wallwa loading">
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
                                <span class="item discount-price">
                                   <strong>￥</strong><strong id="completedMoney" class="singleprice">61.6</strong>
                                </span>
                            </span>
                        </li>
                        <li>
                            <span class="title">完成尺寸</span>
                            <span class="pull-right size" id="completedSize">300ml</span>
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
                                <span class="addcart">加入购物车</span>
                            </button>
                        </div>

                        <div class="step step2" data-step="2">
                            <a href="http://wallwa.com/cart" class="btn btn-lg btn-block btn-success " target="_blank" data-type="link">
                                <img src="images/lvxingbei/circle-money.png" alt="">
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
                        <div class="share-erweima invisible">
                            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <p>扫一扫进行分享</p>
                            <div class="code-wrap">
                                <img src="images/lvxingbei/loading-32.gif" alt="墙蛙微信分享二维码" class="code">
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



</div>
                        <div class="shangchuanmask"></div>
                        <div class="img-material-nav" style="position: relative;">
                            <div class="div1">上传图片</div>
                            <form action="user/dingzhibeizi" method="post" enctype="multipart/form-data" >
                                <input  type="file" name="dingzhibeizi" accept="*/*"  class=" btn btn-block btn-primary uploadPic shangchuanform" id="trigger-upload">
                                <input type="submit" class="submit">
                                <input type="hidden" value="旅行杯" name="tagbeizi">
                            </form>

<div id="cupTpl" data-type="cupTpl" class="bom-tab-content hide" role="tabpane">
    
    <div class="r-content-wrap material-cont-wrap cupTpl-wrap">
        <h3 class="bom-title clearfix">
    
    款式
    
</h3>
<div class="list-wrap icon-list-wrap">
    
    <ul class="list-unstyled scroll-list scroll-list-img" data-type="cupTpl">
        
            
            <li class="item active" data-id="4524" title="旅行杯-白色">
                    
                        <img src="images/lvxingbei/a7e09c23ca2e482386d7457d48c05e8c-65x65.jpeg" title="旅行杯-白色">
                    
                <div class="mask">
                    
                    <!--<i class="ct-i mask-i"></i>-->
                    <div class="mask-bg"></div>
                </div>
            </li>
        
    </ul>
    <div class="pagination-wrap hide">
        <div class="num pull-left">1/0</div>
        <div class="center">
            <a href="http://wallwa.com/custom#" class="ctr-label prev disable">
                <span class="arrow"></span>
            </a>
            <input type="text" class="form-control" value="1">
            <a href="http://wallwa.com/custom#" class="ctr-label next disable">
                <span class="arrow"></span>
            </a>
        </div>
    </div>
</div>

    </div>
</div><div id="color" class="bom-tab-content text-pane" role="tabpane">
    <div class="r-content-wrap material-cont-wrap ">
        <h3 class="bom-title bom-title-sele clearfix">
            
            颜色：
            
        </h3>
        <ul class="list-unstyled scroll-list bom-text-list " data-type="color">
            
                
                    <li class="no-special clothcolor">白色</li>
                
            
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
            
                
                    <li class="no-special caizhi">精选食品级塑料</li>
                
            
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
                        <img class="lazy normal" data-original="/images/bom-detail/cup.jpg" src="images/lvxingbei/cup.jpg" style="display: inline;">
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
                    <img src="images/lvxingbei/weixinma.png" alt="微信二维码" class="erweima">
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

<script src="js/lvxingbei/hm.js"></script><script type="text/javascript" src="js/lvxingbei/common.js"></script>
<script type="text/javascript" src="js/lvxingbei/ejs.min.js"></script>
<script src="js/lvxingbei/moxie.min.js"></script>
<script src="js/lvxingbei/plupload.dev.js"></script>
<script type="text/javascript" src="js/lvxingbei/custom.js"></script><div class="modal gift-modal fade">

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

        <script>
            $(".chicun li").on("click",function(){
                $(this).addClass("active").siblings().removeClass("active")
            });

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
            if($this->session->userdata("justbeizikind")){
            $namebeizi=$this->session->userdata("justbeizikind")->tagkind;
            if($finddingzhibeizi=$this->user_model->finddingzhibeizi($userid,$namebeizi)) {
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
        $this->load->model("user_model");
        if($this->session->userdata("justbeizikind")){
            $namebeizi=$this->session->userdata("justbeizikind")->tagkind;
            if($ffinddingzhibeizi=$this->user_model->finddingzhibeizi($userid,$namebeizi)){
                ?>
                <script>
                    $(".htType-cont").mouseenter(function(e){
                        console.log("22222");
                        $(".masks").css("display","block");
                        $(".changebeizi").css("z-index","999");
                        return false;
                    });

                    $(".changebeizi").mouseleave(function(e){
                        $(".masks").css("display","none");
                        $(".changebeizi").css("z-index","0");
                        return false;
                    });
                </script>
                <?php
            }
        }
        ?>


        <script>
            $(".addcart").on("click",function(){
                var $num= $("#buy-count").val();
                var $chima=$(".chicun .active span").text();
                var $caizhi=$(".caizhi").text();
                var $clothcolor=$(".clothcolor").text();
                var $tagkind=$(".tagkind").val();
                var $singleprice=$(".singleprice").text();
                console.log($num);
                console.log($chima);
                console.log($caizhi);
                console.log($clothcolor);
                console.log($tagkind);
                console.log($singleprice);
                $.get("user/beiziaddcart",{num:$num,chima:$chima,caizhi:$caizhi,clothcolor:$clothcolor,tagkind:$tagkind,singleprice:$singleprice},function(data){
                    if(data=="success"){
                        console.log("chenggong");
                        window.location.href="user/cart";
                    }else if(data=="fail"){
                        console.log("shibai");
                    }
                })
            });
        </script>

</body></html>