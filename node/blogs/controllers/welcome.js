/**
 * Created by ���ү on 2016/12/18.
 */
exports.welcome=function(req,res){
    res.render("indexs",{username:req.session.loginUser});
}