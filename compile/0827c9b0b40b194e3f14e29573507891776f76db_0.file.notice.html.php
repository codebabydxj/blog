<?php
/* Smarty version 3.1.30, created on 2017-05-08 16:41:17
  from "E:\wamp\wamp\www\mvcb\template\index\notice.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5910838d7a79d8_36240956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0827c9b0b40b194e3f14e29573507891776f76db' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvcb\\template\\index\\notice.html',
      1 => 1494063941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5910838d7a79d8_36240956 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
    .notice-login{
        padding:30px 0;
        width:200px;
        background: #ccc;
        border-radius: 5px;
        text-align: center;
        line-height: 20px;
        position: fixed;
        left:0;top:40%;right:0;bottom: 40%;
        margin:auto;
        display: none;
        z-index: 100;
    }
    span,a{
    	font-size: 16px;
    }
</style>
<div class="notice-login">
    <span>请先</span> <a href="index.php?m=index&f=index&a=login">登陆 </a><span>再进行操作</span><br>
    
    <a href="javascript:;" class="btn btn-danger quxiao" style="margin-top:20px;">取消登陆</a>
</div><?php }
}
