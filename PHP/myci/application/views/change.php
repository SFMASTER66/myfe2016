<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url()?>">  <!--必须每个页面都要写！！！-->
</head>
<body>
<h1>用户修改</h1>
<form action="User/update" method="post">
    用户名: <input type="text" name="username" value="<?php echo $user->username?>"><span id="tips"></span><br>
    密码: <input type="password" name="password" value="<?php echo $user->password?>"><br>
    <input type="hidden" value="<?php echo $user->user_id?>" name="userid">
    <input type="submit" value="提交" name="submit">
</form>
<script src="javascript/jquery-1.12.4.js"></script>
<script>
    $("input[name=username]").on("blur",function(){
//        $("span").remove();
//        var that=this;
        var $username=this.value;
        $.get("user/checkUsername",{username:$username},function(data){
            if(data=="success"){
//                $("<span>用户名可用</span>").insertAfter(that);
                $("#tips").text("用户名可用");
                $("input[name=submit]").removeAttr("disabled");
            }else if(data=="fail"){
//                $("<span>用户名已存在</span>").insertAfter(that);
                $("#tips").text("用户名已存在");
                $("input[name=submit]").attr("disabled",true);
            }
        })
    })
</script>
</body>
</html>