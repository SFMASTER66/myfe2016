<?php
$title="";
$content="";
$date="";
$arr=[];
$res="";       //当我在后面的html代码里用php的echo输出了，就要在一开始给这个赋值一个空的值。不然就会显示一个未定义的变量的错误
if(isset($_POST["submit"])){
    $title=$_POST["title"];
    $content=$_POST["content"];
    $date=$_POST["date"];
    $arr[]=$title;
    $arr[]=$content;
    $arr[]=$date;
    $res=implode("，",$arr);
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
    新闻标题：<input type="text" name="title"></br>
    新闻内容：<input type="text" name="content"></br>
    新闻日期：<input type="text" name="date"></br>
    <input type="submit" name="submit">
</form>
<!--字符串输出的结果是：--><?php //echo  $res   ?>
字符串输出的结果是：<?php echo  "$title $content $date"   ?>      <!--这么写也是可以的-->
</body>
</html>