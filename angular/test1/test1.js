/**
 * Created by 你大爷 on 2017/1/9.
 */

function firstController($scope){
     //$scope.name="llalala";              //这个就是直接赋值，当改变值的时候，这里相当于变量的地址也发生了改变。所以下面的$scope.$$prevSibling.name就找不到了，所以页面上改变第一个input的值的时候，下面的input不会跟着发生变化。
     $scope.data={              //这个就叫做引用赋值拉。      这样下面$scope.$$prevSibling.data找的地址就不会变了。
        name:"lalala"
    }
}

function secondController($scope){
    //$scope.name="nnnnnn";
    console.log($scope);
    $scope.name=$scope.$$prevSibling.data;        //当前scope的前一个的值是什么，就是llalala

}
