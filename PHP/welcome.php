<?php
/**
 * Created by PhpStorm.
 * User: 你大爷
 * Date: 2016/12/23
 * Time: 14:33
 */

$username=$_POST["username"];
$psd=$_POST["psd"];

$err="";
if($username==""){
    $err.="username=1&";
}
if($psd==""){
    $err.="psd=2";
}

//echo $username,$psd;

//header("location:success.php?username=$username&psd=$psd");

header("location:form.php?$err");