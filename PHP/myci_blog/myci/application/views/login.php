<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url()?>">  <!--记住！！这个在每个页面都要写！！！-->
</head>
<body>
        <h1>用户登陆</h1>
    <form action="User/login" method="post">   <!--第一个user写的是控制器的user（不区分大小写），然后第二个login是user下的方法！！-->
        用户名: <input type="text" name="username"><br>
        密码: <input type="password" name="password"><br>
        <input type="submit" value="登录" name="login">
        <input type="submit" value="注册" name="register">
    </form>
</body>
</html>