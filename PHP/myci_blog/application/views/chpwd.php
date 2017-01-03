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
<div id="OSC_Screen"><!-- #BeginLibraryItem "/Library/OSC_Banner.lbi" -->
<div id="OSC_Banner">
    <div id="OSC_Slogon"><?php
		if($this->session->userdata("NewProfile")){
			echo $this->session->userdata("NewProfile")->realName;
		}else if($this->session->userdata("userinfo")){
			echo $this->session->userdata("userinfo")->realName;
		}else{
			echo " Who";
		}
		?>'s Blog</div>
    <div id="OSC_Channels">
        <ul>
        <li><a href="user/userSettings" class="project"><?php
				if($this->session->userdata("usermood")){
					echo $this->session->userdata("usermood")->mood;
				}else if($this->session->userdata("userinfo")->mood==""){
					echo "心情 here...";
				}else if($this->session->userdata("userinfo")->mood!=""){
					echo $this->session->userdata("userinfo")->mood;
				}
				?></a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div><!-- #EndLibraryItem --><div id="OSC_Topbar">
	  <div id="VisitorInfo">
		当前访客身份：
		  <?php
		  if($this->session->userdata("userinfo")){
			  echo $this->session->userdata("userinfo")->username;
		  }else{
			  echo "游客";
		  }
		  ?>
		  [ <a href="user/index">退出</a> ]
				<span id="OSC_Notification">
			<a href="message/showResMessage" class="msgbox" title="进入我的留言箱">你有<em>
					<?php
					if($this->session->userdata("messageNum")){
						echo $this->session->userdata("messageNum")->num;
					}else{
						echo "0";
					}
					?>
				</em>新留言</a>
																				</span>
    </div>
		<div id="SearchBar">
    		<form action="#">
								<input name="user" value="154693" type="hidden">
																								<input id="txt_q" name="q" class="SERACH" value="在此空间的博客中搜索" onblur="(this.value=='')?this.value='在此空间的博客中搜索':this.value" onfocus="if(this.value=='在此空间的博客中搜索'){this.value='';};this.select();" type="text">
				<input class="SUBMIT" value="搜索" type="submit">
    		</form>
		</div>
		<div class="clear"></div>
	</div>
	<div id="OSC_Content">
<div id="AdminScreen">
    <div id="AdminPath">
        <a href="blog/indexShowBlogs">返回我的首页</a>&nbsp;»
    	<span id="AdminTitle">修改登录密码</span>
    </div>
    <div id="AdminMenu"><ul>
	<li class="caption">个人信息管理		
		<ol>
			<li><a href="message/showResMessage">站内留言(0/1)</a></li>
			<li><a href="user/profile">编辑个人资料</a></li>
			<li><a href="user/chpwd">修改登录密码</a></li>
			<li><a href="user/userSettings">网页个性设置</a></li>
		</ol>
	</li>		
</ul>
<ul>
	<li class="caption">博客管理	
		<ol>
			<li><a href="blog/show_blogTypeName">发表博客</a></li>
			<li><a href="blog/showblogTypeName">博客设置/分类管理</a></li>
			<li><a href="blog/showBlogs">文章管理</a></li>
			<li><a href="blog/showBlogsOnComments">博客评论管理</a></li>
		</ol>
	</li>
</ul>
</div>
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