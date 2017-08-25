<?php
/* Smarty version 3.1.30, created on 2017-05-14 04:45:35
  from "E:\wamp\wamp\www\mvc\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5917c4cfbab267_87520151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17567ac65bf50c9a971593ddc244981ea23814de' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvc\\template\\admin\\login.html',
      1 => 1494729718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5917c4cfbab267_87520151 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>后台登录页</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/login.css" />
<body>
	<div class="box">
		<div class="top">
			<h3 style="color:#000;">后台登录</h3>
		</div>
		<form action="index.php?m=admin&f=index&a=check" method="post">
			用户名：<input type="text" name="aname" class="aname" autocomplete="off"/></p>
			密　码：<input type="password" name="apass" class="apass" autocomplete="off"/></p>
			验证码：<input type="text" name="code" autocomplete="off"/><p>
			<img src="<?php echo HTTP_URL;?>
/index.php?m=admin&f=index&a=code" alt="" onclick="this.src='<?php echo HTTP_URL;?>
/index.php?m=admin&f=index&a=code&'+Math.random()"/></p>
			<span>点击换图片</span><br/><br/>
			<input type="submit" value="登录" class="sub"/></p>
		</form>
	</div>
	
</body>
</html><?php }
}
