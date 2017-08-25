<?php
/* Smarty version 3.1.30, created on 2017-05-21 16:50:44
  from "E:\wamp\wamp\www\mvc\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5921a944d2b359_69761276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b69350f15e0ad3153d1dc6ffacad3f4503d4673c' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvc\\template\\index\\index.html',
      1 => 1495378175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/notice.html' => 1,
  ),
),false)) {
function content_5921a944d2b359_69761276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/mui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/index.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/index.css" />
<style>
	.clearmoren span,.clearmoren a{
		font-size:16px!important;
		color:#454545!important;
		background-color:rgba(0,0,0,0)!important ;
		cursor: pointer;
	}
	.clearmoren span.stitle{
		transition: margin-left 0.5s linear;
	}
	.clearmoren span.stitle:hover{
		margin-left:20px;
	}
	.clearmoren p{
		font-size:12px ;
	}
</style>
<!--文章动态-->
<div class="container main">
    <div class="row">
    	<div class="col-sm-4 main-left">
    		<?php if ($_smarty_tpl->tpl_vars['uname']->value) {?>
			<div class="top">
				<div class="photoimg">
					<img src="<?php echo $_smarty_tpl->tpl_vars['result3']->value['photo'];?>
" alt="">
					<div class="names">青轻飞扬</div>
				</div>
				<h1 class="yulu"><?php echo $_smarty_tpl->tpl_vars['result3']->value['introduce'];?>
</h1>
			</div>
			<?php } else { ?>
			<div class="top">
				<div class="photoimg">
					<img src="<?php echo IMG_PATH;?>
/timgs.jpg" alt="">
					<div class="names">青轻飞扬</div>
				</div>
			</div>
			<?php }?>
			<div class="jiyu">
				<h1>执子之手，与子偕老</h1>
				<p>于千万人之中，我遇见了我所遇见的人. . . .</p>
			</div>
            <div class="list-group bang">
                <a href="javascript:;" class="active">
                   			热门榜
                </a>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liulan']->value, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value) {
?>
                <a href="index.php?m=index&f=index&a=show&id=<?php echo $_smarty_tpl->tpl_vars['x']->value['sid'];?>
" class="list-group-item" style=""><?php echo $_smarty_tpl->tpl_vars['x']->value["stitle"];?>
  (<?php echo $_smarty_tpl->tpl_vars['x']->value["hits"];?>
)</a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
            <div class="list-group">
                <a href="javascript:;" class="active">
                   			 新鲜事
                </a>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dianzan']->value, 'y');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['y']->value) {
?>
                <a href="index.php?m=index&f=index&a=show&id=<?php echo $_smarty_tpl->tpl_vars['x']->value['sid'];?>
" class="list-group-item" ><?php echo $_smarty_tpl->tpl_vars['y']->value["stitle"];?>
  (<?php echo $_smarty_tpl->tpl_vars['y']->value["good"];?>
)</a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
        <div class="col-sm-8 main-right neirong">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <div class="usercon">
            	 <!--头像部分-->
	            <div class="container-fluid">
	                <div class="row user">
	                    <div class="photo">
	                    	<?php if ($_smarty_tpl->tpl_vars['v']->value['photo']) {?>
	                 		<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
" alt="" />
	                 		<?php } else { ?>
	                 		<img src="<?php echo IMG_PATH;?>
/timgs.jpg" alt="" />
	                 		<?php }?>
	                    </div>
	                    <div class="col-sm-2 photoes username">
	                    	<?php if ($_smarty_tpl->tpl_vars['v']->value["bname"]) {?>
	                        <a href="index.php?m=index&f=index&a=you&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["bname"];?>
</a>
	                        <?php } else { ?>
	                        <a href="index.php?m=index&f=index&a=you&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</a>
	                        <?php }?>
	                    </div>
	                    <div class="col-sm-2 photoes times">
	                       <span>发表时间:<?php echo $_smarty_tpl->tpl_vars['v']->value["stime"];?>
</span>
	                    </div>
	                </div>
	            </div>
	            <div class="line"></div>
	            <!--具体的内容-->
	            <ul class="mui-table-view clearmoren mui-table-view-cell" style="max-height: 126px;">
	                <li class="mui-table-view-cell mui-media">
	                    <!--<a href="index.php?m=index&f=index&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">-->
	                        <div class="mui-media-body">
	                        	<img style="width: 25px;height:30px;margin-right: 10px;" src="<?php echo IMG_PATH;?>
/title.png" alt="" />
	                       		<span class="stitle"><a href="index.php?m=index&f=index&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a></span>
	                            <p style="text-indent:2em" class=" scon" ><?php echo $_smarty_tpl->tpl_vars['v']->value["scon"];?>
</p>
	                        </div>
	                    </a>
	                </li>
	            </ul>
	            <?php $_smarty_tpl->_assignInScope('i', 0);
?>
	            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dianzan']->value, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value) {
?>
	            <?php if ($_smarty_tpl->tpl_vars['x']->value["sid"] == $_smarty_tpl->tpl_vars['v']->value["sid"]) {?>
	            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['x']->value["good"]);
?>
	            <?php }?>
	            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        		<a href="javascript:;" class="dianzan"  sid="<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" style="font-size: 12px;color:#666;float: right;margin:11px 50px;margin-left: 10px;">赞 <span style="font-size: 13px;color:#666;"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span></a>
            	<a href="index.php?m=index&f=index&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" style="font-size: 12px;color:#666;float: right;margin:12px 0px;">阅读全文</a>
                
	        </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
</div>
<div class="footer">
	<div class="write">
		<img src="<?php echo IMG_PATH;?>
/timgs.jpg" alt="">
	</div>
	<div class="info">
		<a href="#">青轻飞扬</a>
		<p>没有伞的孩子必须努力奔跑！</p>
	</div>
	<div class="Copyright">
		<ul class="link">
		<li>帮助中心</li>
		<li>|</li>
		<li>空间客服</li>
		<li>|</li>
		<li>投诉中心</li>
		<li>|</li>
		<li>空间协议</li>
	   </ul>
	</div>
	<p class="des">Design by DanceSmile</p>
</div>
   <div class="mask"> </div>
   <?php $_smarty_tpl->_subTemplateRender("file:index/notice.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <div class="notice">操作成功</div>
	</body>
</html>
<?php }
}
