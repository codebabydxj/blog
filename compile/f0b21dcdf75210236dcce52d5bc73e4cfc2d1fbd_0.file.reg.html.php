<?php
/* Smarty version 3.1.30, created on 2017-05-08 17:20:19
  from "E:\wamp\wamp\www\mvcb\template\index\reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59108cb3eadea0_42883719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0b21dcdf75210236dcce52d5bc73e4cfc2d1fbd' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvcb\\template\\index\\reg.html',
      1 => 1489055521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59108cb3eadea0_42883719 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css" />
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/reg.css" />
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/reg.js"><?php echo '</script'; ?>
>
	<body>
		<div class="box">
			<div class="top">
				<h3>欢迎注册</h3>
				<span>已有账户请<a href="index.php?m=index&f=index&a=login">点击登录</a></span>
				<a href="index.php" style="margin-left:40px">返回首页</a>
			</div>
			<div class="foot">
				<form action="index.php?m=index&f=user&a=regUser" method="post" id="form">
					用户名：<input type="text" name="uname" class="form-control" id="uname" autocomplete="off"/>
					<label id="uname-error" class="error" for="uname"></label><br />
					密　码：<input type="password" class="form-control" name="upass" id="upass" autocomplete="off" />
					<label id="upass-error" class="error" for="upass"></label><br />
					再次输入密码：<input type="password" class="form-control" name="upass1" id="upass1" autocomplete="off" />
					<label id="upass1-error" class="error" for="upass1"></label><br />
					<input type="submit" value="立即注册" class="btn btn-default" name="btn"/><br><br>
				</form>
			</div>
			
			
		</div>
	</body>
</html>
<?php }
}
