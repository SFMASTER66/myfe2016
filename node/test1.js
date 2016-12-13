/**
 * Created by 你大爷 on 2016/12/12.
 */
//var yy=require("./test2");
//yy.xx();


//var bb=require("./test2");
//var array=[1,3,54,2,335,678,55,3];
//bb.aa(array);w

//var http=require("http");     //这个HTTP是node自带就有的
//http.createServer(function(req,res){
//    res.writeHead(200,{'Content-Type':'text/plain'});
//    res.write("i love you\n");
//    res.end('Hello World.i really love you\n');
//}).listen(3000);
//console.log("the server is running at the port 23232000");

//var ss=require("fs");   //这个fs有点像关键字，换成别的好像还不好使，算是node自带的吧
//ss.readFile("text","utf-8",function(err,data){
//    if(err){
//        console.error(err);    //什么时候会输出err这个错误啊？？
//    }
//    else{
//        console.log(data);
//    }
//})
//console.log('end.');

var aa=require("events").EventEmitter;   //cvents也算是node自带的
var bb=new aa();
bb.on("cc",function(){    //bb注册了cc这个监听器，然后通过下面的定时器通过bb发送这个事件监听器，此时就会调用cc这个监听器后面的回调函数了
    console.log("1111");
})

var timer=setTimeout(function(){
    bb.emit("cc");
},1000)







