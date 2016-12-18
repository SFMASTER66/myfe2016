/**
 * Created by 你大爷 on 2016/12/16.
 */
//连接数据的数据库应该写在models里。
var db=require("./db");
exports.check=function(req,res,callBack){
    //查询
    callBack();
}


exports.queryByNameAndPassword=function(username,password,email,callBack){
    var sql="select * from tt_user where username=? and password=? or email=?";  //这里写or，就是代表也可以查email。但是不能写andemail=?，因为登陆信息只有两个空格，但是查询的时候如果三个一起查询，就会导致查询到的数组为空。
    db.query(sql,[username,password,email],callBack);
}

exports.saveUser=function(username,password,email,repassword,callBack){
    var sql="insert into tt_user(username,password,email,repassword) values(?,?,?,?)";
    db.query(sql,[username,password,email,repassword],callBack);
}