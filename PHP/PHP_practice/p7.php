<?php
session_start();
$result=[];
if(isset($_SESSION["user"])){
    $result=$_SESSION["user"];  //一刷新页面的时候，先判断是否有user，有的话先存起来，放在session里。
}
if(isset($_POST["submit"])){
    $arr=[];
    $name=$_POST["name"];
    $age=$_POST["age"];
    $arr[]=$name;
    $arr[]=$age;
    $result[]=$arr;         //像这种就要数组套了数组了
    $_SESSION["user"]=$result;
}
if(isset($_POST["delete"])){
    array_pop($result);
    $_SESSION["user"]=$result;
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

    名称：<input type="text" name="name">
    年龄：<input type="text" name="age">
    <input type="submit" name="submit" value="提交">
</form>
    <table>
        <tr>
            <td>编号</td>
            <td>姓名</td>
            <td>年龄</td>
        </tr>
    </table>
<form action="" method="post">
    <?php
    foreach($result as $key=>$value){ //$result就是二维数组的一整个大数组，然后通过foreach变成一个个的单个数组。
        echo "<tr>";
        echo "<td>".($key+1)."</td> &nbsp";
        echo "<td>".$value[0]."</td> &nbsp";
        echo "<td>".$value[1]."</td>";
        echo "</tr>";
        echo "</br>";
    }
    ?>
    <input type="submit" value="删除" name="delete">
</form>
</body>
</html>