/**
 * Created by ���ү on 2016/12/16.
 */
var usersModel=require("../models/usersModel");
exports.login=function(req,res){
    res.render("login");
}
exports.register=function(req,res){
    res.render("regista");
}
exports.checklogin=function(req,res){
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
}

var name=null;
exports.confirmRegist=function(req,res){
    name=req.query.username;     //ͨ������������Ի�ȡ�����Ƕ��٣�������⣬�����get�Ļ�ȡ��ʽ��
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
    //1.post��һ�����ǽ������ݣ�Ȼ��������Ĳ���д
    var username=req.body.uname;             //post����body��get����query��
    var password=req.body.pwd;
    //2.������֤
    //3.�������ݿ�
    usersModel.queryByNameAndPassword(username,password,username,function(results){
        if(results.length>0){
            //res.render("indexs");
            var user=results[0];
            console.log(user);
            req.session.loginUser=user;     //��results[0]��ȡ����ֵ��ֵ��session����session�����������
            //redirectֻ��һ������
            res.redirect("/");     //������ôдredirect����Ϊ�˵�½�ɹ�֮�󣬿����ٴ���ת��ԭ���ĸ�·�����棬����Ҫ��
            //д�����render�������ͻ���checkLogin��·������֤����������Ҫ��дredirect��
            // �ͻ�������router.get("/",welcome.welcome)����ķ�����Ȼ�����exports.welcome=function(req,res){
            // res.render("indexs");    //render������������
            //}���������
        }else{
            //res.render("logins")   //���д��ҳ������֡�
            res.redirect("/logins");      //���д����·����
        }
    })

}
exports.save=function(req,res){
    var email=req.body.email;
    var name=req.body.name;
    var password=req.body.pwd;
    var repassword=req.body.pwd2;
    usersModel.saveUser(name,password,email,repassword,function(results){
        if(results.affectedRows>0){     //������ݵ�ʱ���Ҫ������жϡ�
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
