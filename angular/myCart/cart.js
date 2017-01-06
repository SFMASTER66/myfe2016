/**
 * Created by 你大爷 on 2017/1/6.
 */

var firstController=function($scope){       //这个是一个方法啊
    //先写一个数组，数组里面是一个一个的对象。
    $scope.cart=[
        {
            "id":"1000",
            "name":"Iphone5s",
            "num":1,
            "price":3000
        },
        {
            "id":"2000",
            "name":"Mac",
            "num":2,
            "price":14200
        },
        {
            "id":"3000",
            "name":"iPad",
            "num":3,
            "price":2000
        },
        {
            "id":"4000",
            "name":"Iphone6s",
            "num":1,
            "price":4500
        },
        {
            "id":"5000",
            "name":"Iphone7",
            "num":2,
            "price":6800
        }
    ]



    //计算所有的价格
    $scope.totalPrice=function(){
        var totalPrice=0;
        angular.forEach($scope.cart,function(value){    //这个value就是cart数组里的每一个对象
            //console.log(value);
            totalPrice+=value.num*value.price;
        });
        return totalPrice;
    };
    //计算所有的价格


    //计算所有商品的总数
    $scope.totalNum=function(){
        var totalNum=0;
        angular.forEach($scope.cart,function(value){       //这个value就是cart数组里的每一个对象
            totalNum+=value.num;
        });
        return totalNum;
    };
    //计算所有商品的总数



    //数量的加
    $scope.add=function(id){
        var index=findIndex(id);
        if(index!=-1){
            ++$scope.cart[index].num;
        }
    }
    //数量的加

    //数量的减
    $scope.reduce=function(id){
        var index=findIndex(id);
        if(index!=1){
            if($scope.cart[index].num>1){
                --$scope.cart[index].num;
            }else{
                var alertMsg=confirm("确认要删除此商品吗？");
                if(alertMsg){
                    $scope.remove(id);
                }
            }
        }
    }
    //数量的减


    //当数量减到小于一的时候，就调用这个remove方法。
    $scope.remove=function(id){
        var index=-1;
        angular.forEach($scope.cart,function(value,key){
            if(value.id==id){
                index=key;
            }
        })
        if(index!=1){
            $scope.cart.splice(index,1);
        }
    }
    //当数量减到小于一的时候，就调用这个remove方法。




    //通过这个方法可以找到该商品在该数组的位置。
    var findIndex=function(id){            //个人总结啊，有返回值的就用var一个方法，没有返回值的就$scope（好像上面的remove）
        var index=-1;
        angular.forEach($scope.cart,function(value,key){
            if(value.id==id){
                index=key;
                //return ;
            }
        });
        return index;
    };
    //通过这个方法可以找到该商品在该数组的位置。



     //清空所有的商品
    $scope.removeAll=function(){
        var confirmMsg=confirm("确定要清空所有商品吗？");
        if(confirmMsg){
            $scope.confirmRemoveAll();   //类似于调用方法
        }
    }
    $scope.confirmRemoveAll=function(){
            $scope.cart.splice(0,$scope.cart.length);
    }
    //清空所有的商品



    //清除单个商品。
    $scope.removeSingle=function(id){
        var index=findIndex(id);
        var confirmMsg=confirm("确定要移除该商品吗？");
        if(confirmMsg){
            if(index!=1){
                $scope.cart.splice(index,1);
            }
        }
    }
    //清除单个商品。



}