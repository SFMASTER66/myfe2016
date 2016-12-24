<?php
/**
 * Created by PhpStorm.
 * User: 你大爷
 * Date: 2016/12/23
 * Time: 19:54
 */

$username=$_POST["username"];
$password=$_POST["password"];

$pdo=new PDO("mysql:host=localhost;dbname=myblog","root","");

$sql="insert into tt_user(username,password) values('$username','$password')";

$result=$pdo->exec($sql);
  echo $result;   //假如insert成功，会返回1，然后通过判断返回是否为一来验证insert是否成功。

if($result>0){
    header("location:userLoginList.php");
}