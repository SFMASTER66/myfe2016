<?php
$arr=[];
do{
    $num=mt_rand(0,9);
//    echo $arr;
    $arr[]=$num;
    echo $arr;
    $arr=array_unique($arr);
}while(count($arr)!=5);
echo $arr;
foreach($arr as $value){
    echo $value." ";    //这个点相当于+的意思
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
</body>
</html>