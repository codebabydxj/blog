<?php
/* Smarty version 3.1.30, created on 2017-05-08 17:05:26
  from "E:\wamp\wamp\www\mvcb\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59108936ae1049_28132253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed8138982b56205d804b1889c462efaef09907a7' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvcb\\template\\admin\\login.html',
      1 => 1488770680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59108936ae1049_28132253 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>登录页</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/login.css" />
<body>
	<div class="box" style="background-image: url(<?php echo IMG_PATH;?>
/bjtt.jpg);background-size:100% 100% ;">
		<div class="top">
			<h3>博客后台登录页面</h3>
		</div>
		<form action="index.php?m=admin&f=index&a=check" method="post">
			用户名：<input type="text" name="aname" class="aname"/></p>
			密　码：<input type="password" name="apass" class="apass" autocomplete="off"/></p>
			验证码：<input type="text" name="code" autocomplete="off"/><p>
			<span>看不清点击换一张</span><img src="<?php echo HTTP_URL;?>
/index.php?m=admin&f=index&a=code" alt="" onclick="this.src='<?php echo HTTP_URL;?>
/index.php?m=admin&f=index&a=code&'+Math.random()"/></p>
			<input type="submit" value="登录" class="sub"/></p>
		</form>
	</div>
	
</body>
</html><?php }
}
