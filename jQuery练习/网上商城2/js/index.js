/**
 * Created by 你大爷 on 2016/11/3.
 */
var $index;
$("#sub-menu .b").hover(function(){
     $index=$(this).index();
    $("#sub-menu .ssub-menu").eq($index-1).show();
},function(){
    $index;
    $("#sub-menu .ssub-menu").eq($index-1).hide();
})
//$(".aa:eq(1)").on("mouseover",function(){
//    $(".ssub-menu").eq(0).show();
//}).on("mouseout",function(){
//    $(".ssub-menu").eq(0).hide();
//});
//$(".aa:eq(2)").on("mouseover",function(){
//    $(".ssub-menu").eq(1).show();
//}).on("mouseout",function(){
//    $(".ssub-menu").eq(1).hide();
//});
//$(".aa:eq(3)").on("mouseover",function(){
//    $(".ssub-menu").eq(2).show();
//}).on("mouseout",function(){
//    $(".ssub-menu").eq(2).hide();
//});


$("#kuanshi ul").on("click",function(){
    var $num=$(this).index();
    $(this).addClass("selected").siblings().removeClass("selected");
    $("#main-img").animate({
        left:-$("#main-img .ads-img").width()*($num)
    });
});
//换皮肤颜色
$("#skin li").on("click",function(){
    var $li=this.id;
    $('#'+$li).addClass("s-selected").siblings().removeClass("s-selected");
    $("#menu").prop('class',$li+"_color");
    $("#s-head").attr("class",$li+"_color");
});

//输入（input）
$("input").on("focus",function(){
    if(this.value==this.defaultValue){
        $(this).val("");
    }
});
$("input").on("blur",function(){
    if(this.value==""){
        this.value=this.defaultValue;
    }
});
//输入（input）




//下面是定时器弹入弹出的图片转换
$("#l-lunbotu img").each(function(index,img){
    $(img).css("z-index",$("#l-lunbotu img").size()-index);
});    //这个就是替代在html里直接写死z-index，这里就是不写死。
var iNow = 0;
$("#l-explain em").eq(0).addClass("selected").siblings().removeClass("selected");
$("#l-explain em").eq(0).addClass("c").siblings().removeClass("c");
var timer1=setInterval(function(){
    iNow++;
    if(iNow==5){
        iNow=0;
    }
    $("#l-explain em").eq(iNow).addClass("selected").siblings().removeClass("selected");
    $("#l-explain em").eq(iNow).addClass("c").siblings().removeClass("c");
    change(iNow);
},1000);
var a=5;
function change(index){  //把这个封装成一个函数，这个就是一个弹入弹出的代码
    a++;
    $("#l-lunbotu img").eq(index).css("z-index",a).css("opacity",0).animate({opacity:1},800);
}
$("#l-explain em").on("mouseover",function(){
    var $figure=$(this).index();
    change($figure);
    iNow = $figure;
    $(this).addClass("selected").siblings().removeClass("selected");
    $(this).addClass("c").siblings().removeClass("c");
});
$("#lunbotu").on("mouseover",function(){   //给整个框加一个清除定时器，就会给这个整个框下的子元素也绑定了清除定时器的事件
    clearInterval(timer1);
}).on("mouseout",function(){
    timer1=setInterval(function(){
        iNow++;
        if(iNow==5){
            iNow=0;
        }
        $("#l-explain em").eq(iNow).addClass("selected").siblings().removeClass("selected");
        $("#l-explain em").eq(iNow).addClass("c").siblings().removeClass("c");
        change(iNow);
    },1000);
});
//上面是定时器弹入弹出的图片转换

//用hover写上面的轮播图定时器代码
//var iNow=0;
//$("#l-explain em").eq(0).addClass("selected").siblings().removeClass("selected");
//$("#l-explain em").eq(0).addClass("c").siblings().removeClass("c");
//var timer1=setInterval(function(){
//    iNow++;
//    if(iNow==5){
//        iNow=0;
//    }
//    change(iNow);
//    $("#l-explain em").eq(iNow).addClass("selected").siblings().removeClass("selected");
//    $("#l-explain em").eq(iNow).addClass("c").siblings().removeClass("c");
//},800);
//function change(index){
//    a++;
//    $("#l-lunbotu img").eq(index).css("z-index",a).css("opacity",0).animate({opacity:1},800);
//}
//var a=5;
//var $index;
//$("#l-explain em").hover(function(){
//    $index=$(this).index();
//    iNow=$index;
//    change($index);
//    $(this).addClass("selected").siblings().removeClass("selected");
//    $(this).addClass("c").siblings().removeClass("c");
//});
//$("#lunbotu").hover(function(){
//    clearInterval(timer1);
//},function(){
//    timer1=setInterval(function(){
//        iNow++;
//        if(iNow==5){
//            iNow=0;
//        }
//        change(iNow);
//        $("#l-explain em").eq(iNow).addClass("selected").siblings().removeClass("selected");
//        $("#l-explain em").eq(iNow).addClass("c").siblings().removeClass("c");
//    },800);
//})
//用hover写上面的轮播图定时器代码


//有三角形的图片转换
//$("#l-explain em").on("click",function(){
//    var $q=$(this).index();
//    var $id=this.id;
//    $("#l-lunbotu img").eq($q).show().siblings().hide();
//    $(this).addClass('selected').siblings().removeClass("selected");
//    $(this).addClass("c").siblings().removeClass("c");
//});
//有三角形的图片转换

//下面是最新动态的交互
$(function(){
    var x=10;
    var y=20;
    var $in;   //全局变量
    $("#eee a").on("mouseover",function(e){
        //this.m= this.title;     //为什么这么写啊？？
        $in=this.title;
        // console.log(this.myTitle);
        this.title="";        //使得不显示原来输出的形式,改用下面的div形式输出.  使原来的title为空   问
        //var $div=$("<div id='title'>"+this.m+"</div>"); //创建div
        var $div=$("<div id='title'>"+$in+"</div>");
        $div.appendTo("body");
        $("#title").css({
            "left":(e.pageX+x)+"px",
            "top":(e.pageY+y)+"px"
        }).show("fast");
        console.log($("#title").css("left"));
    }).on("mousemove",function(e){
        $("#title").css({
            "left":(e.pageX+x)+"px",
            "top":(e.pageY+y)+"px"
        });
    }).on("mouseout",function() {
        //this.title = this.m;
        this.title =$in;
        $("#title").remove();
    });
});

