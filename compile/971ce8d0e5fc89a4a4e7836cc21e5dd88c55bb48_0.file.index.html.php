<?php
/* Smarty version 3.1.30, created on 2017-05-14 04:13:49
  from "E:\wamp\wamp\www\mvc\template\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5917bd5d001f90_58081294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '971ce8d0e5fc89a4a4e7836cc21e5dd88c55bb48' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvc\\template\\admin\\index.html',
      1 => 1494728026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5917bd5d001f90_58081294 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/index.css">
</head>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/index.js"><?php echo '</script'; ?>
>

<body>
<div class="header">
    <h2>欢迎<?php echo $_smarty_tpl->tpl_vars['aname']->value;?>
来到博客管理中心</h2>
    <h5><a href="index.php?m=admin&f=index&a=logout">退出登录</a></h5>
</div>
<div class="bottom">
    <div class="left">
        <ul>
            <li>
                <span class="opi"><i></i>博客home<b></b></span>
                <ul class="son">
                    <li><a href="index.php" target="_blank">回到前台主页</a></li>
                </ul>
            </li>
            <li>
                <span class="opi"><i></i>用户管理<b></b></span>
                <ul class="son">
                    <li><a href="index.php?m=admin&f=category&a=addUser" target="right">注册用户</a></li>
                    <li><a href="index.php?m=admin&f=category&a=manageUser" target="right">管理用户</a></li>
                </ul>
            </li>
            <li>
                <span class="opi"><i></i>分类管理<b></b></span>
                <ul class="son">
                    <li><a href="index.php?m=admin&f=category&a=addClassIfy"  target="right">添加分类</a></li>
                    <li><a href="index.php?m=admin&f=addClassIfy&a=controlClassIfy" target="right">管理分类</a></li>
                </ul>
            </li>
            <li>
                <span class="opi"><i></i>内容管理<b></b></span>
                <ul class="son">
                    <li><a href="index.php?m=admin&f=artShows&a=addShows" target="right">添加内容</a></li>
                    <li><a href="index.php?m=admin&f=artShows&a=shows" target="right">管理内容</a></li>
                </ul>
            </li>
            <li>
                <span class="opi"><i></i>推荐位管理<b></b></span>
                <ul class="son">
                    <li><a href="#" target="right">添加推荐位</a></li>
                    <li><a href="#" target="right">管理推荐位</a></li>
                </ul>
            </li>
        </ul>

    </div>
    <div class="right">
        <iframe src="" frameborder="0" name="right">

        </iframe>
    </div>
</div>
</body>
</html><?php }
}
