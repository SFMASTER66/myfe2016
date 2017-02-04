/**
 * Created by 你大爷 on 2016/12/13.
 */
var name=null;
function Hello(){
    //var name=null;
    this.setName=function(myName){
        name=myName;
    }
    this.sayHello=function(){
        console.log("Hello:"+name);
    };
};
module.exports=Hello;