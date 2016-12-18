/**
 * Created by 你大爷 on 2016/12/18.
 */
var mysql=require('mysql');        //这些是数据库的配置，在开头写就写一遍就好了  只有node_modules下的路径可以直接写，别的都要../这种东西
var pool=mysql.createPool({
    connectionLimit:10,
    host:"localhost",       //这里要用连接池，这样做就可以在使用了一次之后，再次刷新还可以继续使用。
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
    ////下面是个回调函数，因为node.js是个单线程，为了避免等待耗时太长，所以用了回调函数，使得查询数据的同时，可以继续执行，然后查询结束了，可以回来继续执行回调函数里的代码。
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
