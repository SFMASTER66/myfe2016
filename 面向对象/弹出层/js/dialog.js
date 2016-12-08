/**
 * Created by 你大爷 on 2016/12/8.
 */
//下面的[]里面的东西是省略了.js这个后缀，然后说明引用了这个js
define(["jquery"],function($){   /*为什么这里不写$却不报错？*/
    function Dialog(xingsettings){  /*这是一个自定义的构造函数，然后属于一个类。类里面自定义了对象*/
        this.defaultSettings={   /*这里是默认的属性。*/
            width:400,
            height:300,
            title:"弹出层",
            background:"red",
            close:"[X]"
        };
        $.extend(this.defaultSettings,xingsettings);   /*这个是两个东西进行融合，括号里的第二个参数添加到第一个参数里*/
        this.$container=$("<div class='container'></div>");   /*自定义属性，并且创造了新的dom*/
        this.$mask=$("<div class='mask'></div>");
        this.$box=$("<div class='box'></div>");
        this.$banner=$("<div class='banner'></div>");
        this.$item=$("<div class='item'></div>");
        this.$close=$("<div class='close'></div>");
        this.$content=$("<div class='content'></div>");
    }
    Dialog.prototype.open=function(){      /*方法写在外面，并且用原型prototype*/
        console.log(13);
        this.$container.append(this.$mask).append(this.$box);
        this.$box.append(this.$banner).append(this.$content);
        this.$banner.css({
            width:this.defaultSettings.width,
            height:this.defaultSettings.height,
            background:this.defaultSettings.background,
            lineHeight:this.defaultSettings.height+"px"
        }).append(this.$item).append(this.$close);
        this.$item.html(this.defaultSettings.title);     /*给元素里面添加内容在JQ里的方法就是html()*/
        this.$close.html(this.defaultSettings.close);
        this.$content.load(this.defaultSettings.content)   /*通过load加载文件*/
        $("body").append(this.$container);
        var that=this;    /*这里的this指的是Dialog*/
        this.$close.on("click",function(){
            console.log(that)
            that.close();
        })
    }
    Dialog.prototype.close=function(){
        this.$container.remove();//移除当前点击的container
    }
    return Dialog;     /*return是必要的.,返回了在index.js才可以用来new东西*/
})