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

    <div id="AdminContent"><div class="MainForm">
<form id="style_form" action="user/moodSetting" method="POST">
<h2 class="title">网页个性化设置</h2>
<table>
	<tbody>
		<tr>
		<th>我的心情</th>		
		<td><input name="mood" size="40" maxlength="40" class="TEXT" value="<?php
			if($this->session->userdata("usermood")){
				echo $this->session->userdata("usermood")->mood;
			}else if($this->session->userdata("userinfo")){
				echo $this->session->userdata("userinfo")->mood;
			}else{
				echo "心情 here...";
			}
			?>" type="text"></td>
<!--			<input value="保存修改" class="BUTTON SUBMIT" type="submit">-->
		</tr>
	<tr><th></th><td></td></tr>
	<tr class="submit">
		<th></th>	
		<td>
		<input value="保存修改" class="BUTTON SUBMIT" type="submit">
		<span id="error_msg" style="display:none"></span>
		</td>
	</tr>
</tbody></table>
</form>
</div>
<script language="javascript">
<!--
//$('#style_form').ajaxForm({
//    success: function(html) {
//		$('#error_msg').hide();
//    	if(html.length>0)
//    		$('#error_msg').html("<span class='error_msg'>"+html+"</span>");
//    	else
//    		$('#error_msg').html("<span class='ok_msg'>个性化设置保存成功，请<a href='javascript:location.reload()'>刷新</a>页面查看效果</span>");
//		$('#error_msg').show("fast");
//    }
//});
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