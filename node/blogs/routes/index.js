//这个页面只是路由负责转发的。具体的业务逻辑它不关心，具体的业务逻辑交给控制器（也就是controllers）负责。
var usersController=require("../controllers/usersController");
var welcome=require("../controllers/welcome");
var express = require('express');
var router = express.Router();
/* GET home page. */
//router.get('/', function(req, res, next) {    //我要获取下面index这个页面，就写个get。然后第一个参数写路径，"/"这个代表根路径。
//  res.render('index', {
//    title: 'Express',      //这个代表属性，然后是传给index这个页面的内容，内容就是冒号后面的东西，
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
