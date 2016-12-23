<?php
$id=$_GET["id"];
$pdo=new PDO("mysql:host=localhost;dbname=myblog","root","");
$sql="select user_id from tt_user where user_id=$id";
$result=$pdo->query($sql);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="regist.php?id=$id" method="post">
    <input type="password" name="newPassWord">
    <input type="submit">
</form>

</body>
</html>