<?php
header("content-type:text/html;charset=utf-8");

define("BIND_MODULE","Home");
define("APP_PATH","app/");
define("APP_DEBUG",true);
define("BUILD_DIR_SECURE",true);

include_once "lib/ThinkPHP/ThinkPHP.php";