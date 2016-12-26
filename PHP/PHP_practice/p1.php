<?php
$first="";
$second="";
$tag="";
$result="";
if(isset($_POST["calculate"])){
    $first=$_POST["first"];
    $second=$_POST["second"];
    $tag=$_POST["tag"];
    if(!preg_match('/^[0-9]+$/',$first)){
        $result="第一个空格为空";
    }
    if(!preg_match('/^[0-9]+$/',$second)){
        $result.="第二个空格为空";
    }
    if($tag=="/"&&$second==0||$tag=="%"&&$second==0){
        $result.="除数不能为零";
    }
    if($result==""){
        switch ($tag){
            case $tag=="+":
                $result=$first+$second;
                break;
            case $tag=="-":
                $result=$first-$second;
                break;
            case $tag=="*":
                $result=$first*$second;
                break;
            case $tag=="/":
                $result=$first/$second;
                break;
            case $tag=="%":
                $result=$first%$second;
                break;
        }
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
    <table>
        <tr>
            <td><input type="text" name="first"   value="<?php  echo $first?>"></td>
            <td>
                <select name="tag" id="">
                    <option value="+" <?php
                            if($tag=="+"){
                                echo "selected";
                            }
                    ?> >+</option>

                    <option value="-"   <?php
                    if($tag=="-"){
                        echo "selected";
                    }
                    ?>>-</option>

                    <option value="*"   <?php
                    if($tag=="*"){
                        echo "selected";
                    }
                    ?>>*</option>

                    <option value="/"   <?php
                    if($tag=="/"){
                        echo "selected";
                    }
                    ?>>/</option>

                    <option value="%"   <?php
                    if($tag=="%"){
                        echo "selected";
                    }
                    ?>>%</option>
                </select>
            </td>
            <td><input type="text" name="second"  value="<?php  echo $second?>"></td>
            <td><input type="submit" name="calculate" value="calculate"></td>
        </tr>
        <tr>
            <td colspan="4">the result is <?php  echo $result?></td>
        </tr>
    </table>
</form>
</body>
</html>

