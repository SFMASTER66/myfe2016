/**
 * Created by 你大爷 on 2017/2/27.
 */
$(".wodedingzhi").on("click",function(){
    $("#page-list").remove();
    $("#category-list").css("display","none");
    $(".a").css("display","block");
    $(".xiajia").css("display","none");
    var $proList = $(".a");
    $("#product-list-area").append('<ul id="page-list"></ul>');
    var $pageList = $("#page-list");
    for (var i=0;i<Math.ceil($proList.length/9);i++){
        $("#product-list-area").append('<div class="page"></div>');
        $pageList.append('<li>'+(i+1)+'</li>');
    }
    $("li",$pageList).eq(0).addClass("color");
    var $page=$('.page');
    $page.append('<span class="xiaoyu">&lt</span>');
    $page.append('<span class="dayu">&gt</span>');
//        console.log($page.length);
    for(var i=0;i<$page.length;i++){
        $page.eq(i).append($proList.eq(9*i+0));
        $page.eq(i).append($proList.eq(9*i+1));
        $page.eq(i).append($proList.eq(9*i+2));
        $page.eq(i).append($proList.eq(9*i+3));
        $page.eq(i).append($proList.eq(9*i+4));
        $page.eq(i).append($proList.eq(9*i+5));
        $page.eq(i).append($proList.eq(9*i+6));
        $page.eq(i).append($proList.eq(9*i+7));
        $page.eq(i).append($proList.eq(9*i+8));
    }
    $page.css({'display':'none'});
    $page.eq(0).css({'display':'block'});
    $pageListLi = $("li",$pageList);
    var $index;
    $pageListLi.on('click',function(){
        console.log($index);
        $index=$(this).index();
        $page.eq($index).show().siblings().hide();
        $pageList.show();
        $(this).addClass("color").siblings().removeClass("color");
    });

    $(".dayu").on("click",function(){
//            var b=1;
//            $index=$index+b+1;
        $index++;
        console.log($index);
        if($index>$page.length){
            $page.eq($page.length-1).show().siblings().hide();
            $pageList.show();
        }else{
            $page.eq($index).show().siblings().hide();
            $pageList.show();
        }

    });
});