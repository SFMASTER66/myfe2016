/**
 * Created by 你大爷 on 2017/2/28.
 */
$("#comment-submit-btn").on("click",function(){
    var $comment=$("#comments-content").val();
    var $userid=$(".getuserid").val();
    var $nowtime=$(".nowtime").val();

    var $name=$("#name").val();
    var $imgaddress=$("#imgaddress").val();
    var $desc=$("#desc").val();
    var $price=$("#price").val();
    console.log($comment);
    console.log($userid);
    console.log($nowtime);
    console.log($name);
    console.log($imgaddress);
    console.log($desc);
    console.log($price);
    $.get("comment/sendcomment",{comment:$comment,userid:$userid,nowtime:$nowtime},function(data){
        if(data=="success"){
            if(confirm("提交成功")){
//                            window.location.href='product/mingxingyoukuang?name='.$name.'&imgaddress='.$imgaddress.'&desc='.$desc.'&user_id='.$userid.'';
//                            window.location.href='product/mingxingyoukuang';
            }
        }else if(data=="fail"){

        }
    })
});