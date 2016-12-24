<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        span{
            color:red;
        }
    </style>
</head>
<body>
<form action="welcome.php" method="post">   <!--这个也是我要跳转到哪个页面，利用post的方式-->
    <p>
        用户名：<input type="text" name="username"/>
        <?php
        if(isset($_GET["username"])){
           echo "<span>name不能为空<span>";
        }

        ?>
    </p>
    <p>
        密码: <input type="password" name="psd"/>
        <?php
        if(isset($_GET["psd"])){
            echo "<span>email不能为空<span>";
        }
        ?>
    </p>
    <p>
        <input type="submit" value="login"/>
    </p>
</form>


</body>
</html>

