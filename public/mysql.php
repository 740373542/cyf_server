<?php

	// $link = mysql_connect("127.0.0.1","root","");
	// $result = mysql_select_db("test",$link);
	// $data_result = mysql_query("select id,name from user where id>0");

	// $data = mysql_fetch_array($data_result);
	// print_r($data) ;


$dir = dirname(__file__);
require str_replace('/public','',$dir).'/app/config/dbconfig.php';


class model 
{
	function __construct(){
		$this->connect();
	}

	function connect(){
		$Config = dbconfig::$mysql;
		$Server = mysql_connect($Config['server'],$Config['username'],$Config['password']);
		$Database = mysql_select_db($Config['database'],$Server);
	}
}

new model();

?> 