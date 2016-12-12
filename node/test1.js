/**
 * Created by 你大爷 on 2016/12/12.
 */
//var yy=require("./test2");
//yy.xx();


//var bb=require("./test2");
//var array=[1,3,54,2,335,678,55,3];
//bb.aa(array);w

var http=require("http");
http.createServer(function(req,res){
    res.writeHead(200,{'Content-Type':'text/plain'});
    //res.writeHead("i love you");
    res.end('Hello World.i really love you\n');
}).listen(3000);
console.log("the server is running at the port 23232000");
