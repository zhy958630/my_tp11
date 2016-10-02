<?php
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
echo "<meta charset='utf-8' />";
define('APP_DEBUG',true);  //调试模式

//自动生成目录
//define('BIND_MODULE','Admin');

define('APP_PATH','./Application/');

//引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
?> 