<?php
/**
 * Created by PhpStorm.
 * User: 你大爷
 * Date: 2016/12/25
 * Time: 12:05
 */


$arr=array(1,2,3,4);
//print_r($arr);  //这个可以输出数组。
//echo $arr;      //这个输出不了数组
//var_dump($arr);    //这个不仅输出数组，而且把这个变量的类型也输出来，

//echo  "my car is a $arr[0]";     //这里的单引号和双引号是有区别的，要是写双引号，就会解析双引号里面的变量
//echo  'my car is a $arr[0]';     //要是写单引号，就不会解析里面的变量，当作一个字符串输出了。
//echo 'my car is a '.$arr[0];      //要想用单引号，就要用字符串拼接了，在php，字符串拼接 用点（.）


//$a=array("mike","jim","lili");
//var_dump($a[0]);

$b="null";     //这个是字符串null
$b=null;        //这个就是输出null；
var_dump($b);