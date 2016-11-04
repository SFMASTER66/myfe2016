/**
 * Created by Äã´óÒ¯ on 2016/11/2.
 */
$("input").on("focus",function(){
    if($(this).val()==this.defaultValue){
        $(this).val("");
    }
}).on("blur",function(){
    if($(this).val()==""){
        $(this).val(this.defaultValue);
    }
});