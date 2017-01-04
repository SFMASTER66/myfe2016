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
	  #mask{
		  background: darkgray;
		  height: 100%;
		  width: 100%;
		  position: fixed;
		  opacity: 0.5;
		  display: none;
	  }
	  #showBlog{
		  background: white;
		  position: fixed;
		  height: 500px;
		  width: 534px;
		  top: 52px;
		  left: 382px;
		  margin: 0 auto;
		  display: none;
		  color: greenyellow;
		  line-height: 250px;
		  /*text-align: right;*/
	  }
  </style>
</head>
<body>
<!--[if IE 8]>
<style>ul.tabnav {padding: 3px 10px 3px 10px;}</style>
<![endif]-->
<!--[if IE 9]>
<style>ul.tabnav {padding: 3px 10px 4px 10px;}</style>
<![endif]-->
<div id="mask"></div>

<div id="showBlog"></div>


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
        <li><a href="user/userSettings" class="project">
				<?php
				if($this->session->userdata("usermood")){
					echo $this->session->userdata("usermood")->mood;
				}else if($this->session->userdata("userinfo")->mood==""){
					echo "心情 here...";
				}else if($this->session->userdata("userinfo")->mood!=""){
					echo $this->session->userdata("userinfo")->mood;
				}
				?>
				</a></li>
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
//					if($this->session->userdata("messageNum")){
//						echo $this->session->userdata("messageNum")->num;
//					}else{
//						echo "0";
//					}
					echo $num->num;
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
		<strong><?php echo $this->session->userdata("userinfo")->username;?>的博客</strong>
		<div><a href="index_logined.htm">TA的博客列表</a>&nbsp;|
			<a href="message/sendMsg">发送留言</a></div>
	</div>
	<div class="clear"></div>
</div>
<div class="BlogList">
<ul>
	<?php
	if($blogs){
		foreach($blogs as $row){
			echo "<li class=\"Blog\">";
			echo "<h2 class=\"BlogAccess_true BlogTop_0\"><a class='blogTitle'  href='javascript:;' value='$row->content'>$row->title</a></h2>";
			echo "<div class=\"outline\">";
			echo "<span class=\"time\">发表于$row->create_time </span>";
			echo "<span class=\"catalog\">分类: ".$row->type_name." <a href=''></a></span>";
			echo "<span class=\"stat\">统计: ".$row->num."评/4阅</span>";
			echo "<span class=\"blog_admin\">(<a href='blog/show_changeblogTypeName?content=$row->content&title=$row->title&type_name=$row->type_name'>修改</a> | <a class='deleteIndexBlogs' href='blog/deleteIndexBlogs?blog_id=$row->blog_id' value='$row->blog_id'>删除</a>)</span>";
			echo "</div>";
			echo "<div class=\"TextContent\">$row->content";
			echo "<div class=\"fullcontent\"><a class='theWholeBlog' value='$row->content' href='javascript:;'>阅读全文...</a></div>";
			echo "</div>";
			echo "</li>";
		}
	}else{
		echo "你还没有文章哦";
	}

	?>
<!--  <li class="Blog" id="blog_24027">-->
<!--	<h2 class="BlogAccess_true BlogTop_0"><a href="viewPost_comment.htm">测试文章3</a></h2>-->
<!--	<div class="outline">-->
<!--	  <span class="time">发表于 2011年06月18日 0:34</span>-->
<!--	  <span class="catalog">分类: <a href="#">工作日志</a></span>-->
<!--	  <span class="stat">统计: 1评/4阅</span>-->
<!--		<span class="blog_admin">( <a href="newBlog.htm">修改</a> | <a href="javascript:delete_blog(24027)">删除</a> )</span>-->
<!--	</div>-->
<!--		<div class="TextContent" id="blog_content_24027">-->
<!--				测试文章3-->
<!--		<div class="fullcontent"><a href="viewPost_comment.htm">阅读全文...</a></div>-->
<!--		</div>-->
<!--	  </li>-->
</ul>
<div class="clear"></div>
	</div>
<div class="BlogMenu"><div class="admin SpaceModule">
  <strong>博客管理</strong>
  <ul class="LinkLine">
	  <li><a href="blog/show_blogTypeName">发表博客</a></li>
	  <li><a href="blog/showblogTypeName">博客设置/分类管理</a></li>
	  <li><a href="blog/showBlogs">文章管理</a></li>
	  <li><a href="blog/showBlogsOnComments">博客评论管理</a></li>
  </ul>
</div>
<div class="catalogs SpaceModule">
  <strong>博客分类</strong>
  <ul class="LinkLine">
    	<li><a href="#">工作日志(3)</a></li>
		<li><a href="#">日常记录(0)</a></li>
		<li><a href="#">转贴的文章(0)</a></li>
	  </ul>
</div>
<div class="comments SpaceModule">
  <strong>最新网友评论</strong>
      <ul>
		  <?php
		  if($comment){
			  foreach($comment as $key=>$prop){
//				  $keyarray = array_keys($comment);
//				  print_r($keyarray);
//				  die();
//					  echo $key;
					  echo "<li>";
					  echo "<span class=\"u\"><a href=''><img src='images/portrait.gif' alt=''class=\"SmallPortrait\" align=\"absmiddle\"></a></span>";
					  echo "<span>$prop->content";
					  echo "<span class=\"t\">发布于$prop->create_time <a href='blog/viewPost_logined?title=$prop->title&createtime=$prop->create_time&username=$prop->username&content=$prop->content&blogId=$prop->blog_id&keyarray= $key'>查看»</a></span>";
					  echo "</span>";
					  echo "<div class=\"clear\"></div>";
					  echo "</li>";

			  }
		  }else{
			  echo "你还没有网友评论哦";
		  }

		  ?>
<!--		<li>-->
<!--		<span class="u"><a href="#"><img src="images/portrait.gif" alt="Johnny" title="Johnny" class="SmallPortrait" user="154693" align="absmiddle"></a></span>-->
<!--		<span class="c">hoho-->
<!--			<span class="t">发布于 11分钟前 <a href="viewPost_comment.htm">查看»</a></span>-->
<!--		</span>-->
<!--		<div class="clear"></div>-->
<!--	</li>-->
	  </ul>
  </div></div>
<div class="clear"></div>
<script type="text/javascript" src="javascript/brush.js"></script>
<link type="text/css" rel="stylesheet" href="css/shCore.css">
<link type="text/css" rel="stylesheet" href="css/shThemeDefault.css">

<!--<script type="text/javascript">-->
<!--function delete_blog(blog_id){-->
<!--if(!confirm("文章删除后无法恢复，请确认是否删除此篇文章？")) return;-->
<!--ajax_post("/action/blog/delete?id="+blog_id,"",function(html){-->
<!--	$('#blog_'+blog_id).fadeOut();-->
<!--});-->
<!--}-->
<!--</script>-->
	</div>
	<div class="clear"></div>
	<div id="OSC_Footer">© 赛斯特(WWW.SYSIT.ORG)</div>
</div>
</div>

<script src="javascript/jquery-1.12.4.js"></script>
<script>

//	$(function(){
//		var $tag=$(".deleteIndexBlogs");
//		$(".deleteIndexBlogs").on("click",function(){
//			var $value=$(this).attr("value");
//			console.log($value);
//			console.log("1111");
//		})
//	})



	$(".blogTitle").on("click",function(){
		var $value=$(this).attr("value");
		$("#mask").css("display","block");
		$("#showBlog").css("display","block").html($value);
	})

	$(".theWholeBlog").on("click",function(){
		var $value=$(this).attr("value");
		$("#mask").css("display","block");
		$("#showBlog").css("display","block").html($value);
	})

	$("#mask").on("click",function(){
		$("#mask").css("display","none");
		$("#showBlog").css("display","none");
	})



</script>

</body></html>