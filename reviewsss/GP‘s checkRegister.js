$(function(){
    var $username=$('input[name="username"]');
    var $newusername;
    $username.on("blur",function(){
        $newusername=$(this).val();
        $.get("user/checknewusername",{newusername:$newusername},function(data){
            if(data=="success"){

            }else if(data=="fail"){
                $username.val("该用户名已被占用").css("color","red");
                $(".btn").attr("disabled",true);
            }
        });
        if($newusername.length>6){
            $username.val("用户名长度小于6").css("color","red");
        }else if($newusername==""){
            $username.val("用户名不能为空").css("color","red");
        }
    });
    $username.on("focus",function(){
        $username.val($newusername).css("color","black");
    });
    $('input[name="username"]').on("blur",function(){
        recheck();
    });
    $('input[name="password"]').on("blur",function(){
        recheck();
    });
    $('input[name="phone"]').on("blur",function(){
        recheck();
    });
    $('input[name="email"]').on("blur",function(){
        recheck();
    });
    $('input[name="address"]').on("blur",function(){
        recheck();
    });
    recheck();
    function recheck(){
        if($username.val()=="该用户名已被占用"||$username.val()=="用户名长度小于6"||$username.val()=="用户名不能为空"){
            console.log("55555");
            $(".btn").attr("disabled",true);
        }else{
            register();
        }
    }
    register();
    function register(){
        if($('input[name="username"]').val()!=""&&$('input[name="password"]').val()!=""&&$('input[name="phone"]').val()!=""&&$('input[name="email"]').val()!=""&&$('input[name="address"]').val()!=""){
            console.log("2222");
            $(".btn").attr("disabled",false);
        }else{
            noregister();
        }
    }
    noregister();
    function noregister(){
        if($('input[name="username"]').val()==""||$('input[name="password"]').val()==""||$('input[name="phone"]').val()==""||$('input[name="email"]').val()==""||$('input[name="address"]').val()==""){
            $(".btn").attr("disabled",true);
        }
    }
});
</script>