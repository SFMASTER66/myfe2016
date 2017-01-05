<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
	<base href="<?php echo site_url()?>">
  <title>博客文章管理 Johnny的博客 - SYSIT个人博客</title>
      <link rel="stylesheet" href="css/space2011.css" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/jquery.css" media="screen">
  <script type="text/javascript" src="javascript/jquery-1.js"></script>
  <script type="text/javascript" src="javascript/jquery.js"></script>
  <script type="text/javascript" src="javascript/jquery_002.js"></script>
  <script type="text/javascript" src="javascript/oschina.js"></script>
  <style type="text/css">
    body,table,input,textarea,select {font-family:Verdana,sans-serif,宋体;}	
  </style>
</head>
<body>
<!--[if IE 8]>
<style>ul.tabnav {padding: 3px 10px 3px 10px;}</style>
<![endif]-->
<!--[if IE 9]>
<style>ul.tabnav {padding: 3px 10px 4px 10px;}</style>
<![endif]-->

<?php include "same.php" ?>


    <div id="AdminContent">
<div class="MainForm BlogArticleManage">
  <h3 class="title">共有 3 篇博客，每页显示 40 个，共 1 页</h3>
    <div id="BlogOpts">
	<a href="javascript:;" id="choseAll">全选</a>&nbsp;|
	<a href="javascript:;" id="cancel">取消</a>&nbsp;|
	<a href="javascript:;" id="reverseChose">反向选择</a>&nbsp;|
	<a href="javascript:;" id="deleteAll">删除选中</a>
  </div>
  <ul>
	  <?php
	  foreach($blogs as $row){
		  echo "<li>";
		  echo "<input name='blog' value='$row->blog_id' type='checkbox'>";
		  echo "<a>".$row->title."---$row->type_name</a>";
		  echo "<small>".$row->create_time."</small>";
		  echo "</li>";
	  }
	  ?>
<!--		<li class="row_1">-->
<!--		<input name="blog" value="24027" type="checkbox">-->
<!--		<a href="viewPost_comment.htm" target="_blank">测试文章3</a>-->
<!--		<small>2011-06-18 00:34</small>-->
<!--	</li>-->
	  </ul>
    </div>
</div>
	<div class="clear"></div>
	<div id="OSC_Footer">© 赛斯特(WWW.SYSIT.ORG)</div>
</div>
		<script src="javascript/jquery-1.12.4.js"></script>
		<script>

			$(function(){
				$("#deleteAll").on("click",function(){
					var blogId="";
					$(":checked").each(function(index,elem){
						blogId+=elem.value+",";
					})
					blogId=blogId.slice(0,-1);
					console.log(typeof blogId);
					$.get("blog/deleteBlogs",{blogId:blogId},function(data){
						if(data=="success"){
							$(":checked").parent().remove();
						}else if(data=="fail"){
							alert("删除失败");
						}
					})
				})

				$("#choseAll").on("click",function(){
					console.log("lalalala");
					$("input[name=blog]").prop("checked",true);
				})

				$("#cancel").on("click",function(){
					$("input[name=blog]").prop("checked",false);
				})

				$("#reverseChose").on("click",function(){
					$("input[name=blog]").each(function(index,elem){
						if($(this).prop("checked")){
							$(this).prop("checked",false);
						}else{
							$(this).prop("checked",true);
						}
					})
				})






			})




		</script>


</body></html>