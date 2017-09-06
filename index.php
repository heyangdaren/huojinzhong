<?php 
	// 引入autoload自动加载文件
	include 'vendor/autoload.php';
	// 此时需要修改json的配置项，加入autoload配置，注意：修改json文件时，必须要在cmd中输入composer dump才可生效
	\core\Boot::run();
 ?>