/**
 * Created by ���ү on 2016/11/3.
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
//��Ƥ����ɫ
$("#skin li").on("click",function(){
    var $li=this.id;
    $('#'+$li).addClass("s-selected").siblings().removeClass("s-selected");
    $("#menu").prop('class',$li+"_color");
    $("#s-head").attr("class",$li+"_color");
});

//���루input��
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
//���루input��




//�����Ƕ�ʱ�����뵯����ͼƬת��
$("#l-lunbotu img").each(function(index,img){
    $(img).css("z-index",$("#l-lunbotu img").size()-index);
});    //������������html��ֱ��д��z-index��������ǲ�д����
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
function change(index){  //�������װ��һ���������������һ�����뵯���Ĵ���
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
$("#lunbotu").on("mouseover",function(){   //���������һ�������ʱ�����ͻ������������µ���Ԫ��Ҳ���������ʱ�����¼�
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
//�����Ƕ�ʱ�����뵯����ͼƬת��

//��hoverд������ֲ�ͼ��ʱ������
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
//��hoverд������ֲ�ͼ��ʱ������


//�������ε�ͼƬת��
//$("#l-explain em").on("click",function(){
//    var $q=$(this).index();
//    var $id=this.id;
//    $("#l-lunbotu img").eq($q).show().siblings().hide();
//    $(this).addClass('selected').siblings().removeClass("selected");
//    $(this).addClass("c").siblings().removeClass("c");
//});
//�������ε�ͼƬת��

//���������¶�̬�Ľ���
$(function(){
    var x=10;
    var y=20;
    var $in;   //ȫ�ֱ���
    $("#eee a").on("mouseover",function(e){
        //this.m= this.title;     //Ϊʲô��ôд������
        $in=this.title;
        // console.log(this.myTitle);
        this.title="";        //ʹ�ò���ʾԭ���������ʽ,���������div��ʽ���.  ʹԭ����titleΪ��   ��
        //var $div=$("<div id='title'>"+this.m+"</div>"); //����div
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

