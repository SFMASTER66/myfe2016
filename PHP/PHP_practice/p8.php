<?php
$first="";
$second="";
$third="";
$result="名字不能重复";
if(isset($_POST["submit"])){
    $first=$_POST["first"];
    $second=$_POST["second"];
    $third=$_POST["third"];

    if($first==$second||$first==$third||$second==$third){
        echo "<script>alert('".$result."')</script>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    分组姓名1：<input type="text" name="first"></br>
    分组姓名1：<input type="text" name="second"></br>
    分组姓名1：<input type="text" name="third"></br>
    <input type="submit" name="submit">
</form>
</body>
</html>