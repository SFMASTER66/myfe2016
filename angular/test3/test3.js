/**
 * Created by 你大爷 on 2017/1/9.
 */

//var myApp=angular.module("myApp",[],function(){      //第二个参数是我们依赖注入的模块。 把第三个参数理解为model下的构造函数。
//    console.log("lallalaalla");          //这个是直接被执行的。
//})


var myApp=angular.module("myApp",[],function($provide){      //第二个参数是我们依赖注入的模块。 把第三个参数理解为model下的构造函数。
//provider/factory/service        都在$provier下的  都是提供额外的服务的  向外提供数据的   也就是说自己相当于一个公共的数据，然后通过这三个方法向外提供自己有的数据。
//   $provide.provider("CustomService",function(){
//       this.$get=function(){
//           return {
//               message:"lololololo"
//           }
//       }
//   })
    //总结：provider和factory什么数据都可以返回。  但是通过provider和factory提供的数据，在注入到不同的控制器的时候，改变数据的时候，只会影响自己的数据，不会影响别人的数据
    //$provide.factory("CustomService",function(){
    //    return ["222",'erere',"efrr"];
    //    //return "kkkkkk";            //这个也是可以的
    //})

    //总结：service可以返回数组和对象，但是不能返回字符串。
    $provide.service("CustomService",function(){
         //return [1,3,32,2];
         return {1:2};
    })
})


myApp.controller("firstController",function($scope,CustomService){
    //$scope.name=CustomService.message;
    var str="";
    angular.forEach(CustomService,function(value,key){
        str+=value;
    })
    $scope.values=str;
    //$scope.values=CustomService;
    console.log(CustomService);
})
