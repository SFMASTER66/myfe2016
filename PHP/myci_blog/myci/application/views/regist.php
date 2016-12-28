<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url()?>">
</head>
<body>
    <h1>用户注册</h1>
<form action="User/regist" method="post">
    用户名: <input type="text" name="username"><br>
    密码: <input type="password" name="password"><br>
    <input type="submit" value="注册" name="register">
</form>
    <script src="javascript/jquery-1.12.4.js"></script>
    <script>
        $("input[name=username]").on("blur",function(){
            $("span").remove();
            var that=this;
            var $username=this.value;
            $.get("user/checkUsername",{username:$username},function(data){
                if(data=="success"){
                    $("<span>用户名可用</span>").insertAfter(that);
                    $("input[name=register]").removeAttr("disabled");
                }else if(data=="fail"){
                    $("<span>用户名已存在</span>").insertAfter(that);
                    $("input[name=register]").attr("disabled",true);
                }
            })
        })
    </script>
</body>
</html>