<?php
// 入口文件
	define("MVC","yes");
//	var_dump($_SERVER); //打印服务器信息

	define("ROOT_URL",__DIR__);//根目录路径
	define("LIBS_URL",ROOT_URL."/libs");//libs的路径
	define("TPL_INDEX_URL",ROOT_URL."/template/index");//前台模板路径
	define("TPL_ADMIN_URL",ROOT_URL."/template/admin");//后台模板路径
	define("HTTP_URL","http://".$_SERVER["SERVER_NAME"].substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],"/")));//文件根目录的地址
	define("FILE_URL",$_SERVER["SCRIPT_NAME"]);//入口文件路径
	
	define("CSS_PATH",HTTP_URL."/static/css");//css文件路径
	define("JS_PATH",HTTP_URL."/static/js");//js文件路径
	define("IMG_PATH",HTTP_URL."/static/images");//图片文件路径
	define("FONT_PATH",HTTP_URL."/static/font");//引入图形字体样式
	define("FONTS_PATH",HTTP_URL."/static/fonts");
	define("EDIT_PATH",HTTP_URL."/static/edit");//引入编辑器
	
	include LIBS_URL."/db.class.php";//引入SQL语句函数
	include LIBS_URL."/session.class.php";
	require "code.class.php";//引入验证码
	require LIBS_URL."/pages.class.php";//引入分页
	require LIBS_URL."/indexMain.class.php";
	require LIBS_URL."/functions.php";
	include LIBS_URL."/main.class.php";//引入主函数
	include LIBS_URL."/route.class.php";//路由
	require LIBS_URL."/smarty/Smarty.class.php";//引入smarty
	
	$route=new route();
	$route->init();
	
