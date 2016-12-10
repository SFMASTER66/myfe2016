/**
 * Created by 你大爷 on 2016/12/9.
 */
define(["jquery"],function($){
    //下面这个相当于工厂，就是我要轮播图的时候，就初始化，就可以造一个轮播图。new一个新的对象就好像工厂的生产一个东西
    function Carousel(xingsettings){     //在这里写类，是构造函数来的
        this.defaultSettings={          //在这里写默认的属性，然后通过下面的$.extend来整合默认的和传过来的属性
            height:500,
            width:900,
            arrows:"center",   //button
            list:"square",     //circle
            imgs:[],
            arrowLeft:"&lt;",
            arrowTop:"&gt;"
        }
        $.extend(this.defaultSettings,xingsettings);
        //记住，在构造函数里创建好元素。图片通过下面的for循环动态的处理
        this.$container=$("<div class='container'></div>");
        this.$list=$("<div class='list'></div>");
        this.$img=$("<div class='img'></div>");
        this.$change=$("<div class='change'></div>");
        this.$left=$("<span class='left'></span>");
        this.$right=$("<span class='right'></span>");
    }

    Carousel.prototype.init=function(){
        for(var i=0;i<this.defaultSettings.imgs.length;i++){
            //this.$list.append($("<span>"+(i+1)+"</span>"));
            this.$list.append($("<span>"+(this.defaultSettings.list=="circle"?"":(i+1))+"</span>"));
            this.$img.append($("<img src='"+this.defaultSettings.imgs[i]+"'/>"));
        }
        this.$container.append(this.$list).append(this.$img).append(this.$change);
        this.$change.append(this.$left).append(this.$right);
        this.$left.html(this.defaultSettings.arrowLeft);
        this.$right.html(this.defaultSettings.arrowTop);
        $(this.defaultSettings.location).css({
            width:this.defaultSettings.width,
            height:this.defaultSettings.height
        }).append(this.$container);
        $("span",this.$list).eq(0).addClass("span-color").siblings().removeClass("span-color");
        $("span",this.$list).addClass(this.defaultSettings.list);
        $("span",this.$change).addClass(this.defaultSettings.list);
        $("span",this.$change).eq(0).addClass(this.defaultSettings.arrowLefts);
        $("span",this.$change).eq(1).addClass(this.defaultSettings.arrowRight);
        this.$change.addClass(this.defaultSettings.locate)
        this.$list.addClass(this.defaultSettings.locations);
        var index=0;
        var that=this;   //通过这个方法，使得this的指针就是指Carousel，并且赋值给that，方便后面的使用
        this.$right.on("click",function(){
            index++;
            if(index>that.defaultSettings.imgs.length-1){
                that.$img.css({
                    left:"0"
                })
                index=0;
                //下面这个用法就是已经存在的$list里面，寻找$list里面的span
                $("span",that.$list).eq(index).addClass("span-color").siblings().removeClass("span-color");
            }else{
                that.$img.stop(false).animate({
                    left:"-=800"
                },that.defaultSettings.animateSpeed);
                $("span",that.$list).eq(index).addClass("span-color").siblings().removeClass("span-color");
            }
        })
        this.$left.on("click",function(){
            index--;
            if(index<0){
                index=that.defaultSettings.imgs.length-1;
                that.$img.css({
                    left:-(that.defaultSettings.imgs.length-1)*800
                })
                $("span",that.$list).eq(index).addClass("span-color").siblings().removeClass("span-color");
            }else{
                that.$img.stop(false).animate({
                    left:"+=800"
                },that.defaultSettings.animateSpeed);
                $("span",that.$list).eq(index).addClass("span-color").siblings().removeClass("span-color");
            }
            console.log("aaa")
        })
        $("span",this.$list).hover(function(){
            index=$(this).index();  //为了当划入这个1234的小图表的到时候，使得当前的小图标的索引等于这个当前整个的索引，这样离开小图标的时候，定时器走的时候也是正常的。
            console.log(this);
            clearInterval(that.timer);
            $("span",that.$list).eq($(this).index()).addClass("span-color").siblings().removeClass("span-color");
            that.$img.css({
                left:-$(this).index()*800
            })
        },function(){
            play();
        })
        this.$right.hover(function(){
            clearInterval(that.timer);
        },function(){
            play();
        })
        this.$left.hover(function(){
            clearInterval(that.timer);
        },function(){
            play();
        })
        //写这个this就是为了让每一个初始化的轮播图有一个自己的定时器，以前写的是var timer，相当于初始化的轮播图都共用一个定时器
       //并且这个定时器多次用到，所以封装成一个函数，
        function play(){
            that.timer=setInterval(function(){
                that.$right.trigger("click");
            },that.defaultSettings.speed)
        }
        //一进来就调用这个函数，是轮播图动起来
        play();
    }
    return Carousel;
})




