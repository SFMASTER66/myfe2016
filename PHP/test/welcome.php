<?php
/**
 * Created by PhpStorm.
 * User: 你大爷
 * Date: 2016/12/25
 * Time: 9:49
 */

$name=$_POST["name"];
$password=$_POST["password"];

$err="";
if($name==""){
    $err.="xx=1&";
}
if($password==""){
    $err.="yy=2";
}
header("location:login.php?$err");


//header("location:success.php?xx=$name&yy=$password");
