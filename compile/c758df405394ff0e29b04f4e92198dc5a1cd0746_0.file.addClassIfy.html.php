<?php
/* Smarty version 3.1.30, created on 2017-05-12 18:56:20
  from "E:\wamp\wamp\www\mvc\template\admin\addClassIfy.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5915e934002587_74554825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c758df405394ff0e29b04f4e92198dc5a1cd0746' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvc\\template\\admin\\addClassIfy.html',
      1 => 1488857682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5915e934002587_74554825 (Smarty_Internal_Template $_smarty_tpl) {
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
/admin/addClassIfy.css" />
	<body style="background-color: rgba(0, 0, 0, 0);">
		<div>
			<form action="index.php?m=admin&f=addClassIfy&a=addClassIfyInfo" method="post">
				上级分类：<select name="pid" class="form-control">
							<option value="0">一级分类</option>
							<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>

						</select>
						</p>
				分类名称：<input type="text" name="cname" class="form-control"/></p>
				<input type="submit" class="btn btn-default" value="提交"/>
			</form>
		</div>
		
	</body>
</html>
<?php }
}
