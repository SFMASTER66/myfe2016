/**
 * Created by 你大爷 on 2016/12/18.
 */
var usersModel=require("../models/usersModel");

exports.welcome=function(req,res){
    req.session.loginUser=null;         //退出的时候，应该要清除session。   这个非常重要啊！！！！！
    res.render("indexs",{username:req.session.loginUser});
}
exports.welcomes=function(req,res){
    var oldPassword=req.body.pwd;
    console.log(oldPassword);
    var newPassWord=req.body.newpwd;
    var renewpwd=req.body.newpwd2;
    var userId=req.session.loginUser.user_id;
    var oldestPassword=req.session.loginUser.password;
    //usersModel.queryUserPassWord(userId,function(result){
    //    var oResult=result[0];
    //    if(oldPassword==oldestPassword&&newPassWord==oResult.password&&newPassWord==renewpwd){
    //        console.log("okma")
    //        req.session.loginUser=null;         //退出的时候，应该要清除session。   这个非常重要啊！！！！！
    //        res.render("indexs",{username:req.session.loginUser});
    //    }else{
    //        res.redirect("/changePassword");
    //    }
    //})
        if(oldPassword==oldestPassword&&/[0-9a-zA-Z]{7,23}/.test(newPassWord)&&newPassWord==renewpwd){
            usersModel.updataPassWord(newPassWord,userId,function(result){
                if(result.affectedRows>0){
                    console.log("okma")
                    req.session.loginUser=null;         //退出的时候，应该要清除session。   这个非常重要啊！！！！！
                    res.render("indexs",{username:req.session.loginUser});
            }
            })
        }else{
            res.redirect("/changePassword");
        }
}


