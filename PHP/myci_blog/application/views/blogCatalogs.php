<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
	<base href="<?php echo site_url()?>">
  <title>博客设置/分类管理 Johnny的博客 - SYSIT个人博客</title>
      <link rel="stylesheet" href="css/space2011.css" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/jquery.css" media="screen">
<!--  <script type="text/javascript" src="javascript/jquery-1.js"></script>
  <script type="text/javascript" src="javascript/jquery.js"></script>
  <script type="text/javascript" src="javascript/jquery_002.js"></script>
  <script type="text/javascript" src="javascript/oschina.js"></script>-->
  <style type="text/css">
    body,table,input,textarea,select {font-family:Verdana,sans-serif,宋体;}
	  .changeType{
		  display: none;
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

<!--<div id="OSC_Screen"><!-- #BeginLibraryItem "/Library/OSC_Banner.lbi" -->
<!--<div id="OSC_Banner">-->
<!--    <div id="OSC_Slogon">--><?php
//		if($this->session->userdata("NewProfile")){
//			echo $this->session->userdata("NewProfile")->realName;
//		}else if($this->session->userdata("userinfo")){
//			echo $this->session->userdata("userinfo")->realName;
//		}else{
//			echo " Who";
//		}
//		?><!--'s Blog</div>-->
<!--    <div id="OSC_Channels">-->
<!--        <ul>-->
<!--        <li><a href="user/userSettings" class="project">--><?php
//				if($this->session->userdata("usermood")){
//					echo $this->session->userdata("usermood")->mood;
//				}else if($this->session->userdata("userinfo")->mood==""){
//					echo "心情 here...";
//				}else if($this->session->userdata("userinfo")->mood!=""){
//					echo $this->session->userdata("userinfo")->mood;
//				}
//				?><!--</a></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--    <div class="clear"></div>-->
<!--</div><!-- #EndLibraryItem --><div id="OSC_Topbar">
<!--	  <div id="VisitorInfo">-->
<!--		当前访客身份：-->
<!--		  --><?php
//		  if($this->session->userdata("userinfo")){
//			  echo $this->session->userdata("userinfo")->username;
//		  }else{
//			  echo "游客";
//		  }
//		  ?>
<!--		  [ <a href="user/index">退出</a> ]-->
<!--				<span id="OSC_Notification">-->
<!--			<a href="message/showResMessage" class="msgbox" title="进入我的留言箱">你有<em>-->
<!--					--><?php
//					if($this->session->userdata("messageNum")){
//						echo $this->session->userdata("messageNum")->num;
//					}else{
//						echo "0";
//					}
//					?>
<!--				</em>新留言</a>-->
<!--																				</span>-->
<!--    </div>-->
<!--		<div id="SearchBar">-->
<!--    		<form action="#">-->
<!--								<input name="user" value="154693" type="hidden">-->
<!--																								<input id="txt_q" name="q" class="SERACH" value="在此空间的博客中搜索" onblur="(this.value=='')?this.value='在此空间的博客中搜索':this.value" onfocus="if(this.value=='在此空间的博客中搜索'){this.value='';};this.select();" type="text">-->
<!--				<input class="SUBMIT" value="搜索" type="submit">-->
<!--    		</form>-->
<!--		</div>-->
<!--		<div class="clear"></div>-->
<!--	</div>-->
<!--	<div id="OSC_Content">-->
<!--<div id="AdminScreen">-->
<!--    <div id="AdminPath">-->
<!--        <a href="blog/indexShowBlogs">返回我的首页</a>&nbsp;»-->
<!--    	<span id="AdminTitle"d>博客设置/分类管理</span>-->
<!--    </div>-->
<!--    <div id="AdminMenu"><ul>-->
<!--	<li class="caption">个人信息管理		-->
<!--		<ol>-->
<!--			<li><a href="message/showResMessage">站内留言(0/1)</a></li>-->
<!--			<li><a href="user/profile">编辑个人资料</a></li>-->
<!--			<li><a href="user/chpwd">修改登录密码</a></li>-->
<!--			<li><a href="user/userSettings">网页个性设置</a></li>-->
<!--		</ol>-->
<!--	</li>		-->
<!--</ul>-->
<!--<ul>-->
<!--	<li class="caption">博客管理	-->
<!--		<ol>-->
<!--			<li><a href="blog/show_blogTypeName">发表博客</a></li>-->
<!--			<li><a href="blog/showblogTypeName">博客设置/分类管理</a></li>-->
<!--			<li><a href="blog/showBlogs">文章管理</a></li>-->
<!--			<li><a href="blog/showBlogsOnComments">博客评论管理</a></li>-->
<!--		</ol>-->
<!--	</li>-->
<!--</ul>-->
<!--</div>-->


	<?php include "same.php" ?>




    <div id="AdminContent">
<div class="MainForm BlogCatalogManage">
<form id="CatalogForm" action="blog/addBlogCatalog" method="post">
    <h3> 添加博客分类 </h3>
    <div id="error_msg" class="error_msg" style="display:none;"></div>
    <label>分类名称:</label><input id="txt_link_name" name="blogTypeName" size="15" tabindex="1" type="text">
    <label>排序值:</label><input name="sort_order" value="0" size="3" type="text">
    <span class="submit">
          <input value="添加&nbsp;»" tabindex="3" class="BUTTON SUBMIT" type="submit">
        </span>
</form>
<form class="BlogCatalogs">
<h3>博客分类 <span>(点击分类名编辑)</span></h3>
<table cellpadding="1" cellspacing="1">
	<tbody><tr>
		<th>序号</th>
		<th>分类名</th>
		<th>文章</th>
		<th>操作</th>
	</tr>


	<?php
	if($blogTypeName){
		foreach($blogTypeName as $typeName){
			$a=(int)$typeName->type_id;
				echo "<tr id='$typeName->type_id'>";
				echo "<td>".$typeName->type_id."</td>";
				echo "<td><span id='a$a"."b"."'>".$typeName->type_name."</span></br><input  name='changeTypeName' class='changeType'type='text' value='$typeName->type_name'id='a$a'></td>";
				echo "<td>".$typeName->num."</td>";
				echo "<td><a href='javascript:;' value='a$a' class='change'>修改</a>
                           <a href='javascript:;' value='$typeName->type_id' class='delete'>删除</a>
                           </td>";
				echo "</tr>";
		}
	}else{
		echo "<tr>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td><a href=''>修改</a>
                           <a href=''>删除</a>
                           </td>";
		echo "</tr>";
	}
	?>



<!--	--><?php
//	if($TypeBlogNum){
//		foreach($TypeBlogNum as $typeName){
//			$a=(int)$typeName->type_id;
//			echo "<tr id='$typeName->type_id'>";
//			echo "<td>".$typeName->type_id."</td>";
//			echo "<td><span id='a$a"."b"."'>".$typeName->type_name."</span></br><input  name='changeTypeName' class='changeType'type='text' value='$typeName->type_name'id='a$a'></td>";
//			echo "<td>".$typeName->num."</td>";
//			echo "<td><a href='javascript:;' value='a$a' class='change'>修改</a>
//                           <a href='javascript:;' value='$typeName->type_id' class='delete'>删除</a>
//                           </td>";
//			echo "</tr>";
//		}
//	}else{
//		echo "<tr>";
//		echo "<td></td>";
//		echo "<td></td>";
//		echo "<td></td>";
//		echo "<td><a href=''>修改</a>
//                           <a href=''>删除</a>
//                           </td>";
//		echo "</tr>";
//	}
//	?>





<!--	<tr id="catalog_92334">-->
<!--		<td class="idx">1</td>-->
<!--		<td class="name"><a href="editCatalog.htm" title="点击修改博客分类">工作日志</a></td>-->
<!--		<td class="num">3</td>-->
<!--		<td class="opts">-->
<!--			<a href="editCatalog.htm" title="点击修改博客分类">修改</a>-->
<!--			<a href="#" onclick="return delete_catalog(154693,92334);">删除</a>-->
<!--		</td>-->
<!--	</tr>-->
</tbody></table>
</form>
</div>

		<script src="javascript/jquery-1.12.4.js"></script>
		<script>


			$(function(){   //文档就绪函数

				//删除
				var $typeIds;
				$(".delete").on("click",function(){
					$typeIds=$(this).attr("value");
					console.log($typeIds);
					$.get("blog/deleteBlogType",{typeId:$typeIds},function(data){
						if(data=="success"){
							$("#"+$typeIds).remove();   //这个就是整个相对应的一行tr去掉。
						}else if(data=="fail"){
							alert("删除失败");
						}
					})
				})
               //删除



				//点击修改
				$(".change").each(function(index,elem){   //给每一个修改绑定一个标识符。
					this.flag=true;
				});
				var $typename;
				var $typeId;
				var $c;
				$(".change").on("click",function(){  //每一个修改有相对应的value值，这个value值就是typeid。
					$typeId=$(this).attr("value");    //带a的value值。
//					console.log($typeId);
					var $Id=$typeId.slice(1);
//					console.log($Id);
					$c=$typeId+"b";  //给value加一个b，因为span的id带有相对应的b。
					if(this.flag==true){
						$typename=$("#"+$c).html();   //点击的时候获取span原来的问本文本值。
						$("#"+$c).html("");    //然后清空span的文本值。
						$("#"+($typeId)).css("display","block");  //然后让相对应的input出现。
					}else{
						if($typename==""){   //点击完修改之后，如果input的值为空，则不允许修改。
							alert("类型不能为空");
						}else{             //如果input的值不为空，则可以修改。
							$("#"+$c).html($typename);
							$("#"+($typeId)).css("display","none");
						}
					}
					this.flag=!this.flag;
				});
				//点击修改


                //点击input之后，失去焦点时事件。
				var $typename;
				$("input[name=changeTypeName]").on("blur",function(){
					$typename=this.value;   //获取现在input里面的值是什么。
//					console.log($typename);
					var $id=$(this).attr("id");  //获取这个input的id值
					$id=$id.slice(1);     //通过这个方法去掉a，获得纯数字  因为要通过typeid来修改类型。
					$.get("blog/changeBlogType",{typename:$typename,typeId:$id},function(data){
						if(data=="fail"){
							alert("已经有该类型了");
						}else if(data=="success"){
							if($typename==""){   //如果成功了（也就是没有相同的类型），失去焦点的时候再判断input是不是为空，如果为空，再弹出东西。
								alert("请输入东西");
							}else{      //如果有东西，而且类型不重复，就可以做下面的操作。
								$("#"+$c).html($typename);
								$("#"+($typeId)).css("display","none");
							}
						}
					})
				})
				//点击input之后，失去焦点时事件。

			})    //文档就绪函数
		</script>

</body></html>