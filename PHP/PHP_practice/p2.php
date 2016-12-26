<?php
$arr=array("12-12"=>"外地出差","12-13"=>"上班");
$date="";
$result="";
if(isset($_POST["query"])){
    $date=$_POST["date"];
    if(isset($arr[$date])){
            $result=$arr[$date];
    }else{
        $result="无备忘录";
    }
    echo "<script>alert('".$result."')</script>";
}
?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    输入查询日期：<input type="text" name="date"></br>
    <input type="submit" name="query" value="查询">
    <input type="reset" name="reset" value="重置">
</form>
</body>
</html>