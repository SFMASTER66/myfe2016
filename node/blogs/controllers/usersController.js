/**
 * Created by 你大爷 on 2016/12/16.
 */
var usersModel=require("../models/usersModel");
exports.login=function(req,res){
    res.render("login");
}
exports.register=function(req,res){
    res.render("regista");
}
exports.checklogin=function(req,res){
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
}

var name=null;
exports.confirmRegist=function(req,res){
    name=req.query.username;     //通过这个方法可以获取名字是多少，个人理解，这个是get的获取方式。
    if(name=="lisi"){
        res.send("fail")
    }else{
        res.send("success");
    }
}
var password=null;
exports.confirmPsd=function(req,res){
    password=req.query.psd;
    if(/[0-9a-zA-Z]{7,23}/.test(password)){
        res.send("success")
    }else{
        res.send("false");
    }
}
var vPsd=null;
exports.verifyPsd=function(req,res){
    vPsd=req.query.verifyPsd;
    if(vPsd==password&&vPsd!=""){
        res.send("success");
    }else{
        res.send("false");
    }
}
exports.ConfirmRegist=function(req,res){
    var n_name=req.body.username;
    var p_psd=req.body.psd;
    var v_psd=req.body.pwd;
    if(n_name==name&&p_psd==password&&v_psd==vPsd&&password==vPsd&&name!=""&&password!=""){
        res.send("success");
    }else{
        res.send("false");
    }
}




exports.logins=function(req,res){
    res.render("logins");
}
exports.reg=function(req,res){
    res.render("reg");
}
exports.checkLogin=function(req,res){
    //1.post第一步就是接受数据，然后按照下面的步骤写
    var username=req.body.uname;             //post就是body，get就是query。
    var password=req.body.pwd;
    //2.数据验证
    //3.连接数据库
    usersModel.queryByNameAndPassword(username,password,username,function(results){
        if(results.length>0){
            //res.render("indexs");
            var user=results[0];
            console.log(user);
            req.session.loginUser=user;     //用results[0]获取到的值赋值给session。在session里面存起来。
            //redirect只有一个参数
            res.redirect("/");     //这里这么写redirect就是为了登陆成功之后，可以再次跳转到原来的根路径界面，但是要是
            //写上面的render方法，就会走checkLogin的路径的验证方法。但是要是写redirect，
            // 就会重新走router.get("/",welcome.welcome)这个的方法，然后调用exports.welcome=function(req,res){
            // res.render("indexs");    //render有两个参数。
            //}这个方法。
        }else{
            //res.render("logins")   //这个写的页面的名字。
            res.redirect("/logins");      //这个写的是路径。
        }
    })

}
exports.save=function(req,res){
    var email=req.body.email;
    var name=req.body.name;
    var password=req.body.pwd;
    var repassword=req.body.pwd2;
    usersModel.saveUser(name,password,email,repassword,function(results){
        if(results.affectedRows>0){     //添加数据的时候就要用这个判断。
            //console.log(results[0]);
            if(repassword!=password){
                res.redirect("/reg");
            }else{
                res.redirect("/");
            }
        }else{
            res.redirect("/reg");
        }
    })
}
