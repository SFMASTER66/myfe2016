/**
 * Created by 你大爷 on 2016/12/8.
 */
//下面的function里的参数跟require里的[]是you一一对应的，都是要返回值的
//下面的[]里面的东西是省略了.js这个后缀，然后说明引用了这两个js
require(["jquery","dialog"],function($,Dialog){   /*假如这里的Dialog没有写，Dialog就是未定义的*/
    $("#btn").on("click",function(){
        //下面这个是用对象的方式给14行的代码进行传参数。
        var shisettings={  /*这个是重新设置属性*/
            //width:500,
            height:80,     /*这些是一系列的属性*/
            title:"我的弹出层",
            background:"blue"
        }
        var dialog1=new Dialog(shisettings);  /*在这里调用dialog的Dialog的方法。然后shisettings是传的实参。*/
        dialog1.open();    /*用new的对象用Dialog里面的open的方法*/


        var settings2={
            content:"form.html",
            height:80,
            title:"我的弹出层",
            background:"blue"
        }
        var dialog2=new Dialog(settings2);   /*在这里又new了一个新的对象*/
        dialog2.open();
    })
})