<?php
/* Smarty version 3.1.30, created on 2017-05-21 15:59:57
  from "E:\wamp\wamp\www\mvc\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59219d5d98edf2_79117050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0be3966537ba590ea57b80af7c44b54247724f1' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvc\\template\\index\\header.html',
      1 => 1495375163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59219d5d98edf2_79117050 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>博客</title>
	</head>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css" />
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/index.css" />
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
	<body>
		<div class="header">
			<div class="top_h">
			<a href="index.php" class="shouye">博客园</a>
			<ul class="right">
				<?php if ($_smarty_tpl->tpl_vars['uname']->value) {?>
					<?php if ($_smarty_tpl->tpl_vars['result3']->value['bname']) {?>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['result3']->value['photo']) {?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['result3']->value['photo'];?>
" alt="" />
					<?php } else { ?>
					<img src="<?php echo IMG_PATH;?>
/timgs.jpg" alt="" />
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['result3']->value['bname'];?>
</li>
				<li><a href="index.php?m=index&f=index&a=logout">退出登录</a></li>
				<li><a href="index.php?m=index&f=index&a=self">个人中心</a></li>
					<?php } else { ?>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['result3']->value['photo']) {?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['result3']->value['photo'];?>
" alt="" />
					<?php } else { ?>
					<img src="<?php echo IMG_PATH;?>
/timgs.jpg" alt="" />
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</li>
				<li><a href="index.php?m=index&f=index&a=logout">退出登录</a></li>
				<li><a href="index.php?m=index&f=index&a=self">个人中心</a></li>
					<?php }?>
				<?php } else { ?>
				<li><a href="index.php?m=index&f=index&a=login">登录</a></li>
				<?php }?>
				<li><a href="index.php?m=index&f=index&a=write">写日记</a></li>
			</ul>
		</div>
		</div>
<?php }
}
