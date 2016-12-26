<?php
$arr = array('2012 Macbook Pro','2009 iMac','2011 Macbook Air','2007 iPad1');
if(isset($_POST["submit1"])){
    sort($arr);
}
if(isset($_POST["submit2"])){
    rsort($arr);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <td>商品顺序</td>
        <td>商品名称</td>
    </tr>
    <?php
    foreach($arr as $key=>$value){
        echo "<tr>";
        echo "<td>".($key+1)."</td>";
        echo "<td>".$value."</td>";
        echo "</tr>";
    }
    ?>
</table>
    <form action="" method="post">
    <input type="submit" name="submit1" value="正序">
    <input type="submit" name="submit2" value="反序">
</form>
</body>
</html>