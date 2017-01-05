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

<?php include "same.php" ?>

    <div id="AdminContent">
<ul class="tabnav"> 
	<li class="tab1 current"><a href="message/showResMessage">所有留言<em><?php
//				foreach($num as $value){
					echo $num->num;
//				}
				?></em></a></li>
	<li class="tab4"><a href="message/sendMsgOK?messageNum=<?php echo$num->num ?>">已发送留言<em>
				<?php

				echo $MyOwnMessageNum->num;
				?>
			</em></a></li>
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