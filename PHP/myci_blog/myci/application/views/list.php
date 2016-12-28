<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo site_url()?>">
    <title>Document</title>
</head>
<body>
<h1>欢迎用户：<?php  echo $this->session->userdata('userinfo')->username;
    ?></h1>
<table border="1">
    <tr>
        <td>编号</td>
        <td>姓名</td>
        <td>密码</td>
    </tr>

    <?php
//    var_dump($list);     //$list是一个数组
    foreach($list as $user){
        echo "<tr>";
        echo "<td>".$user->user_id."</td>";    //这个“->”相当于js里的对象点属性。
        echo "<td>".$user->username."</td>";
        echo "<td>".$user->password."</td>";
        echo "<td><a href='user/delete?userid=$user->user_id'>删除</a></td>";   //delete也是user控制器下的一个方法
        echo "<td><a href='user/change?userid=$user->user_id'>修改</a></td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>