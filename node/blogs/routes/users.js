var express = require('express');
var router = express.Router();

/* GET users listing. */
router.get('/', function(req, res, next) {
  res.send('respond with a resource');
});


//��½
router.get("/login",function(req,res,next){   //��һ������������ת���ĸ���ַ�ĺ�׺�����磺http://localhost:3000/users/login������������ת���ҳ����ַ
  res.render("login")    //�������Ҫ��Ⱦ������ʾ���ĸ�ҳ�档
})
//��½��֤
router.post("/checklogin",function(req,res,next){  //post���ǻ�ȡ�����ֵ��ʲô��Ȼ����֤�Բ��ԡ�
  var name=req.body.username;     //ͨ������������Եõ�ҳ���������ʵ����������������롣
  var psd=req.body.psd;
  if(name=="lisi"&&psd=="1234"){    //Ȼ��ͨ������ж����ֺ������Ƿ���ȷ����Ϊ��û�н������ݿ⣬����ֻ�������򵥵��жϡ�
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



//ע��
router.get("/regista",function(req,res){
  res.render("regista")
})
var name=null;
router.get("/confirmRegist",function(req,res){
  name=req.query.username;     //ͨ������������Ի�ȡ�����Ƕ��٣�������⣬�����AJAX�Ļ�ȡ��ʽ��
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
