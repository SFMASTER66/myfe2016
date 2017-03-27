<!DOCTYPE html>
<!-- saved from url=(0029)http://wallwa.com/public/list -->
<html><head lang="zh-cmn-Hans"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp">
        <meta name="description" content="Wallwa 墙蛙 - 墙上艺术的专家。">
        <meta name="keywords" content="墙蛙,定制画,装饰画,墙上艺术,钉子">
        <base href="<?php echo site_url()?>">
        <title>商店</title>
        <link rel="stylesheet" href="css/find/base.css">
        <link rel="stylesheet" href="css/find/atom.css">
        <link rel="stylesheet" href="css/find/new.css">
        <link rel="stylesheet" href="css/userprofile/new.css">
         <link rel="stylesheet" href="css/common.css">


<link rel="stylesheet" href="css/find/product.css">


    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="navbar top-navbar navbar-fixed-top h64 ">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand paddrn" href="http://wallwa.com/home">
                <img src="images/find/logo.png" alt="墙蛙 - 唤醒你的墙">
            </a>



        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="menu">
                    <a class="def-menu" href="user/custom1?nameyoukuanghua=有框画" target="_blank">
                       定制
                    </a>
                </li>
                <li class="toplist dropdown menu h75">
                    <a target="_blank" class="def-menu discovery readed" href="user/find">
                        <i class="red-point0"></i>
                        发现
                    </a>
                </li>

                    <li class="menu last" id="new-pro" data-indentify="true">
                        <a class="btn btn-ghost btn-xs" href="user/startShop">创建新产品</a>
                    </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
<!--                <div class="nav-search-open-btn">-->
<!--                    <i class="wa wa-search mr4"></i>搜索-->
<!--                </div>-->
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




                <?php
                if($this->session->userdata("userinfo")){
                    include "username.php";
                }else{
                    include "findLogin.php";
                }
                ?>
                <!--                --><?php // include "username.php"?>


                <li class="cart-item">
                    <a href="http://wallwa.com/cart" target="_blank" class="cart-itema">
                        <span class="add-cart-count">0</span>
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



<?php // include "loginSuccessOtherHeader.php"?>




<input class="hide" value="false" id="login-status">
<div class="search-zzc"></div>


<div class="ww-wrap product-wrap public-pro-wrap">
    <div class="pro-category-nav">
        
        <ul class="pro-cate-list clearfix">
            <li data-type="Frame" class="active">
                <a href="http://wallwa.com/public/list?categoryType=Frame" class="default-link cate-box">
                    <span class="wa wa-youkuanghua"></span>
                    <p>装饰画</p>
                    <div class="right-line"></div>
                </a>
            </li>

            <li data-type="Bolster">
                <a href="user/findbaozhen" class="default-link cate-box">
                    <span class="wa wa-baozhen"></span>
                    <p>抱枕</p>
                    <div class="right-line"></div>
                </a>
            </li>
            <li data-type="ShirtMan">
                <a href="user/findnankuan" class="default-link cate-box">
                    <span class="wa wa-T-Shirt"></span>
                    <p>T恤</p>
                    <div class="right-line"></div>
                </a>
            </li>
            <li data-type="Case">
                <a href="user/findshouji" class="default-link cate-box disabled">
                    <span class="wa wa-phone-case"></span>
                    <p>手机壳</p>
                    <div class="right-line"></div>
                </a>
            </li>

            <li data-type="Bag">
                <a href="user/findfanbu" class="default-link cate-box">
                    <span class="wa wa-fanbudai"></span>
                    <p>帆布包</p>
                    <div class="right-line"></div>
                </a>
            </li>
            <li data-type="Cup" class="last">
                <a href="user/findbeizi" class="default-link cate-box">
                    <span class="wa wa-lvxingbei "></span>
                    <p>旅行杯</p>
                </a>
            </li>
        </ul>
        <ul class="pro-cate-list pro-cate-detail-list  clearfix" style="display: none; height: 84px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
            <li class="active">
                <a href="user/find" class="default-link pro-cate-detail">有框画</a>
                <a href="user/findbuyi" class="default-link pro-cate-detail showbuyi">布艺画</a>
                <a href="user/findjuanzhou" class="default-link pro-cate-detail showjuanzhou">卷轴画</a>
            </li>
            <li>
                &nbsp;
            </li>

            <li>
                <a href="user/findnankuan" class="default-link pro-cate-detail">男士圆领T</a>
                <a href="user/findnvkuan" class="default-link pro-cate-detail">女士圆领T</a>
                <a href="user/findertong" class="default-link pro-cate-detail">儿童圆领T</a>
            </li>

            <li class="last">
                &nbsp;
            </li>

        </ul>
    </div>
    <div class="pro-category-banner">

<!--    <div class="cate-banner" style="background-image:url(&#39;/images/product/pro-list-bnr/Frame-bnr.jpg&#39;)">  内联样式要怎么写背景图片才对     -->
        <div class="cate-banner">

</div></div>
    <div class="product-list-con public">


        <div class="product-list-area clearfix findyoukuang" id="product-list-area" style="position: relative;">
          <?php
          foreach($allyoukuang as $row){
              echo '<div class="pro-list  grey-border" data-id="1531" data-type="Frame">';
              echo '<div class="pro-pic show-big-img text-center">';
              echo '<a target="_blank" href="http://wallwa.com/item/product-detail?itemId=1531&amp;type=Frame">';
              echo '<img class="normal lazy" data-original="/ic/item/1531/200/f7e4a9c1e3ef4354c43d8b6fde9f5fea-800x800.png" \="" src="'.$row->img_address.'" style="display: inline;">';
              echo '</a>';
              echo '<a class="paint-link" style="background-image:url(/ic/image/44378/400/0fd39ae649672c5141ef0045e4199c97-9000x9000.jpeg); " target="_blank" href="http://wallwa.com/item/product-detail?itemId=1531&amp;type=Frame">';
              echo '</a>';
              echo '</div>';
              echo '<div class="pro-detail clearfix">';
              echo '<span class="pro-price pull-right">';
              echo $row->price;
              echo '</span>';
              echo '<div class="pull-left pro-title">';
              echo '<a href="http://wallwa.com/item/product-detail?itemId=1531&amp;type=Frame" class="default-hover-link">';
              echo $row->commodity_desc;
              echo '</a>';
              echo '</div>';
              echo '<div class="clearfix"></div>';
              echo '<span class=" pull-right">';
//              echo '<a class="default-link list-like-btn" href="http://wallwa.com/login?next=public/list">';
//              echo '<span class="wa wa-heart-fill "></span> <span class="like-count">2</span>';
//              echo '</a>';
              echo '</span>';
              echo '<div class="author-name pull-left">';
              echo '<a class="default-hover-link" href="http://wallwa.com/persional?userId=12760">'.$row->username.'</a>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
          }
          ?>

            <ul class="pagination-ul">
                <?php
                echo $this->pagination->create_links();
                ?>
            </ul>

        <div class="loading-backdrop"><span></span><div class="ww-loading"></div></div></div>
        <div class="product-list-area text-center">
            
            <div class="pagination-box" style="display: block;">

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
                    <img src="images/find/weixinma.png" alt="微信二维码" class="erweima">
                </a>
                <span class="item ceo-item">
                    意见反馈 <a href="mailto:ceo@wallwa.com?subject=%E5%8F%8D%E9%A6%88%E6%9C%89%E5%A5%96&amp;body=%E6%82%A8%E5%9C%A8%E4%BD%BF%E7%94%A8%E4%B8%AD%E5%8F%91%E7%8E%B0%E5%A2%99%E8%9B%99%E7%BD%91%E7%9A%84%E4%B8%8D%E8%B6%B3%E4%B9%8B%E5%A4%84%EF%BC%8C%E4%B8%8D%E5%A5%BD%E7%9A%84%E4%BD%93%E9%AA%8C%EF%BC%8C%E6%8A%80%E6%9C%AF%E7%9A%84bug%EF%BC%8C%E8%AF%B7%E6%82%A8%E5%92%8C%E6%88%91%E8%81%94%E7%B3%BB%EF%BC%8C%E4%BC%98%E8%B4%A8%E7%9A%84%E5%8F%8D%E9%A6%88%EF%BC%8C%E4%B8%B0%E5%8E%9A%E7%9A%84%E5%A5%96%E5%93%81%E3%80%82%E8%AF%B7%E5%9C%A8%E9%82%AE%E4%BB%B6%E4%B8%AD%E6%B3%A8%E6%98%8E%E6%82%A8%E7%9A%84%E5%A2%99%E8%9B%99%E7%BD%91%E8%B4%A6%E5%8F%B7%E3%80%82"> ceo@wallwa.com</a>
                </span>
            </div>
        </div>
        <p class="copyrights">© 2015 wallwa.com 版权所有 浙ICP备 1102094</p>
    </div>
</div>
<a href="http://wallwa.com/public/list#top" id="back-to-top" class="">
    <i class="glyphicon glyphicon-chevron-up"></i>
    <div class="inner1"><div class="inner2"></div></div>
</a>
<script src="js/find/hm.js"></script><script type="text/javascript" src="js/find/common.js"></script>
<script type="text/javascript" src="js/find/ejs.min.js"></script>
<script src="js/find/moxie.min.js"></script>
<script src="js/find/plupload.dev.js"></script>
<script src="js/find/publicProList.js"></script><div id="prompt" class="ww-prompt static-prompt"><div class="alert"></div></div>
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
        $(".pro-category-nav").hover(function(){
            $(".pro-cate-detail-list").css("display","block");
        },function(){
            $(".pro-cate-detail-list").css("display","none");
        });

        $(".showbuyi").on("click",function(){
            $(".findyoukuang").css("display","none");
            $("findbuyi").css("display","block")
        })

        $(".showjuanzhou").on("click",function(){

            $("findjuanzhou").css("display","block")
        })
    });




</script>

</body></html>