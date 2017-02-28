<?php

define('BASE_PATH',substr(realpath(__DIR__),0,strripos(__DIR__,'/')));

define('APP_PATH',BASE_PATH . '/app');

define('PUBLIC_PATH',BASE_PATH . '/public/');

define('CONFIG_PATH',BASE_PATH . '/config');

define('VIEW_PATH',APP_PATH . '/view/');

define('CONTROLLER_PATH',APP_PATH . '/controller/');

require_once APP_PATH . '/app.php';

// require_once APP_PATH . '/urlconfig.php';


\app\engine::run();





















































// echo APP_PATH.'</br>';
// echo CONFIG_PATH.'</br>';

// // 应用目录为当前目录
// define('APP_PATH',__DIR__.'/');
// // 开启调试模式
// define('APP_DEBUG',true);
// // 网站根URL
// define('APP_URL','http://localhost/fastphp');
// // 加载框架
// require './fastphp/FastPHP.php';

// 初始化常量
// define('FRAME_PATH',__DIR__.'/');

// define('APP_PATH',dirname($_SERVER['SCRIPT_FILENAME']).'/');

// define('APP_DEBUG',false);

// define('CONFIG_PATH',APP_PATH.'config/');

// define('RUNTIME_PATH',APP_PATH.'runtime/');

// // 包含配置文件

// require APP_PATH . 'config/config.php';

// //包含核心框架类
// require FRAME_PATH . 'Core.php';

// // 实例化核心类
// $fast = new Core;
// $fast->run();