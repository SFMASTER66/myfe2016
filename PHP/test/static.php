<?php
/**
 * Created by PhpStorm.
 * User: 你大爷
 * Date: 2016/12/25
 * Time: 11:32
 */

function get(){
    static $a=2;   //这个是静态的变量，相当于每一次调用这个函数，都会共用这个变量，都会在这个变量的基础上进行运算，
                     //要是不写static，那么每一次调用这个函数就会输出相同的值

    $a++;

    echo $a;
}
get();
get();
get();
get();