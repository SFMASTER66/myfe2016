/**
 * Created by 你大爷 on 2017/1/9.
 */

//第一种方法，就是写一个$rootScope这个，然后后面的都不用写，前段页面直接调用department就行了。
function greetCtr($scope,$rootScope){
    $scope.name="xiaoming";
    $rootScope.department="human resource";
}
function listCtr($scope){
    $scope.names=["xiaolan","xiaoming","xiaohei"];
}
//第一种方法，就是写一个$rootScope这个，然后后面的都不用写，前段页面直接调用department就行了。



//第二种方法，分别写也行。
//function greetCtr($scope){
//    $scope.name="xiaoming";
//    $scope.department="human resource";
//}
//function listCtr($scope){
//    $scope.names=["xiaolan","xiaoming","xiaohei"];
//    //$scope.department="human resource";
//    $scope.department=$scope.$$prevSibling.department;
//}
//第二种方法，分别写也行。
