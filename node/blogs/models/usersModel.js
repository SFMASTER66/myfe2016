/**
 * Created by ���ү on 2016/12/16.
 */
//�������ݵ����ݿ�Ӧ��д��models�
var db=require("./db");
exports.check=function(req,res,callBack){
    //��ѯ
    callBack();
}


exports.queryByNameAndPassword=function(username,password,email,callBack){
    var sql="select * from tt_user where username=? and password=? or email=?";  //����дor�����Ǵ���Ҳ���Բ�email�����ǲ���дandemail=?����Ϊ��½��Ϣֻ�������ո񣬵��ǲ�ѯ��ʱ���������һ���ѯ���ͻᵼ�²�ѯ��������Ϊ�ա�
    db.query(sql,[username,password,email],callBack);
}

exports.saveUser=function(username,password,email,repassword,callBack){
    var sql="insert into tt_user(username,password,email,repassword) values(?,?,?,?)";
    db.query(sql,[username,password,email,repassword],callBack);
}