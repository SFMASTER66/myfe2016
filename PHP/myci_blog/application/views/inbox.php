<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
	<base href="<?php echo site_url() ?>">
  <title>我的留言箱 Johnny的博客 - SYSIT个人博客</title>
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
    	<span id="AdminTitle">我的留言箱</span>
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
<ul class="tabnav"> 
	<li class="tab1 current"><a href="inbox.htm">所有留言<em><?php
//				foreach($num as $value){
					echo $num->num;
//				}
				?></em></a></li>
	<li class="tab4"><a href="outbox.htm">已发送留言<em>(0)</em></a></li>
    </ul>
<div class="MsgList">
<ul>
	<?php
	foreach($message as $value){
		echo "<li>";
		echo "<span class=\"sender\"><a href=''><img src='images/12_50.jpg' alt='' class=\"SmallPortrait\" align=\"absmiddle\" ></a></span>";
		echo "<span class=\"msg\">";
		echo "<div class=\"outline\">";
		echo "<a href=\"#\" target=\"user\">$value->username</a>";
		echo "发送于 $value->create_time &nbsp;&nbsp;";
		echo "<a href=\"javascript:delete_in_msg(186720)\">删除</a>";
		echo "</div>";
		echo "<div class=\"content\">";
		echo "<div class=\"c\">$value->message</div>";
		echo "<div>$value->res_message</div>";
		echo "</div>";
		echo "<div class=\"opts\">";
		echo "<a href=\"message/resMessage?messageId=$value->message_id\">回复留言</a>";
		echo "</div>";
		echo "</span>";
		echo "<div class=\"clear\"></div>";
		echo "</li>";
	}
	?>
<!--    <li id="msg_186720">-->
<!--	<span class="sender"><a href="#"><img src="images/12_50.jpg" alt="红薯" title="红薯" class="SmallPortrait" user="12" align="absmiddle"></a></span>-->
<!--	<span class="msg">-->
<!--		<div class="outline">-->
<!--			<a href="#" target="user">红薯</a>-->
<!--			发送于 昨天(23:00) (2011-06-17 23:00)				-->
<!--			&nbsp;&nbsp;<a href="javascript:delete_in_msg(186720)">删除</a>-->
<!--		</div>-->
<!--		<div class="content">-->
<!--		  <div class="c">您好，欢迎使用SYSIT Blog。</div>-->
<!--		</div>-->
<!--		<div class="opts">-->
<!--<!--			<a href="javascript:sendmsg(12,186720)">回复留言</a>-->
<!--			<a href="message/resMessage">回复留言</a>-->
<!--		</div>-->
<!--	</span>-->
<!--	<div class="clear"></div>-->
<!--  </li>-->
  </ul>
</div>

</div>
	<div class="clear"></div>
</div>

</div>
	<div class="clear"></div>
	<div id="OSC_Footer">© 赛斯特(WWW.SYSIT.ORG)</div>
</div>
</body></html>