<?php
/**
 * Created by PhpStorm.
 * User: 你大爷
 * Date: 2016/12/25
 * Time: 17:27
 */

$x=5;
switch ($x)
{
    case 1:
        echo "Number 1";
        break;
    case 2:
        echo "Number 2";
        break;
    case 3+2:     //js和php都可以这么写，也是有效的
        echo "Number 3";
        break;
    default:
        echo "No number between 1 and 3";
}
