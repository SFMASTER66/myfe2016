/**
 * Created by ���ү on 2016/11/8.
 */
/**
 * Created by 你大爷 on 2016/11/5.
 */
var $e=0;
$("#sub-menu .s").hover(function(){
     $e=$(this).index();    //这里取得$e的索引从一开始，s虽然是从第一个开始，可是s所在的li是整个li的第二个，所以索引从1开始。
    console.log($e);
    $(".c-catalogue").eq($e-1).show();
},function(){
    $(".c-catalogue").eq($e-1).hide();
});
//$("#sub-menu .s:eq(0)").on("mouseover",function(){
//    $(".c-catalogue:eq(0)").show();
//}).on("mouseout",function(){
//    $(".c-catalogue:eq(0)").hide();
//});
//
//$("#sub-menu .s:eq(1)").on("mouseover",function(){
//    $(".c-catalogue:eq(1)").show();
//}).on("mouseout",function(){
//    $(".c-catalogue:eq(1)").hide();
//});
//$("#sub-menu .s:eq(2)").on("mouseover",function(){
//    $(".c-catalogue:eq(2)").show();
//}).on("mouseout",function(){
//    $(".c-catalogue:eq(2)").hide();
//});

$("#prop li").on("click",function(){
    var $index=$(this).index();
    $(this).addClass("prop-color").siblings().removeClass("prop-color");
    $("#introduction p").eq($index).show().siblings().hide();
    $("#introduction").css("width","$('#introduction p').eq($index).height()")
});
$starIndex = 0;
//$("#star a").on("mouseover",function(){
//    $("#star a").removeClass();
//    $("#star a:lt("+$(this).index()+")").addClass("num-star");
//}).on("mouseout",function(){
//    $("#star a").removeClass("green-star").removeClass("num-star");
//    $("#star a:lt("+$starIndex+")").addClass("green-star");
//});
$("#star a").hover(function(){   //也可以用hover写  跟上面的mouseover和mouseout一样效果
        $("#star a").removeClass();    //这个这么写就相当于下面的每一个去除class
        $("#star a:lt(" + $(this).index()+ ")").addClass("num-star");  //这里a的index从一开始，因为在html里面，a的前面有span，span的索引从一开始。
    }
,function(){
        $("#star a").removeClass("green-star").removeClass("num-star");
        $("#star a:lt(" + $starIndex + ")").addClass("green-star");
    }
);
$("#star a").on("click",function(){
    var $title=this.title;
    $("#star a").removeClass("green-star").removeClass("num-star");
    $("#star a:lt("+$(this).index()+")").addClass("green-star");
    $starIndex = $(this).index();  //记住这次选择了几个星星。  然后上面可以调用。
    alert("你给了"+$title);
});
//改变价格
var $text=$("#all-num strong").text();  //这个不应该写在下面函数的里面，如果写在里面就会反复获取改变后的数字
$("#figure").on("change",function(){
    var $fig=$(this).val();
    var $price=$fig*$text;
    $("#all-num strong").text($price);
});

//尺寸的改变
$("#size li").on("click",function(){
    $(this).addClass("ccc").siblings().removeClass("ccc");
    $("#size strong").text($(this).text());
});

//图片的改变第一种方法
$("#s-small-pic li").on("click",function(){
    var $index=$(this).index();
    var $title=this.title;
    $(this).addClass("vvv").siblings().removeClass("vvv");
    $("#color strong").text($title);
});
var $changeindex=0;   /*找到每个分别封装一样颜色的整个框。*/
var $imgId= 0;          /*找到上面注释整个框下的具体哪一个图*/
$("#color li").on("click",function(){
    $imgId=0;   //为了解决下面放大镜点击的时候，换颜色的时候，一进入新的颜色， 使得放大镜的时候第一个就是显示第一个 而不是前面其他颜色遗留下来的小图的索引
    $changeindex=$(this).index();
    //$("#img .i-img").eq($changeindex).show().siblings().hide().end().find("img").eq($imgId).show();  //下面这个方法和这个一样。
    $("#img .i-img").eq($changeindex).show().find("img").eq($imgId).show().siblings().hide().end().parent().siblings().hide();
    $("#ss-small-pic .small-pic").eq($changeindex).show().siblings().hide();
    $("#search-big div").eq($changeindex).show().siblings().hide().end().find("a").eq($imgId).show().siblings().hide();  //这个是为了切换小图的时候，每一次都是每个颜色的第一个图，点击放大的时候也是第一个图的放大
});
var $id;
$("#ss-small-pic a").on("click",function(){
    $imgId=$(this).index();
    $id=this.id;
    //$changeindex的值从上面传下来了。
    $("#img .i-img").eq($changeindex).find("img").eq($imgId).show().siblings().hide();
    $("#search-big div").eq($changeindex).show().siblings().hide().end().find("a").eq($imgId).show().siblings().hide();   //这个是为了点击下面三个图的时候，根据不同的图片来放大所需要的图片。
});
//图片的改变第一种

//图片的改变第二种
//$("#s-small-pic li").on("click",function(){
//    var $index=$(this).index();
//    var $title=this.title;
//    $(this).addClass("vvv").siblings().removeClass("vvv");
//    $("#color strong").text($title);
//});
//var $changeindex=0;
//$("#color li").on("click",function(){
//    var $ii=this.id
//    $changeindex=$(this).index();
//    $("#img .i-img").eq($changeindex).show().siblings().hide();
//    $("#ss-small-pic .small-pic").eq($changeindex).show().siblings().hide();
//    $("#img img").attr("src","images/cloth/"+$ii+"_one_small.jpg");
//    $("#img img").attr("src","images/cloth/"+$ii+"_one_small.jpg");
//    $("#img img").attr("src","images/cloth/"+$ii+"_one_small.jpg");
//});
//$("#ss-small-pic a").on("click",function(){
//    var $id=this.id;
//    var $index=$(this).index();
//    $("#img img").attr("src","images/cloth/"+$id+"_small.jpg");
//});
//图片的改变第二种


$("#skin li").on("click",function(){
    var $id=this.id;
    $("#"+$id).addClass("change").siblings().removeClass("change");
    $("#menu").prop("class",$id+"_color");
    $("#all").attr("class",$id+"_color");
});

$("#header input").on("focus",function(){
    if($(this).val()==this.defaultValue){
        $(this).val("");
    }
}).on("blur",function(){
    if($(this).val()==""){
        //this.value=this.defaultValue;
        $(this).val(this.defaultValue)
    }
});

$("#cart a").on("click",function(){
    var $h=$("#detail-content h4").text();
    var $size=$("#price").find("strong").text();
    var $color=$("#color").find("strong").text();
    var $num=$("#num").find("#figure").val();
    var $all=$("#all-num").find("strong").text();
    alert("您购买的商品是："+$h+"价格是:"+$size+"颜色是:"+$color+"数量是:"+$num+"总价是:"+$all);
});

//放大镜
$("#img").on("mouseover",function(){
    $("#drag").show();
    $("#enlarge div").eq($changeindex).find("img").eq($imgId).show().siblings().hide();
});
$("#img").on("mousemove",function(e){
    var $l=$("#img").offset().left;
    var $t=$('#img').offset().top;
    var $left= e.clientX+$(document).scrollLeft()-$l-$("#drag").width()/2;  //用client就要加上$(document).scrollLeft()
    var $top=e.clientY+$(document).scrollTop()-$t-$("#drag").height()/2;     //client会随着滚动条的改变而改变
    //var $left= e.pageX-$l-$("#drag").width()/2;            //用page就不用加上$(document).scrollLeft()
    //var $top=e.pageY-$t-$("#drag").height()/2;            //page不随着滚动条的改变而改变。
    if($left<0){
        $left=0;
    }
    if($left>$("#img").width()-$("#drag").width()){
        $left=$("#img").width()-$("#drag").width();
    }
    if($top<0){
        $top=0;
    }
    if($top>$("#img").height()-$("#drag").height()){
        $top=$("#img").height()-$("#drag").height();
    }
    $("#drag").css("left",$left);
    $("#drag").css("top",$top);

    var $scrollLeft=$left/($("#img").width()-$("#drag").width());
    var $scrollTop=$top/($("#img").height()-$("#drag").height());

    var $ll=-(800-$("#enlarge").width())*$scrollLeft;   /*我写了大图是隐藏的，所以不能通过$("#enlarge img").width()来获取他的宽度*/
    var $tt=-(800-$("#enlarge").height())*$scrollTop;
    $("#enlarge div").eq($changeindex).find("img").eq($imgId).css("left",$ll);
    $("#enlarge div").eq($changeindex).find("img").eq($imgId).css("top",$tt);
});
$("#img").on("mouseout",function(){
    $("#drag").hide();
    $("#enlarge div").eq($changeindex).find("img").eq($imgId).hide();
});

//$("#search-big").on("click",function(){
//    $("#search-big a").css("href","images/cloth/"+$id+"_big.jpg");
//    console.log($("#search-big a").css("href"));
//})










