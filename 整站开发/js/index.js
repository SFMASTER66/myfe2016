/**
 * Created by Äã´óÒ¯ on 2016/11/2.
 */
var index=0;
$("#you").on("click",function(){
    index++;
    if(index>3){
        index=0;
    }
    $("#lunbotu img").eq(index).show().siblings().hide();
});
$("#zuo").on("click",function(){
    index--;
    if(index==-1){
        index=3;
    }
    $("#lunbotu img").eq(index).show().siblings().hide();
});
//claerInterval(timer2);
 var timer1=setInterval(function(){
     $("#you").trigger("click");
 },1000);
//var timer2
$("#lunbotu img").on("mouseover",function(){
    console.log(timer1);
    clearInterval(timer1);
}).on("mouseout",function(){
    //clearInterval(timer1);
    timer1=setInterval(function(){
        $("#you").trigger("click");
    },1000);
});