//���ҳ��ֻ��·�ɸ���ת���ġ������ҵ���߼��������ģ������ҵ���߼�������������Ҳ����controllers������
var usersController=require("../controllers/usersController");
var welcome=require("../controllers/welcome");
var express = require('express');
var router = express.Router();
/* GET home page. */
//router.get('/', function(req, res, next) {    //��Ҫ��ȡ����index���ҳ�棬��д��get��Ȼ���һ������д·����"/"��������·����
//  res.render('index', {
//    title: 'Express',      //����������ԣ�Ȼ���Ǵ���index���ҳ������ݣ����ݾ���ð�ź���Ķ�����
//    title2:"lalalalala",
//    uname:null
//  });
//});
router.get("/",welcome.welcome);
router.get("/logins",usersController.logins);
router.get("/reg",usersController.reg);
router.post("/checkLogin",usersController.checkLogin);

router.post("/save",usersController.save);



module.exports = router;
