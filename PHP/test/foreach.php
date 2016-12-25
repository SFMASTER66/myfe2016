<?php
/**
 * Created by PhpStorm.
 * User: 你大爷
 * Date: 2016/12/25
 * Time: 17:30
 */

//foreach 循环只适用于数组，并用于遍历数组中的每个键/值对。

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
//foreach($age as $a){     //这么写，$a就是值，比如35
//    echo $a;
//}

//foreach($age as $a=>$b){    //这么写，$a就是对应Peter，然后$b就是对应35；
//    echo $b;
//}
echo $age["Peter"];