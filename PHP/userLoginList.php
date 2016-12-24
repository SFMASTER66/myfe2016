<?php
$pdo=new PDO("mysql:host=localhost;dbname=myblog","root","");
$sql="select * from tt_user";
$result=$pdo->query($sql);
//print_r(mysql_fetch_array($result,MYSQL_ASSOC ));

//var_dump($result);
//  echo $result;
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
        <td>username</td>
        <td>password</td>
        <?php
        foreach($result as $row){
            echo "<tr>";
            echo "<td>".$row["username"]."</td>";
            echo "<td>".$row["password"]."</td>";
            echo "<td><a href='userDel.php?id=".$row["user_id"]."'>删除</a></td>";
            echo "<td><a href='userRepwd.php?id=".$row["user_id"]."'>修改</a></td>";
            echo "</tr>";
        }
        ?>
    </tr>
</table>
</body>
</html>