<?php
/**
 * Created by PhpStorm.
 * User: 你大爷
 * Date: 2016/12/23
 * Time: 22:20
 */

$username=$_POST["username"];
$password=$_POST["password"];


$pdo=new PDO("mysql:host=localhost;dbname=myblog","root","");
$sql="select * from tt_user where username=$username and password=$password";
$result=$pdo->query($sql);
//print_r(mysql_fetch_array($result));
//echo $result;
//echo "2222";

if(is_array($result)){
    echo "1111";
    foreach($result as $row=>$credit){
        if($username==$credit["username"]&&$password==$credit["password"]){
            header("location:userLoginList.php");
        }else{
            header("location:login.php");
        }
    }
}


?>