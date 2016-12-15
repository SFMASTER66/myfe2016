var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {    //我要获取下面index这个页面，就写个get。然后第一个参数写路径，"/"这个代表根路径。
  res.render('index', {
    title: 'Express',      //这个代表属性，然后是传给index这个页面的内容，内容就是冒号后面的东西，
    title2:"lalalalala",
    uname:null
  });
});

//router.get("/login",function(req,res,next){
//  res.render("login")
//})
//router.get("/regista",function(req,res){
//  res.render("regista")
//})
//router.get("/aaa",function(req,res){
//  var name=req.query.username;
//  if(name=="lisi"){
//    res.send("fail")
//  }else{
//    res.send("success");
//  }
//})
//
//
//
//
//
//router.post("/checklogin",function(req,res,next){
//  var name=req.body.username;
//  var psd=req.body.psd;
//  if(name=="lisi"&&psd=="1234"){
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

module.exports = router;
