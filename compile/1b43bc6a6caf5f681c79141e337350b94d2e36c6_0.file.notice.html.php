<?php
/* Smarty version 3.1.30, created on 2017-05-06 11:45:42
  from "E:\wamp\www\mvc\template\index\notice.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590d9b46ec8f03_86426576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b43bc6a6caf5f681c79141e337350b94d2e36c6' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\index\\notice.html',
      1 => 1494063941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590d9b46ec8f03_86426576 (Smarty_Internal_Template $_smarty_tpl) {
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
