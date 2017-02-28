<?php
namespace app;

require APP_PATH . '/methods.php';
require APP_PATH . '/config/dbconfig.php';
require APP_PATH . '/config/Medoo/src/Medoo.php';



//PHP启动引擎
class engine
{

	public static function route()
	{
			$url = $_SERVER['REQUEST_URI'];//接到当前url
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
			return;
		}
		$route[0] = urldecode($route[0]); 
		$route[1] = urldecode($route[1]);

		$controller = '\\controller\\' . $route[0];
		$method = $route[1];

		$php = $route[0].'.php';

		$class = new $controller();
		$class->$method();

	}


}


class controller 
{
	 
}


class model 
{
	public $id = null;
	public $column = '';
	public $data = [];

	function __construct(){
		// $this->connect();
	}

	public static function connect(){
		$database = new \Medoo\Medoo(\dbconfig::$mysql);
		if($database){
			return $database;	
		}else{
			return false;
		}
		
	}

	public static function find($where = '', $column = '*'){
		$data = self::finds($where,$column);
		if( count($data) > 0){
			return $data[0];
		}else{
			return [];
		}
	}

	public static function finds($where = '', $column = '*',&$count=null,$param = [
			'page' => 1,
			'length' => 0,
		]){
		$db = self::connect();

		$db_table = static::$table;

		$sqlLimit = '';
		if($param['length'] > 0){
			$page = $param['page'];
			$length = $param['length'];
			$limit = $length*($page-1);
			$sqlLimit = ' LIMIT ' . $limit. ',' .$length;
		}

		$From = 'FROM '.$db_table;

		$sql = 'SELECT ' . $column . $From . ' ' . $where . $sqlLimit;
		
		if(null !== $count){
			$count_sql = 'SELECT count('.$column.') '  . $From . ' ' . $where;
			$result = $db->query($count_sql);
			if($result){
				$result = $result->fetchAll();
				if( count($result)>0 && $result[0][0]>0)
					$count = (int)$result[0][0];
			}
			
		}

		$datas = $db->query($sql)->fetchAll(\PDO::FETCH_ASSOC);

		if( count($datas) > 0 ){
			return $datas;	
		}else{
			return $datas = [];
		}

	}

	public static function loadObj($id = 0, $key = 'id' ,$column = '*'){
		$db = self::connect();

		$db_table = static::$table;

		$data_once = $db->get($db_table,$column,[$key => $id]);

		if($data_once){
			$dataObj = new static();
		
			$dataObj->data = $data_once;

			if( $key != 'id' ){
				$dataObj->column = $key;
				$dataObj->id = $dataObj->data['id'];
			}else{
				$dataObj->id = $id;
				$dataObj->column = $key;
			}

			return $dataObj;
		}else{
			return false;
		}
	}

	public static function deleteByid($id){
		$db = self::connect();
		$db_table = static::$table;
		$number = $db->delete($db_table,['id'=>$id]);
		if($number > 0){
			return true;
		}else{
			return false;
		}
	}

	public function save(){
		$db = self::connect();

		$db_table = static::$table;

		$newdata = $this->data;

		$id = $this->id;

		$column = $this->column;

		if( empty($id) && empty($column) ){
			$db->insert($db_table,$newdata);
			$last_id = $db->id();
			$this->id = $last_id;
			$this->data['id'] = $last_id; 
			return $this;
		}else{
			$db->update($db_table,$newdata,['id'=>$id]);
			return $this;
		}

	}
	
}



class LoadClass{
	public static function LoadPhp($class){
		$class = explode('\\',$class);
		$class = implode('/',$class);
		$filename = APP_PATH . '/' .$class . '.php';
		if(file_exists( $filename )){
			require $filename;
			return true;			
		}else{
			return false;
		}
	}
}

spl_autoload_register( array('\app\LoadClass','LoadPhp') );


































// static function connect(){
	// 	$Config = \dbconfig::$mysql;
	// 	$Server = mysql_connect($Config['server'],$Config['username'],$Config['password']);
	// 	$Database = mysql_select_db($Config['database'],$Server);
	// }

	// static function finds(){
	// 	self::connect();

	// 	$datatable = static::$table;

	// 	$result = mysql_query("SELECT * FROM user LIMIT 0, 1000;");

	// 	$result = mysql_fetch_assoc($result);
		
	// 	print_r($result);


	// } 