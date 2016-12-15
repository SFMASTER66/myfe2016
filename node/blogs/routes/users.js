var express = require('express');
var router = express.Router();

/* GET users listing. */
router.get('/', function(req, res, next) {
  res.send('respond with a resource');
});


//登陆
router.get("/login",function(req,res,next){   //第一个参数是我跳转到哪个网址的后缀。例如：http://localhost:3000/users/login这个就是这个跳转后的页面网址
  res.render("login")    //这个是我要渲染或者显示的哪个页面。
})
//登陆验证
router.post("/checklogin",function(req,res,next){  //post就是获取输入的值是什么，然后验证对不对。
  var name=req.body.username;     //通过这个方法可以得到页面输入的真实的姓名和下面的密码。
  var psd=req.body.psd;
  if(name=="lisi"&&psd=="1234"){    //然后通过这个判断名字和密码是否正确。因为还没有讲到数据库，所以只是这样简单的判断。
    //res.send("success")
    res.render("index",{
      uname:name,
      title: 'Express',
      title2:"lalalalala"
    })
  }else{
    res.send("fail")
  }
})



//注册
router.get("/regista",function(req,res){
  res.render("regista")
})
var name=null;
router.get("/confirmRegist",function(req,res){
  name=req.query.username;     //通过这个方法可以获取名字是多少，个人理解，这个是AJAX的获取方式。
  if(name=="lisi"){
    res.send("fail")
  }else{
    res.send("success");
  }
})
var password=null;
router.get("/confirmPsd",function(req,res){
  password=req.query.psd;
  if(/[0-9a-zA-Z]{7,23}/.test(password)){
    res.send("success")
  }else{
    res.send("false");
  }
})
var vPsd=null;
router.get("/verifyPsd",function(req,res){
  vPsd=req.query.verifyPsd;
  if(vPsd==password&&vPsd!=""){
    res.send("success");
  }else{
    res.send("false");
  }
})
router.post("/confirmRegist",function(req,res){
  var n_name=req.body.username;
  var p_psd=req.body.psd;
  var v_psd=req.body.pwd;
  if(n_name==name&&p_psd==password&&v_psd==vPsd&&password==vPsd&&name!=""&&password!=""){
    res.send("success");
  }else{
    res.send("false");
  }
})
module.exports = router;
