<?php
namespace app;

require APP_PATH . '/methods.php';

//PHP启动引擎
class engine
{

	public static function route()
	{
			$url = $_SERVER['REQUEST_URI'];
			if($url == '/'){
				$url = 'NOT_URL';
				return $url;
			}
			$request = explode('?',$url);
			if( count($request) > 0 ){
				$params = $request[1];
			}
			$path = $request[0];
			$pathinfo = explode('/',$path);
			$controller = 'index';
			$method = 'index';
			if( !empty($pathinfo[1]) ){
				$controller = $pathinfo[1];
			}
			if( !empty($pathinfo[2]) ){
				$method = $pathinfo[2];
			}

			return [$controller,$method,[$params]];
	}


	public static function run()
	{
		$route = self::route();
		if($route == 'NOT_URL'){
			require PUBLIC_PATH.'start.php';
			return;
		}
		$route[0] = urldecode($route[0]); 
		$route[1] = urldecode($route[1]);

		$controller = '\\controller\\' . $route[0];
		$method = $route[1];

		$php = $route[0].'.php';
		require CONTROLLER_PATH.$php;
		$class = new $controller();
		$class->$method(); 
	}



}





















class controller 
{
	 
}

// class service
// {

// }

// class model
// {
	
// }
