/**
 * Created by 你大爷 on 2016/12/14.
 */
require(["./prop"],function(Leaf){
    var oContainer=document.getElementById("container");
        for(var i=0;i<8;i++){
            var leaf=new Leaf({
                width:50+Math.random()*51,
                left:Math.random()*((document.documentElement.clientWidth)-(50+Math.random()*51)),
                container:oContainer
            })
            console.log(leaf.width);
            console.log(leaf.left)
            leaf.fall();
    }


})