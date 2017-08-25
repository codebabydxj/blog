<?php
/* Smarty version 3.1.30, created on 2017-05-21 18:08:12
  from "E:\wamp\wamp\www\mvc\template\index\write.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5921bb6cd372a9_42296690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d9ea07bc41541fb7b583580e9ceae2bea7739eb' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvc\\template\\index\\write.html',
      1 => 1495382890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5921bb6cd372a9_42296690 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/write.css" />
    <?php echo '<script'; ?>
 src="<?php echo EDIT_PATH;?>
/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo EDIT_PATH;?>
/ueditor.all.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="header">
		<div class="top_h">
		  <span class="bianji">写日记</span>
		  <!--<span class="user">欢迎<span id="uname"><?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</span>编辑自己的文章</span>-->
		  <a href="index.php" class="return">返回首页</a>
	    </div>  
	</div>
	<div class="foot">
		<form action="index.php?m=index&f=art&a=add" method="post">
		
		    <div class="form-group">
		        <label for="cid">选择分类</label>
		        <select class="form-control" name="cid" id="cid">
		            <option value="0">一级分类</option>
		          <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

		        </select>
		    </div>
		
		
		    <div class="form-group">
		        <label for="stitle">文章标题</label>
		        <input type="text" class="form-control" id="stitle" name="stitle" value="" placeholder="标题">
		    </div>
		
		    <div class="form-group">
		        <label for="scon">文章内容</label>
		        <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:1070px;height:500px;" name="scon"><?php echo '</script'; ?>
>
		    </div>
		
		    <button type="submit" class="btn btn-default" style="margin-bottom:20px" id="checked" >提交</button>
		</form>
	</div>
	<?php echo '<script'; ?>
>
	    var ue = UE.getEditor('editor');
//	    var checked=document.querySelector("#checked");
//	    var stitle=document.querySelector("#stitle");
//	    var sv=stitle.value;
//	    checked.onclick=function(){
//	    	if(sv==""){
//	    	   alert("请填写标题或内容");
//	    	   checked.setAttribute("disabled","disabled");
//	        }
//	    }
	    
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
