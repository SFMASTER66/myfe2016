<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
	<base href="<?php echo site_url()?>">
  <title>已发送留言 Johnny的博客 - SYSIT个人博客</title>
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
	<li class="tab1"><a href="message/showResMessage">所有留言<em>
				<?php
				echo $messageNum;
				?>
			</em></a></li>

	<li class="tab4 current"><a href="javascript:;">已发送留言<em>
				<?php

				echo $MyOwnMessageNum->num;

				?>
			</em></a></li>
</ul>
<div class="MsgList">
<ul>

	<?php
//	if($flag==$this->session->userdata("flag")){
		foreach($showSendMessage as $sendMessage){
			echo "<li>";
			echo "<span class=\"sender\"><a href=''><img src='images/portrait.gif' alt='' class=\"SmallPortrait\" align=\"absmiddle\"></a></span>";
			echo "<span class=\"msg\">";
			echo "<div class=\"outline\">";
			echo "<a>you</a> 发送于 $sendMessage->create_time <EXTERNAL_FRAGMENT></EXTERNAL_FRAGMENT>";
			echo "<a href='message/deleteSendMsg?messageId=$sendMessage->message_id&userId=$sendMessage->user_id'>删除</a>";
			echo "</div>";
			echo "<div class=\"content\">";
			echo "<div class=\"c\">$sendMessage->message</div>";
			echo "</div>";
			echo "</span>";
			echo "<div class=\"clear\"></div>";
			echo "</li>";
//			$this->session->set_userdata(array(
//				"flag"=>2
//			));
		}
//	}
//	else {
//		foreach($showSendMessage as $sendMessage){
//			echo "<li>";
//			echo "<span class=\"sender\"><a href=''><img src='images/portrait.gif' alt='' class=\"SmallPortrait\" align=\"absmiddle\"></a></span>";
//			echo "<span class=\"msg\">";
//			echo "<div class=\"outline\">";
//			echo "<a>you</a> 发送于 $sendMessage->create_time<EXTERNAL_FRAGMENT></EXTERNAL_FRAGMENT>";
//			echo "<a href='message/deleteSendMsg?messageId=$sendMessage->message_id&userId=$sendMessage->user_id'>删除</a>";
//			echo "</div>";
//			echo "<div class=\"content\">";
//			echo "<div class=\"c\">$sendMessage->message</div>";
//			echo "</div>";
//			echo "</span>";
//			echo "<div class=\"clear\"></div>";
//			echo "</li>";
//		}
//	}
	?>
<!--   	  <li id="msg_186774">-->
<!--		<span class="sender"><a href="#" target="user"><img src="images/portrait.gif" alt="mytesting" title="mytesting" class="SmallPortrait" user="154741" align="absmiddle"></a></span>-->
<!--		<span class="msg">-->
<!--			<div class="outline">-->
<!--				<a href="#" target="user">mytesting</a>-->
<!--				发送于 2分钟前 (2011-06-18 09:01)-->
<!--				<a href="javascript:delete_out_msg(186774)">删除</a>-->
<!--			</div>-->
<!--			<div class="content">-->
<!--				<div class="c">hahaha</div>-->
<!--			</div>-->
<!--		</span>-->
<!--		<div class="clear"></div>-->
<!--	  </li>-->
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