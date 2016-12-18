var users=require("../controllers/usersController");   //模块化加载
var express = require('express');
var router = express.Router();

/* GET users listing. */
router.get('/', function(req, res, next) {
  res.send('respond with a resource');
});

//登陆
//router.get("/login",function(req,res){   //第一个参数是我跳转到哪个网址的后缀。例如：http://localhost:3000/users/login这个就是这个跳转后的页面网址
//  res.render("login")    //这个是我要渲染或者显示的哪个页面。
//})
//下面这行代码是上面的优化
router.get("/login",users.login);     //替代了上面的。
//登陆验证
//router.post("/checklogin",function(req,res){  //post就是获取输入的值是什么，然后验证对不对。
//  //var name=req.body.username;     //通过这个方法可以得到页面输入的真实的姓名和下面的密码。
//  //var psd=req.body.psd;
//  if(name=="lisi"&&psd=="1234"){    //然后通过这个判断名字和密码是否正确。因为还没有讲到数据库，所以只是这样简单的判断。
//    //res.send("success")
//    res.render("index",{
//      uname:name,
//      title: 'Express',
//      title2:"lalalalala"
//    })
//  }else{
//    res.send("fail")
//  }
//})
//下面这行代码是上面的优化
router.post("/checklogin",users.checklogin);



//注册
router.get("/regista",users.register);

router.get("/confirmRegist",users.confirmRegist);

router.get("/confirmPsd",users.confirmPsd);

router.get("/verifyPsd",users.verifyPsd);

router.post("/confirmRegist",users.ConfirmRegist);
module.exports = router;
