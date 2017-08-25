<?php
/* Smarty version 3.1.30, created on 2017-05-26 18:42:41
  from "E:\wamp\wamp\www\mvc\template\admin\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59285b01693a06_08574738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08d0616145d8e97b79563807a5ea8539d79b0d86' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvc\\template\\admin\\message.html',
      1 => 1495816892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59285b01693a06_08574738 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>提示信息</title>
</head>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/jquery.min.js"><?php echo '</script'; ?>
>
<style type="text/css">
	html,body{
		padding: 0;margin: 0;
		width: vw;height: 100vh;overflow: hidden;
		
	}
	.zhao{
		width: 100%;height: 100%;position: relative;
	}
	.zhao img{
		width: 100%;height: 100%;
	}
	.zhezhao{
		width: 100%;height: 100%;background: rgba(0,0,0,0.5);position: absolute;left: 0;top:0;
	}
	@font-face {
		font-family: 'iconfont';
		src: url('<?php echo FONT_PATH;?>
/iconfont.eot');
		src: url('<?php echo FONT_PATH;?>
/iconfont.eot?#iefix') format('embedded-opentype'),
			 url('<?php echo FONT_PATH;?>
/iconfont.woff') format('woff'),
		     url('<?php echo FONT_PATH;?>
/iconfont.ttf') format('truetype'),
		     url('<?php echo FONT_PATH;?>
/iconfont.svg#iconfont') format('svg');
	}
	.iconfont{
		font-family:"iconfont" !important;
		font-size:16px;font-style:normal;
		-webkit-font-smoothing: antialiased;
		-webkit-text-stroke-width: 0.2px;
		-moz-osx-font-smoothing: grayscale;
	}
	.box{
		width: 350px;height: 300px;
		position: fixed;
		top: 0;bottom: 0;left: 0;right: 0;
		margin:auto;
		text-align: center;
		background: #fff;
		border-radius:10px;
		overflow: hidden;
		box-shadow:3px 3px 10px rgba(0,0,0,.3);
	}
	.tishi{
		width:100%;
		height: 50px;
		background: #1f7ed0;
	}
	.icon{
		margin-top: 20px;
	}
	.icon>.iconfont{
		font-size: 60px;
		color: #22AE09;
	}
	.chenggong{
		font-size: 20px;
		margin-top: 10px;
	}
	p{
		color: #333;
	}
	span{
		font-size: 20px;
		color: #22AE09;
		padding: 0 5px;
	}
	a{
		padding: 8px 20px;
		text-align: center;
		line-height: 40px;
		background:  #1f7ed0;
		text-decoration: none;
		color: #fff;
		border-radius: 5px;
	}
</style>
<?php echo '<script'; ?>
>
    $(function(){
        var num=3;
        $("span").text(num);
        var t=setInterval(function(){
            num--;
            $("span").text(num);
            if(num==0){
                clearInterval(t);
                var aa=$("a").attr("href");
                location.href=aa;
            }
        },1000)
    })
<?php echo '</script'; ?>
>
<body>
	<div class="zhao">
		<img src="<?php echo IMG_PATH;?>
/jump1.jpg" alt="" />
		<div class="zhezhao"></div>
	<div class="box">
		<div class="tishi"></div>
		<div class="icon"><i class="iconfont">&#xe629;</i></div>
		<div class="chenggong"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
		<p><span>3</span>秒后返回！</p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">确认</a>
	</div>
	</div>
</body>
</html>

<?php }
}
