var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {    //��Ҫ��ȡ����index���ҳ�棬��д��get��Ȼ���һ������д·����"/"��������·����
  res.render('index', {
    title: 'Express',      //����������ԣ�Ȼ���Ǵ���index���ҳ������ݣ����ݾ���ð�ź���Ķ�����
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
