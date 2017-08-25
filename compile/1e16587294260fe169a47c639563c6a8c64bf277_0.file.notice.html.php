<?php
/* Smarty version 3.1.30, created on 2017-05-13 18:04:00
  from "E:\wamp\wamp\www\mvc\template\index\notice.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59172e704820d0_96012657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e16587294260fe169a47c639563c6a8c64bf277' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\mvc\\template\\index\\notice.html',
      1 => 1494691439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59172e704820d0_96012657 (Smarty_Internal_Template $_smarty_tpl) {
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
        overflow:hidden;
    }
    span,a{
    	font-size: 14px;
    }
    .notice-login span{
    	color: #fff;
    }
    .notice-login .cdl{
    	width: 100%;height: 50px;background: green;position: absolute;left: 0;top:0;line-height: 50px;
    }
</style>
<div class="notice-login">
    <div class="cdl"><span>请先</span><a href="index.php?m=index&f=index&a=login">登录 </a><span>再操作</span></div><br>
    <a href="javascript:;" class="btn btn-info quxiao" style="margin-top:20px;">取消登录</a>
</div><?php }
}
