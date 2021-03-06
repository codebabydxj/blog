<?php
/* Smarty version 3.1.30, created on 2017-05-13 19:52:07
  from "E:\wamp\wamp\www\mvc\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591747c7b31709_78068411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42589b6fbef73c9f3fb03f0bd7fe796bed322cf0' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvc\\template\\index\\login.html',
      1 => 1494697516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591747c7b31709_78068411 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>博客登录中心</title>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/style.css">
<link rel="stylesheet" href="<?php echo FONTS_PATH;?>
/iconfont.css">
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
/index/login.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/reg.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="login-banner"></div>
	<div class="login-box">
	    <div class="box-con tran">
	        <!-- 登录 -->
	        <form action="index.php?m=index&f=index&a=check" method="post" id="form1" name="form1">
				<div class="login-con f-l">
				    <div class="form-group">
						<input type="text" placeholder="账号" id="username" name="uname" autocomplete="off">
					</div>
					<div class="form-group">
						<input type="password" placeholder="密码" id="Password1" name="upass" autocomplete="off">
					</div>
					<div class="form-group yanzheng">
						<input type="text" placeholder="验证码" id="code" name="code">
						<img src="<?php echo HTTP_URL;?>
/index.php?m=admin&f=index&a=code" alt="验证码" title="点击更换" class="code" onclick="this.src='<?php echo HTTP_URL;?>
/index.php?m=admin&f=index&a=code&'+Math.random()">
					</div>
					<div class="form-group">
						<button type="submit" class="tran pr">
							<span class="tran">登录</span>
							<img class="loading" src="<?php echo IMG_PATH;?>
/loading.gif" style="display:block">
						</button>
					</div>
					<div class="from-line"></div>
					<div class="form-group">
						<a href="javascript:;" class="move-signup a-tag tran blue-border">还没有帐号？免费注册<i class="iconfont tran">&#xe606;</i></a>
					</div>
					<div class="form-group">
						<a href="index.php" class="a-tag tran">返回首页<i class="iconfont tran">&#xe606;</i></a>
					</div>
				</div>
			</form>
	    	<!-- 注册 -->
	    	<form action="index.php?m=index&f=user&a=regUser" method="post" id="form2" name="form2">
	    		<div class="signup f-l">
	    	        <div class="form-group">
						<input type="text" placeholder="申请账号" id="usernamer" name="uname1" autocomplete="off">
					</div>
					<div class="form-group">
						<input type="password" placeholder="密 码（字母或数字，至少6位）" id="Password1r"  name="upass1" autocomplete="off">
					</div>
					<div class="form-group">
						<input type="password" placeholder="确认密码" id="Password2r" name="upass2" autocomplete="off">
					</div>
					<div class="form-group">
						<button type="submit" class="tran pr">
							<span class="tran" id="zc">注册</span>
						</button>
					</div>
					<p class="view-clause">点击注册，即同意我们的 <a href="#">用户隐私条款</a></p>
					<div class="from-line"></div>
					<div class="form-group">
						<a href="javascript:;" class="move-login a-tag tran blue-border">已有帐号？登录<i class="iconfont tran">&#xe606;</i></a>
					</div>
					<div class="form-group">
						<a href="index.php" class="a-tag tran">返回首页<i class="iconfont tran">&#xe606;</i></a>
					</div>
	    		</div>
	    	</form>
	    </div>
	</div>
	</body>
	<?php echo '<script'; ?>
>
		$(function(){
			//步骤切换
			var _boxCon=$(".box-con");
            //切换登录
			$(".move-login").on("click",function(){

				$(_boxCon).css({

					'marginLeft':0

				})

			});
            //切换注册
			$(".move-signup").on("click",function(){

				$(_boxCon).css({

					'marginLeft':-320

				})

			});
            //切换第三方登录
			$(".move-other").on("click",function(){

				$(_boxCon).css({

					'marginLeft':-640

				})

			});
		});
	<?php echo '</script'; ?>
>
</html>
<?php }
}
