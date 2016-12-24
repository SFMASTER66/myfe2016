<?php
$newPwd=$_POST["newPassWord"];
$user_id=$_GET["id"];
echo $newPwd;
$pdo=new PDO("mysql:host=localhost;dbname=myblog","root","");
$sql="update tt_user set password=$newPwd where user_id=$user_id";
$result=$pdo->exec($sql);
echo "1111";
echo $result;
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="user.php" method="post">
   用户名：<input type="text" name="username"> </br></br>
   密  码： <input type="password" name="password"> </br></br>
    <input type="submit" value="regist">
</form>

</body>
</html>