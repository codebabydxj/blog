<?php
/* Smarty version 3.1.30, created on 2017-05-18 04:16:03
  from "E:\wamp\wamp\www\mvc\template\index\show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591d03e3ab7486_52751739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '093709f577d416ca1daf690a3f0e302370a554b8' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvc\\template\\index\\show.html',
      1 => 1494772763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/notice.html' => 1,
  ),
),false)) {
function content_591d03e3ab7486_52751739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/show.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/show.js"><?php echo '</script'; ?>
>
<style>
	.spanleft>span{
		margin-right:10px;
		font-weight: normal;
	}
</style>
    <div class="container">
    	<div class="a_jiyu">
	      <p>主人寄语</p>
	      <p>青春是我们奋斗的资本，趁着我们年轻，把握好自己的人生航标，不要总是沉浸在风花雪月中，用我们的实际行动去谱写自己的青春。<img src="<?php echo IMG_PATH;?>
/smile.gif" alt="" /></p>
		</div>
        <h1 class="text-center spanleft">
			<?php echo $_smarty_tpl->tpl_vars['result']->value["stitle"];?>

          <br>
            <span class="author">作者:
		        <span class="name author-name" uid2="<?php echo $_smarty_tpl->tpl_vars['result']->value['uid'];?>
" sid="<?php echo $_smarty_tpl->tpl_vars['result']->value['sid'];?>
">
		        	<?php if ($_smarty_tpl->tpl_vars['result']->value["bname"]) {?>
		        	<?php echo $_smarty_tpl->tpl_vars['result']->value["bname"];?>

		        	<?php } else { ?>
					<?php echo $_smarty_tpl->tpl_vars['result']->value["uname"];?>

					<?php }?>
		        </span>
            </span>
            <span class="time">时间:
	            <span class="date">
	                <?php echo $_smarty_tpl->tpl_vars['result']->value["stime"];?>

	            </span>
            </span>
            <span class="time">阅读:
	            <span class="date">
	                <?php echo $_smarty_tpl->tpl_vars['result']->value["hits"];?>

	            </span>
            </span>
        </h1>
        
        <div class="line"></div>
        
        <div class="con">
     	<?php echo $_smarty_tpl->tpl_vars['result']->value["scon"];?>

        </div>
    
		<div class="line"></div>
        <div class="pay">
        	
		   
		 
		    <?php if ($_smarty_tpl->tpl_vars['guanzhu']->value == "me") {?>
		     
		    <?php } elseif ($_smarty_tpl->tpl_vars['guanzhu']->value == "true") {?>
		    <a href="javascript:;" class="btn btn-success guanzhu" style="display: none">关注</a>
      		<a href="javascript:;" class="btn btn-success quxiaoguanzhu">取消关注</a>
		  	<?php } elseif ($_smarty_tpl->tpl_vars['guanzhu']->value == "false") {?>
		  	<a href="javascript:;" class="btn btn-success guanzhu" >关注</a>
      		<a href="javascript:;" class="btn btn-success quxiaoguanzhu" style="display: none">取消关注</a>
      		<?php } elseif ($_smarty_tpl->tpl_vars['guanzhu']->value == "nosession") {?>
      		<a href="javascript:;" class="btn btn-success guanzhu" >关注</a>
      		<a href="javascript:;" class="btn btn-success quxiaoguanzhu" style="display: none">取消关注</a>
		    <?php }?>

		    
      		<?php if ($_smarty_tpl->tpl_vars['love']->value == "me") {?>
		     
		    <?php } elseif ($_smarty_tpl->tpl_vars['love']->value == "false") {?>
        	<a href="javascript:;" class="btn btn-success loveBtn">收藏</a>
        	<a href="javascript:;" class="btn btn-success loveCancel" style="display:none">取消收藏</a>
        	<?php } elseif ($_smarty_tpl->tpl_vars['love']->value == "true") {?>
        	<a href="javascript:;" class="btn btn-success loveBtn" style="display:none">收藏</a>
        	<a href="javascript:;" class="btn btn-success loveCancel">取消收藏</a>
        	<?php } elseif ($_smarty_tpl->tpl_vars['love']->value == "nosession") {?>
        	<a href="javascript:;" class="btn btn-success loveBtn">收藏</a>
        	<a href="javascript:;" class="btn btn-success loveCancel" style="display:none">取消收藏</a>
        	<?php }?>
        </div>
        

        <div class="submit submit1 leave">
	        <textarea  class="form-control mcon" rows="3"></textarea>
	        <a href="javascript:;" class="btn btn-primary messageBtn">留言</a>
	        <a href="javascript:;" class="btn btn-danger quxiaohuifu">取消</a>
        </div>
<!--留言部分-->
        <div class="message">
            <div class="liuyanbox" style="display: none;">
                <div class="liuyan">
	                <div class="userinfo">
	                    <div class="phone">
						 	<img src="" alt="" style="width:40px;height:40px"/>
	                    </div>
	                    <div class="info">
		                    <div class="name">xxxxx</div>
		                    <div class="time">2000-20-20</div>
	                    </div>
	                </div>
	                <div class="liuyancon">
	                   111
	                </div>
                	<!--<a href="javascript:;" class="btn btn-default replyBtn replyBtn1">回复1</a>-->
                	<a href="javascript:;" class="btn btn-default replyBtn replyBtn1">回复</a>
	                <div class="submit submit2">
		                <textarea  class="form-control" rows="3"></textarea><br>
		                <a href="javascript:;" class="btn btn-primary">回复</a>
		                <a href="javascript:;" class="btn btn-danger quxiaohuifu">取消</a>
	            	</div>
            	</div>
	            <div class="reply">
	                <div class="replylist">
	                    <div class="replycon">
	                    	<div class="phone">
								<img src="" alt="" style="width:40px;height: 40px;" id="touxiang"/>
	                    	</div>
	                       <div class="xinxi">
	                    		<span class="name">xxxx:</span>
	                       	 	<div class="time time1">2000-22-22</div>
	                    	</div>
	                        <div class="replyinfo">
			                    
	                        </div>
	                    </div>
		                <div class="replystate">
		                    <!--<a href="javascript:;" class="btn btn-default replyBtn replyBtn2" >回复2</a>-->
		                    <a href="javascript:;" class="btn btn-default replyBtn replyBtn2" >回复</a>
		                </div>
	            	</div>
	            	<div class="submit submit2">
		                <textarea  class="form-control" rows="3"></textarea><br>
		                <a href="javascript:;" class="btn btn-primary">回复</a>
		                <a href="javascript:;" class="btn btn-danger quxiaohuifu">取消</a>
	           		</div>
	          	</div>
        	</div>
			<h1 style="font-size: 18px;">留言板</h1>
            <div class="line2"></div> 
			<?php if (count($_smarty_tpl->tpl_vars['result4']->value) < 1) {?>
			<h3>还没有<span></span>留言</h3>
			<?php } else { ?>
			<h3>共有(<span><?php echo count($_smarty_tpl->tpl_vars['result4']->value);?>
</span>)条留言</h3>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result4']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<?php if ($_smarty_tpl->tpl_vars['v']->value["pid"] == 0) {?>
            <div class="liuyanbox">
                <div class="liuyan">
	                <div class="userinfo">
	                    <div class="phone">
							<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
" alt="" style="width:40px;height:40px"/>
	                    </div>
	                    <div class="info"> 
	                    	<?php if ($_smarty_tpl->tpl_vars['v']->value["bname"]) {?>
	                    	<div class="name"><?php echo $_smarty_tpl->tpl_vars['v']->value["bname"];?>
</div>
	                    	<?php } else { ?>
		                    <div class="name"><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</div>
		                    <?php }?>
	                    </div>
	                </div>
	                <div class="liuyancon">
	                   <?php echo $_smarty_tpl->tpl_vars['v']->value["mcon"];?>

	                   <div class="time"><?php echo $_smarty_tpl->tpl_vars['v']->value["mtime"];?>
</div>
	                </div>
                	<!--<a href="javascript:;" class="btn btn-default replyBtn replyBtn1" uid2="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid1'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">回复1</a>-->
                	<a href="javascript:;" class="btn btn-default replyBtn replyBtn1" uid2="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid1'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">回复</a>
	                <div class="submit submit2">
		                <textarea  class="form-control" rows="3"></textarea><br>
		                <a href="javascript:;" class="btn btn-primary replyBtn3">回复</a>
		                <a href="javascript:;" class="btn btn-danger quxiaohuifu">取消</a>
	            	</div>
	            </div>
            </div>
         	<?php }?>
         	<?php if (count($_smarty_tpl->tpl_vars['son']->value) > 1) {?>
         	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['son']->value, 'v1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
?>
         	<?php if ($_smarty_tpl->tpl_vars['v1']->value) {?>
         	<?php if ($_smarty_tpl->tpl_vars['v1']->value["pid"] == $_smarty_tpl->tpl_vars['v']->value["mid"]) {?>
            <div class="reply">
                <div class="replylist">
                    <div class="replycon">
                    	<div class="phone">
							<img src="<?php echo $_smarty_tpl->tpl_vars['v1']->value['photo'];?>
" alt="" style="width:40px;height: 40px;" id="touxiang"/>
                    	</div>
                        <div class="xinxi">
                        	<?php if ($_smarty_tpl->tpl_vars['v1']->value["bname"]) {?>
                        	<div class="name"><?php echo $_smarty_tpl->tpl_vars['v1']->value['bname'];?>
</div>
                        	<?php } else { ?>
                    		<div class="name"><?php echo $_smarty_tpl->tpl_vars['v1']->value['uname'];?>
</div>
                    		<?php }?>
                    	</div>
                    </div>
                    <div class="replyinfo">
	                      <?php echo $_smarty_tpl->tpl_vars['v1']->value["mcon"];?>

	                      <div class="time"><?php echo $_smarty_tpl->tpl_vars['v1']->value["mtime"];?>
</div>
                    </div>
	                <div class="replystate">
	                    <!--<a href="javascript:;" class="btn btn-default replyBtn replyBtn2" uid2="<?php echo $_smarty_tpl->tpl_vars['v1']->value['uid1'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">回复2</a>-->
	                    <a href="javascript:;" class="btn btn-default replyBtn replyBtn2" uid2="<?php echo $_smarty_tpl->tpl_vars['v1']->value['uid1'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">回复</a>
	                </div>
            	</div>
            	<div class="submit submit2">
	                <textarea  class="form-control" rows="3"></textarea><br>
	                <a href="javascript:;" class="btn btn-primary replyBtn3">回复</a>
	                <a href="javascript:;" class="btn btn-danger quxiaohuifu">取消</a>
           		</div>
          	</div>
          	<?php }?>
          	<?php }?>
          	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          	<?php }?>
          	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          	<?php }?>
          	
          	
        </div>





    </div>

   <?php $_smarty_tpl->_subTemplateRender("file:index/notice.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <div class="notice">操作成功</div>
<div class="mask">

</div>
	</body>
</html>
<?php }
}
