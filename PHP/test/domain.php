<?php
/**
 * Created by PhpStorm.
 * User: 你大爷
 * Date: 2016/12/25
 * Time: 11:19
 */

$a=10;       //这个等于下面这个$GLOBALS["a"]=10
//$GLOBALS["a"]=10;    //这个是超全局变量，等于上面$a=10，
function get(){
//    global $a;
//    echo $a;     //在php里，局部的也调用不了全局的变量，要想在局部的调用全局的，就要在局部的里面写上global，像上面一样。
    echo $GLOBALS["a"];
}
get();