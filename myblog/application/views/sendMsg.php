<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
  <base href="<?php echo site_url();?>">
  <title>测试文章2 -  Johnny的博客 - SYSIT个人博客</title>
    <link rel="stylesheet" href="css/space2011.css" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/jquery.css" media="screen">
  <script type="text/javascript" src="js/jquery-1.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery_002.js"></script>
  <script type="text/javascript" src="js/oschina.js"></script>
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
<?php include 'top.php'?>
	<div id="OSC_Content"><div class="SpaceChannel">
			<div id="portrait"><a href="user/user_index?writer=<?php echo $receiver->USER_ID;?>"><img src="images/<?php echo $receiver->IMG;?>"></a></div>
	    	<div id="lnks">
				<strong><?php echo $receiver->NAME;?>的博客</strong>
				<div>
					<a href="user/user_index?writer=<?php echo $receiver->USER_ID;?>">TA的博客列表</a>&nbsp;
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
<div class="Blog">
<div style="width: auto; height: auto; overflow: auto; position: relative;"><style>
.error_msg {display:none;color:#C00;padding:3px 3px 3px 20px;margin:0 0 10px 0;}
.error_msg a {margin:0 5px;}

.success_msg {
	margin:0 0 10px 0;
	display:none;
	font-size:12pt;
	color:#40AA53;
	padding:50px 0;
	text-align:center;
	font-wight:bold;
}
.success_msg a {margin:0 5px;color:#40AA53;}

#AjaxBox {
	text-align:left;
}

#AjaxBox #Title {
	padding:5px 0 5px 10px;
	background:#40AA53;
	color:#fff;
    font-size: 10pt; 
    font-weight:bold;
	margin-bottom:10px;
}

#AjaxBox #Title a {color:#ff0;margin:0 3px;}

/** 表单 **/

#AjaxBox form {}
#AjaxBox form .SUBMIT {font-weight:bold;}
#AjaxBox form input {padding:1px 2px;}
#AjaxBox form textarea {background:#ffd;border:1px solid #ccc;padding:2px;}
#AjaxBox form tr.submit td {padding-top:20px;}

#AjaxBox form table {}
#AjaxBox form table tr th {text-align:right;}
#AjaxBox form table tr td {padding:0 0 5px 0;}
#AjaxBox form table tr td.heading {font-weight:bold;padding:0;}
#AjaxBox form table tr td span.Tip {color:#F90;margin-left:10px;}
#AjaxBox form table tr td span.Tip a {margin:0 5px;}
#AjaxBox form table tr td input {padding:2px;}
#AjaxBox form table tr td input.focusField {background:#ffc;}
#AjaxBox form table tr td textarea {font-size:10pt;line-height:20px;padding:2px;}
#AjaxBox form table tr.submit td input {font-size:10pt;padding:2px 5px;}

#AjaxBox img#img_vcode {border:2px solid #9AF;}

/* 表单 */
#AjaxBox form h2 {font-size:12pt; border-bottom:1px solid #ccc;margin:0;padding:10px 0 10px 20px}
#AjaxBox form h2 a {margin:0 5px;}

#AjaxBox form tr.Tip td ol {
	list-style-position:inside;
	padding:5px 2px;
	border:1px solid #09F;
	line-height:22px;
	color:#06F;
}

#AjaxBox form tr.Tip td ol li.first {font-weight:bold;padding-left:0px;font-size:10.5pt;}
#AjaxBox form tr.Tip td ol li {padding-left:10px;}

#OSChinaLoginTip {margin:10px 0 0 0;font-size:10pt;padding:0 0 5px 0;color:#060;}
#OSChinaLoginTip ul {margin:10px 0 0 0;}
#OSChinaLoginTip ul li {float:left; width:90px;margin-right:30px;}
#OSChinaLoginTip ul li#openid_gmail img {margin-top:8px;}
#OSChinaLoginTip ul li#openid_yahoo img {margin-top:15px;}
#OSChinaLoginTip ul li#openid_msn img {}
#OSChinaLoginTip ul li a {display:block;height:40px;}
#OSChinaLoginTip ul li a {border:1px solid #fff;padding:2px;}
#OSChinaLoginTip ul li a:hover {border:1px solid #40AA53;background:#cfc;}
</style>
<div id="AjaxBox">
	<h2 id="Title">发送留言给 <u><?php echo $receiver->NAME;?></u></h2>
	<div id="Content"><div id="s_error_msg" class="error_msg"></div>
<div id="s_success_msg" class="success_msg"></div>
<form id="frm_sendmsg" action="message/add_msg?receiver=<?php echo $receiver->USER_ID?>" method="POST">
<table>
<tbody><tr><td class="heading">留言内容(最多250个字): </td></tr>
<tr><td><textarea id="ta_msg_content" name="content" style="width: 400px; height: 120px; padding: 2px; overflow: hidden;"></textarea></td></tr>
<tr class="submit">
	<td>
	<input value="发送»" class="SUBMIT" type="submit">
	<a href="user/user_index?writer=<?php echo $receiver->USER_ID;?>">取消</a>
	</td>
</tr>
</tbody></table>
</form>
</div>
</div>
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
<script type="text/javascript" src="js/blog.htm" defer="defer"></script>
<script type="text/javascript" src="js/brush.js"></script>
<link type="text/css" rel="stylesheet" href="css/shCore.css">
<link type="text/css" rel="stylesheet" href="css/shThemeDefault.css">

</div>
	<div class="clear"></div>
	<div id="OSC_Footer">© 赛斯特(WWW.SYSIT.ORG)</div>
</div>
</body></html>