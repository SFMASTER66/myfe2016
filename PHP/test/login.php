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
<form action="welcome.php" method="post">
    用户名：<input type="text" name="name">
    <?php
    if(isset($_GET["xx"])){         //isset就是判断get是否接收到有值
        echo "<span>name不能为空</span>";
    }
    ?>
    </br>
    密码：<input type="text" name="password">
    <?php
    if(isset($_GET["yy"])){
        echo "<span>password不能为空</span>";
    }
    ?>
    </br>
    <input type="submit">

</form>

</body>
</html>