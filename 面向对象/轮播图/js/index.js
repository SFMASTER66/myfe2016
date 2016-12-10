/**
 * Created by 你大爷 on 2016/12/8.
 */
//下面function里的东西相当于参数，可以随便随便写的，但是$还是要这么写。
require(["jquery","Carousel"],function($,Carousel222){
    var img=["img/f1.JPG","img/f2.JPG","img/f3.JPG","img/f4.JPG"];  //图片可以用数组先存起来。
    //var img=["img/f1.JPG","img/f2.JPG","img/f3.JPG"];
    var shisettings1={           //这个是对象，对象里面有我自己设定的属性
        height:450,
        width:800,
        arrows:"bottom",   //center      //引号里面的东西是可以在css里用类的方式表示，然后在Carousel.js里用addClass的方式添加进去
        list:"square",      //circle
        imgs:img,
        location:"#container1",         //id就可以这样表示
        speed:2000,
        animateSpeed:130
    }
var carouel1=new Carousel222(shisettings1);
    carouel1.init();


    var shisettings2={
        height:450,
        width:800,
        arrows:"center",   //bottom
        list:"circle",     //square
        imgs:img,
        location:"#container2",
        speed:3000,
        animateSpeed:120,
        locations:"middle",
        arrowLefts:"lleft",
        arrowRight:"rright",
        locate:"locate"
    }
    var carousel2=new Carousel222(shisettings2);
    carousel2.init();
})