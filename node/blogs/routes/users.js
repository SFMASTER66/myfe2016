var users=require("../controllers/usersController");   //ģ�黯����
var express = require('express');
var router = express.Router();

/* GET users listing. */
router.get('/', function(req, res, next) {
  res.send('respond with a resource');
});

//��½
//router.get("/login",function(req,res){   //��һ������������ת���ĸ���ַ�ĺ�׺�����磺http://localhost:3000/users/login������������ת���ҳ����ַ
//  res.render("login")    //�������Ҫ��Ⱦ������ʾ���ĸ�ҳ�档
//})
//�������д�����������Ż�
router.get("/login",users.login);     //���������ġ�
//��½��֤
//router.post("/checklogin",function(req,res){  //post���ǻ�ȡ�����ֵ��ʲô��Ȼ����֤�Բ��ԡ�
//  //var name=req.body.username;     //ͨ������������Եõ�ҳ���������ʵ����������������롣
//  //var psd=req.body.psd;
//  if(name=="lisi"&&psd=="1234"){    //Ȼ��ͨ������ж����ֺ������Ƿ���ȷ����Ϊ��û�н������ݿ⣬����ֻ�������򵥵��жϡ�
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
//�������д�����������Ż�
router.post("/checklogin",users.checklogin);



//ע��
router.get("/regista",users.register);

router.get("/confirmRegist",users.confirmRegist);

router.get("/confirmPsd",users.confirmPsd);

router.get("/verifyPsd",users.verifyPsd);

router.post("/confirmRegist",users.ConfirmRegist);
module.exports = router;
