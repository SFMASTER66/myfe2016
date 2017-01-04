<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
	<base href="<?php echo site_url() ?>">
  <title>测试文章2 -  Johnny的博客 - SYSIT个人博客</title>
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
	<div id="OSC_Content"><div class="SpaceChannel">
	<div id="portrait"><a href="adminIndex.htm"><img src="images/portrait.gif" alt="Johnny" title="Johnny" class="SmallPortrait" user="154693" align="absmiddle"></a></div>
    <div id="lnks">
		<strong><?php
	            echo $this->session->userdata("userinfo")->username;
			?>的博客</strong>
		<div>
			<a href="index_logined.htm">TA的博客列表</a>&nbsp;|
			<a href="sendMsg.htm">发送留言</a>
</span>
		</div>
	</div>
	<div class="clear"></div>
</div>
<div class="Blog">


  <div class="BlogTitle">
	  <?php
		  echo "<h1>$title</h1>";
		  echo  "<div class=\"BlogStat\">";
		  echo "<span class=\"admin\">";
		  echo "<a href=\"newBlog.htm\">编辑</a>&nbsp;|&nbsp;<a href=\"javascript:delete_blog(24026)\">删除</a>";
		  echo "</span>";
		  echo "发表于1小时前 , ";
		  echo "已有<strong>4</strong>次阅读";
		  echo "共<strong><a href=\"#comments\">$num->num</a></strong>个评论";
	  echo "<strong>1</strong>人收藏此文章";
	  echo  "</div>";
	  ?>

<!--    <h1>测试文章2</h1>-->
<!--    <div class="BlogStat">-->
<!--						<span class="admin">-->
<!--			<a href="newBlog.htm">编辑</a>&nbsp;|&nbsp;<a href="javascript:delete_blog(24026)">删除</a>-->
<!--		</span>-->
<!--				发表于1小时前 , -->
<!--		已有<strong>4</strong>次阅读  -->
<!--		共<strong><a href="#comments">2</a></strong>个评论-->
<!--		<strong>1</strong>人收藏此文章-->
<!--	</div> -->
  </div>
  <div class="BlogContent TextContent"><?php
//	  foreach($blogs as $value){
//		  echo $value->title;
//	  }
	  echo $comment[$index]->title;
	  ?></div>
      <div class="BlogLinks">
	<ul>
          <li>上篇 <span>(1小时前)</span>：<a href="#" class="prev"><?php
				  if(($index-1)==-1){
//					  echo $PureBlogs[$index]->title;
					  echo "当前页面就是第一篇文章";
				  }else{
					  echo $PureBlogs[$index-1]->title;
				  }
				   ?></a></li><li>下篇 <span>(11小时前)</span>：<a href="viewPost_comment.htm" class="next"><?php
                                                                                                         if(($index+1)>(count($PureBlogs)-1)){
																											 echo "当前文章就是最后的文章";
																										 }else{
																											 echo $PureBlogs[$index+1]->title;
																										 }

				                                                                                    ?></a></li>            	</ul>
  </div>
    <div class="BlogComments">
    <h2><a name="comments" href="#postform" class="opts">发表评论»</a>共有 <?php  echo $num->num ?>条网友评论</h2>
		<ul id="BlogComments">
	<?php
	foreach($lotsOfComment as $comments){
		echo "<li>";
		echo "<div class=\"portrait\">";
		echo "<a href=\"#\"><img src='images/portrait.gif' alt=''class=\"SmallPortrait\" align=\"absmiddle\"></a>";
		echo "</div>";
		echo "<div class=\"body\">";
		echo "<div class=\"title\">$comments->username 发表于 $comments->create_time";
		echo " <a href=\"javascript:delete_c(24026,154693,261665458)\">删除</a>";
		echo "</div>";
		echo "<div class=\"post\">$comments->content</div>";
		echo "<div class=\"inline_reply\"></div>";
		echo "</div>";
		echo "<div class=\"clear\"></div>";
		echo "</li>";
	}

	?>
<!--	<li id="cmt_24026_154693_261665458">-->
<!--	<div class="portrait">-->
<!--		<a href="#"><img src="images/portrait.gif" alt="sw0411" title="sw0411" class="SmallPortrait" user="154693" align="absmiddle"></a>			-->
<!--	</div>-->
<!--	<div class="body">-->
<!--		<div class="title">-->
<!--			sw0411 发表于 2011-06-18 00:14    			-->
<!--        	        	  <a href="javascript:delete_c(24026,154693,261665458)">删除</a>-->
<!--								</div>-->
<!--		<div class="post" "="">测试评论</div>-->
<!--		<div id="inline_reply_of_24026_154693_261665458" class="inline_reply"></div>-->
<!--    </div>-->
<!--	<div class="clear"></div>-->
<!--</li>-->

		</ul>
		  </div>  
  <div class="CommentForm">
    <a name="postform"></a>
    <form id="form_comment" action="/action/blog/add_comment?blog=24026" method="POST">          
      <textarea id="ta_post_content" name="content" style="width: 450px; height: 100px;"></textarea><br>
	  <input value="发表评论" id="btn_comment" class="SUBMIT" type="submit"> 
	  <img id="submiting" style="display: none;" src="images/loading.gif" align="absmiddle">
	  <span id="cmt_tip">文明上网，理性发言</span>
    </form>
	<a href="#" class="more">回到顶部</a>
	<a href="#comments" class="more">回到评论列表</a>
  </div>
  </div>
<div class="BlogMenu"><div class="RecentBlogs SpaceModule">
	<strong>最新博文</strong><ul>
    		<li><a href="#">测试文章2</a></li>
				<li><a href="#">测试文章1</a></li>
			<li class="more"><a href="index.htm">查看所有博文»</a></li>
    </ul>
</div>

</div>
<div class="clear"></div>

<div id="inline_reply_editor" style="display:none;">
<div class="CommentForm">
	<form id="form_inline_comment" action="/action/blog/add_comment?blog=24026" method="POST">
	  <input id="inline_reply_id" name="reply_id" value="" type="hidden">          
      <textarea name="content" style="width: 450px; height: 60px;"></textarea><br>
	  <input value="回复" id="btn_comment" class="SUBMIT" type="submit"> 
	  <input value="关闭" class="SUBMIT" id="btn_close_inline_reply" type="button"> 文明上网，理性发言
    </form>
</div>
</div>

<link type="text/css" rel="stylesheet" href="css/shCore.css">
<link type="text/css" rel="stylesheet" href="css/shThemeDefault.css">

</div>
	<div class="clear"></div>
	<div id="OSC_Footer">© 赛斯特(WWW.SYSIT.ORG)</div>
</div>


</body></html>