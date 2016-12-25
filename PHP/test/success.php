<?php
/**
 * Created by PhpStorm.
 * User: 你大爷
 * Date: 2016/12/25
 * Time: 9:51
 */

$name=$_GET["xx"];
$password=$_GET["yy"];

//echo "$password";

//echo "welcome";      //输出文字得加引号

?>
welcome

<?php

echo $name,$password;       //这个逗号是不输出的，这个逗号是因为echo可以输出多个的意思，但是他们输出的时候是连在一起的。
