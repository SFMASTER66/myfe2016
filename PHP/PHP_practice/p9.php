<?php
$arr=array("tom"=>98,"jim"=>60,"mike"=>89,"kelly"=>100,"john"=>45);
if(isset($_POST["submit"])){
    $name=$_POST["name"];  //得到的是字符串；
//    echo $name;
//    foreach($arr as $key=>$value){
////        echo $key;  //这里的key是字符串。
//        if($name==$key){
//            echo "<script>alert('"."$key"."成绩为$value"."')</script>";  //个人理解啊，是字符串就要另外加引号啊，是数字就不用引号。
//        }else{
//            echo "<script>alert('"."没有该学生的成绩"."')</script>";   //怎么解决这个弹出五次的问题？
//        }
//    }
    if(array_key_exists($name,$arr)){       //用这个方法写的else语句，就只会弹出一次。
        echo "<script>alert('"."$name"."成绩为".$arr["$name"]."')</script>";
    }else{
        echo "<script>alert('"."没有该学生的成绩"."')</script>";
    }
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
    姓名：<input type="text" name="name">
    <input type="submit" name="submit" value="提交">
</form>
</body>
</html>