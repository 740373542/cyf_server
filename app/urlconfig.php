<?php


//自创的controller路由


$urlPath = $_SERVER['REQUEST_URI'];

if( $urlPath == '/'){

	require PUBLIC_PATH.'start.php';

}else{

		if(strripos($urlPath,'?') > 0 || strripos($urlPath,'?') !== false){

			$urlPath = substr($urlPath,0,strripos($urlPath,'?'));

		}	

		if(strripos($urlPath,'/') == 0){

			$controller = ltrim(substr($urlPath,strripos($urlPath,'/')),'/');

			$method = 'index';

		}else{

			$controller = ltrim(substr($urlPath,0,strripos($urlPath,'/')),'/');

			$method = ltrim(substr($urlPath,strripos($urlPath,'/')),'/');
		}

		require CONTROLLER_PATH.$controller.'.php';

		$class = new $controller;

		$class->$method();

}

?>