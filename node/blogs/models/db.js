/**
 * Created by ���ү on 2016/12/18.
 */
var mysql=require('mysql');        //��Щ�����ݿ�����ã��ڿ�ͷд��дһ��ͺ���  ֻ��node_modules�µ�·������ֱ��д����Ķ�Ҫ../���ֶ���
var pool=mysql.createPool({
    connectionLimit:10,
    host:"localhost",       //����Ҫ�����ӳأ��������Ϳ�����ʹ����һ��֮���ٴ�ˢ�»����Լ���ʹ�á�
    user:"root",
    password:"",
    database:"myblog"
});
//var connection=mysql.createConnection({
//    host:"localhost",
//    user:"root",
//    password:"",
//    database:"myblog"
//});
exports.query=function(sql,array,callBack){
    //connection.connect();
    ////�����Ǹ��ص���������Ϊnode.js�Ǹ����̣߳�Ϊ�˱���ȴ���ʱ̫�����������˻ص�������ʹ�ò�ѯ���ݵ�ͬʱ�����Լ���ִ�У�Ȼ���ѯ�����ˣ����Ի�������ִ�лص�������Ĵ��롣
    //connection.query(sql,function(err,rows){
    //    if(err) throw err;
    //    callBack(rows);
    //    connection.end();
    //})
    pool.getConnection(function(err, connection) {
        connection.query( sql,array,function(err, rows) {
            if(err){
                throw err;
            }
            console.log(rows);
            callBack(rows);
            connection.release();
        });
    })
}
