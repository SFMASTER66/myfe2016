<?php
$res="";
$bigarr=[];
    if(isset($_POST["submit"])){

        for($i=0;$i<5;$i++){
            $arr=[];    //每一次生成二维数组里面的一维数组的时候，都要先来一个新的数组，让这一次数组的数字在这个数组里。
            do{
                $num=mt_rand(0,36);
                $arr[]=$num;
                $arr=array_unique($arr);
            }while(count($arr)!=7);
            $bigarr[]=$arr;
        }
    }
foreach($bigarr as $key=>$value){
    $res=implode(",",$value);     //把一维数组的的数字变成一个个字字符串输出。
    echo "第".($key+1)."注: ".$res."</br>";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="submit" name="submit"  value="点击生成新的号码">
</form>
</body>
</html>