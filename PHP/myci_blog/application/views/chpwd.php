<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
	<base href="<?php echo site_url() ?>">
  <title>修改登录密码 Johnny的博客 - SYSIT个人博客</title>
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

<div class="MainForm">
<form class="AutoCommitJSONForm" action="user/changePassword" method="POST">
<h2>修改我的登录密码</h2>
<table width="100%">
	<tbody><tr>
		<th width="110">旧的登录密码</th>		
		<td>
			<input id="oldpwd" name="oldpwd" size="20" class="TEXT" tabindex="1" type="password">&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#" target="_blank">忘记登录密码</a>
			<span id="span1"></span>
		</td>    		
	</tr>
	<tr>
		<th>新密码</th>		
		<td><input id="newpwd" name="newpwd" size="20" class="TEXT" tabindex="2" type="password">
			<span id="span2"></span>
		</td>
	</tr>
	<tr>
		<th>再次输入新密码</th>		
		<td><input id="newpwd2" name="newpwd2" size="20" class="TEXT" tabindex="3" type="password">
			<span id="span3"></span>
		</td>
	</tr>
	<tr><th colspan="2"></th></tr>
	<tr class="submit">
		<th></th>
		<td>
		<input id="submitNewPassword" value="修改密码" class="BUTTON SUBMIT" tabindex="4" type="submit">
		<span id="error_msg" style="display:none"></span>
		</td>
	</tr>
</tbody></table>
</form>
</div></div>
	<div class="clear"></div>
</div>
</div>
	<div class="clear"></div>
	<div id="OSC_Footer">© 赛斯特(WWW.SYSIT.ORG)</div>
</div>

<script src="javascript/jquery-1.12.4.js"></script>
<script>
	$(function(){
		$("input[name=oldpwd]").on("blur",function(){
			$.get("user/checkOldPwd",{oldpwd:this.value},function(data){
				if(data=="success"){
					$("#span1").html("旧密码输入成功");

					if($("#span3").html()=="请再次确认新密码"){
						$("#submitNewPassword").attr("disabled",true);
					}else{
						$("#submitNewPassword").removeAttr("disabled");
					}
//					$("#newpwd").removeAttr("disabled");
					submit();
				}else if(data=="fail"){
					$("#span1").html("请重新输入旧密码");
					$("#submitNewPassword").attr("disabled",true);
//					$("#newpwd").attr("disabled",true);
//					$("#newpwd2").attr("disabled",true);
				}
			})
		})

		$("#newpwd").on("blur",function(){
			var $newpwd=this.value;
			if($newpwd!=""){
				if($newpwd!=$("#newpwd2").val()){
//					$("#newpwd2").removeAttr("disabled");
					$("#span2").html("新密码有效");
					$("#submitNewPassword").attr("disabled",true);
				}else if($newpwd==$("#newpwd2").val()){
					$("#newpwd2").removeAttr("disabled");
					$("#span2").html("新密码有效");
				}

			}else if($newpwd==""){
				$("#span2").html("新密码不能为空");
//				$("#newpwd2").attr("disabled",true);
				$("#submitNewPassword").attr("disabled",true);
			}
		})

		$("#newpwd2").on("blur",function(){
			var $newpwd2=this.value;
			if($newpwd2==$("#newpwd").val()){
				$("#span3").html("密码正确");
//				$("#submitNewPassword").removeAttr("disabled");
				console.log($("#span3").html());
				if($("#span1").html()=="旧密码输入成功"){
					if($newpwd2==""){
						$("#span3").html("新密码不能为空");
						$("#submitNewPassword").attr("disabled",true);
					}else{
						$("#submitNewPassword").removeAttr("disabled");
					}

				}
			}else if($newpwd2!=$("#newpwd").val()){
				$("#span3").html("请再次确认新密码");
				$("#submitNewPassword").attr("disabled",true);
			}
		})
        submit();
		function submit(){
			if($("#oldpwd").val()==""||$("#newpwd").val()==""||$("#newpwd2").val()==""){
				$("#submitNewPassword").attr("disabled",true);
			}
		}

	})



</script>

</body></html>