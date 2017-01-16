<?php
/**
 * FastPHP核心框架
 */

 class Core 
 {
 		// 运行程序
 		function run(){
 			sql_autoload_register(array($this,'loadClass'));
 			$this->setReporting();
 			$this->removeMagicQuotes();
 			$this->unregisterGlobals();
 			$this->Route();
 		}

 		function Route(){
 			
	 			$controllerName = 'Index';
	 			$action = 'index';

	 			if( !empty($_GET['url']) ){
	 				$url = $_GET['url'];
	 				$urlArray = explode('/',$url);

	 				// 获取控制器名
	 				$controllerName = ucfirst($ucfirst[0]);

	 				// 获取动作名
	 				array_shift($urlArray);//删除数组第一个元素
	 				$action = empty($urlArray) ? array() : $urlArray;

	 				//获取URL参数
	 				array_shift($urlArray);
	 				$queryString = empty($urlArray) ? array() : $queryString;

	 			}

	 			// 数据为空的处理
	 			empty($queryString) ? array() : $queryString;

	 			// 实例化控制器
	 			$controller = $controllerName . 'controller';
	 			$dispatch = new $controller($controllerName,$action);

	 			// 如果控制器存和动作存在，这调用并传入URL参数
	 			if( (int)method_exists($controller,$action)){
	 				call_user_func_array(array($dispatch,$action),$queryString);
	 			} else {
	 				exit($controller."控制器不存在");
	 			}

 		}



 }
