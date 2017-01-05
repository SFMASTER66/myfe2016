<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
	<base href="<?php echo site_url() ?>">
  <title>Johnny的博客 - SYSIT个人博客</title>
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
<div class="MainForm BlogCommentManage">
	<h3>共有 <?php
		echo count($blogs);
		?> 篇博客评论，每页显示 20 个，共 1 页</h3>
	<?php
	foreach($blogs as $row){
		echo "<ul>";
		echo "<li>";
		echo "<span class=\"portrait\"><img src=\"images/portrait.gif\" class=\"SmallPortrait\" align=\"absmiddle\"></span>";
		echo "<span class=\"comment\">";
		echo "<div class=\"user\"><b></b><a href=''>".$row->username."</a></div>";
		echo "<div class=\"content\"><p>".$row->content."</p></div>";
		echo "<div class=\"opts\">";
		echo "<span style=\"float:right;\">";
		echo "<a href='blog/deleteBlogComment?commentId=$row->comment_id'>"."删除"."</a>|";
		echo "<a href='blog/deleteAllBlogCommentByUserId?userId=$row->user_id'>删除此人所有评论</a>";
		echo "</span>";
		echo "</div>";
		echo "</span>";
		echo "$row->create_time";
		echo "</li>";
		echo "</ul>";
	}
	?>
<!--  <h3>共有 3 篇博客评论，每页显示 20 个，共 1 页</h3>-->
<!--  <ul>-->
<!--		<li id="cmt_24027_154693_261665734" class="row_1">-->
<!--		<span class="portrait"><a href="#" target="_blank"><img src="images/portrait.gif" alt="Johnny" title="Johnny" class="SmallPortrait" user="154693" align="absmiddle"></a></span>-->
<!--		<span class="comment">-->
<!--		<div class="user"><b>Johnny</b> 评论了 <a href="viewPost_comment.htm" target="_blank">测试文章3</a></div>-->
<!--		<div class="content"><p>hoho</p></div>-->
<!--		<div class="opts">-->
<!--			<span style="float:right;">-->
<!--			<a href="javascript:delete_c_by_id(24027,154693,261665734)">删除</a> |-->
<!--			<a href="javascript:delete_c_by_user(154693)">删除此人所有评论</a>-->
<!--			</span>-->
<!--			2011-06-18 00:37-->
<!--		</div>-->
<!--		</span>-->
<!--		<div class="clear"></div>-->
<!--	</li>-->
<!--	  </ul>-->
</div>
<script type="text/javascript">
<!--
function delete_c_by_id(nid,uid,cid){
  if(confirm("您确认要删除此篇评论？")){
    var args = "cmt="+cid+"#"+uid+"#"+nid;
    ajax_post("/action/blog/delete_blog_comments?space=154693",args,function(){$("#cmt_"+nid+"_"+uid+"_"+cid).fadeOut();});
  }
}
function delete_c_by_user(uid){
  if(confirm("您确认要删除此人发表的所有评论？")){
    var args = "user="+uid;
    ajax_post("/action/blog/delete_blog_comments_by_user?space=154693",args,function(){location.reload();});
  }
}
function delete_c_by_ip(ip){
  if(confirm("您确认要删除来自IP地址："+ip+"发表的所有评论？")){
    var args = "ip="+ip;
    ajax_post("/action/blog/delete_blog_comments_by_ip?space=154693",args,function(){location.reload();});
  }
}
//-->
</script></div>
	<div class="clear"></div>
</div>
<script type="text/javascript">
<!--
$(document).ready(function() {
	$('#AdminTitle').text('管理首页');
});
$('.AutoCommitForm').ajaxForm({
    success: function(html) {	
		$('#error_msg').hide();
		if(html.length>0)
			$('#error_msg').html("<span class='error_msg'>"+html+"</span>");
		else
			$('#error_msg').html("<span class='ok_msg'>操作已成功完成</span>")
		$('#error_msg').show("fast");
    }
});
$('.AutoCommitJSONForm').ajaxForm({
	dataType: 'json',
    success: function(json) {	
		$('#error_msg').hide();
		if(json.error==0){
			if(json.msg)
				$('#error_msg').html("<span class='ok_msg'>"+json.msg+"</span>");
			else
				$('#error_msg').html("<span class='ok_msg'>操作已成功完成</span>");
		}
		else {
			if(json.msg)
				$('#error_msg').html("<span class='error_msg'>"+json.msg+"</span>");
			else
				$('#error_msg').html("<span class='error_msg'>操作已成功完成</span>");
		}
		$('#error_msg').show("fast");
    }
});
//-->
</script>
</div>
	<div class="clear"></div>
	<div id="OSC_Footer">© 赛斯特(WWW.SYSIT.ORG)</div>
</div>
<script type="text/javascript" src="javascript/space.htm" defer="defer"></script>
<script type="text/javascript">
<!--
$(document).ready(function() {
	$('a.fancybox').fancybox({titleShow:false});
});

function pay_attention(pid,concern_it){
	if(concern_it){
		$("#p_attention_count").load("/action/favorite/add?mailnotify=true&type=3&id="+pid);
		$('#attention_it').html('<a href="javascript:pay_attention('+pid+',false)" style="color:#A00;">取消关注</a>');	
	}
	else{
		$("#p_attention_count").load("/action/favorite/cancel?type=3&id="+pid);
		$('#attention_it').html('<a href="javascript:pay_attention('+pid+',true)" style="color:#3E62A6;">关注此文章</a>');
	}
}
//-->
</script>
</body></html>