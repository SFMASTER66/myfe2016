<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<div class="navbar top-navbar navbar-fixed-top h64 navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand paddrn" href="javascript:;">
                <img src="images/custom1/logo.png" alt="墙蛙 - 唤醒你的墙">
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
                <li class="menu last" id="new-pro" data-indentify="4">
                    <a target="_blank" href="user/startShop" class="btn btn-ghost btn-xs">创建新产品</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li id="messageinfo">
                    <a href="user/uerMsg" class="message-link"><span class="wa wa-e-mail"><i class="red-point"></i></span> 消息</a>
                    <?php
                    if($findcomment){
                        echo  '<span class="message">'.count($findcomment).'</span>';
                    }else{
                        echo  '<span class="message">0</span>';
                    }
                    ?>
                </li>
                <li class="dropdown avatar-item userinfo">
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
                            <a href="">订单管理</a>
                        </li>
                        <li>
                            <a href="user/editProfile">账号管理</a>
                        </li>
                        <li class="bottom">
                            <a href="welcome/index">退出</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="user/cart" class="message-link"><span class="wa wa-e-mail"><i class="red-point"></i></span>购物车</a>
                    <?php
                    if($findcartnum){
                        echo  '<span class="message">'.count($findcartnum).'</span>';
                    }else{
                        echo  '<span class="message">0</span>';
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</div>




</body>
</html>