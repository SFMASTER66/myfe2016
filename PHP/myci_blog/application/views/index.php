<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
	<base href="<?php echo site_url()?>">
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
<div id="OSC_Screen"><!-- #BeginLibraryItem "/Library/OSC_Banner.lbi" -->
<div id="OSC_Banner">
    <div id="OSC_Slogon">Who's Blog</div>
    <div id="OSC_Channels">
        <ul>
        <li><a href="javascript:;" class="project">心情 here...</a></li>
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
				 [ <a href="user/login">登录</a> | <a href="user/register">注册</a> ]
				<span id="OSC_Notification">
			<a href="javascript:;" class="msgbox" title="进入我的留言箱">你有<em>0</em>新留言</a>
					</span>
  </div>
		<div id="SearchBar">
    		<form action="javascript:;">
								<input name="user" value="154693" type="hidden">
																								<input id="txt_q" name="q" class="SERACH" value="在此空间的博客中搜索" onblur="(this.value=='')?this.value='在此空间的博客中搜索':this.value" onfocus="if(this.value=='在此空间的博客中搜索'){this.value='';};this.select();" type="text">
				<input class="SUBMIT" value="搜索" type="submit">
    		</form>
		</div>
		<div class="clear"></div>
	</div>
	<div id="OSC_Content"><div class="SpaceChannel">
	<div id="portrait"><a href="javascript:;"><img src="images/portrait.gif" alt="Johnny" title="Johnny" class="SmallPortrait" user="154693" align="absmiddle"></a></div>
    <div id="lnks">
		<strong>Who's博客</strong>
		<div>
			<a href="javascript:;">TA的博客列表</a>&nbsp;|
			<a href="javascript:;">发送留言</a>
</span>
		</div>
	</div>
	<div class="clear"></div>
</div>
<div class="BlogList">
<ul>
</ul>
<div class="clear"></div>
	</div>
<div class="BlogMenu"><div class="catalogs SpaceModule">
  <strong>博客分类</strong>
  <ul class="LinkLine">
    	<li><a href="javascript:;">工作日志(0)</a></li>
		<li><a href="javascript:;">日常记录(0)</a></li>
		<li><a href="javascript:;">转贴的文章(0)</a></li>
	  </ul>
</div>
<div class="comments SpaceModule">
  <strong>最新网友评论</strong>
    	<p class="NoData">目前还没有任何评论</p>
  </div></div>
<div class="clear"></div>
<script type="text/javascript" src="javascript/brush.js"></script>
<link type="text/css" rel="stylesheet" href="stylesheets/shCore.css">
<link type="text/css" rel="stylesheet" href="stylesheets/shThemeDefault.css"></div>
	<div class="clear"></div>
	<div id="OSC_Footer">© 赛斯特(WWW.SYSIT.ORG)</div>
</div>
</body></html>