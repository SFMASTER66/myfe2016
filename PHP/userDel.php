<?php
/**
 * Created by PhpStorm.
 * User: 你大爷
 * Date: 2016/12/23
 * Time: 21:06
 */


$user_id=$_GET["id"];
//echo $user_id;
$pdo=new PDO("mysql:host=localhost;dbname=myblog","root","");
$sql="delete from tt_user where user_id=$user_id";
$result=$pdo->exec($sql);
//echo $result;

if($result>0){
    header("location:userLoginList.php");
}
//header("location:test.php?xx=$result");

