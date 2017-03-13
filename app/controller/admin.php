<?php
namespace controller;

class admin extends \app\controller
{
	
	function index (){
		
		// $data = readfile(PUBLIC_PATH.'upload/test.txt');
		// $data = file_get_contents(PUBLIC_PATH.'upload/test.txt');

		// $file = fopen(PUBLIC_PATH.'upload/test.txt',"r");
		// $data = fread( $file, filesize(PUBLIC_PATH.'upload/test.txt') );
		// fclose($file);


		// $file = fopen(PUBLIC_PATH.'upload/test.txt',"a");
		// $data = "\ngithub is repository";
		// fwrite($file,$data);
		// $data = "\nsomething";
		// fwrite($file,$data);
		// fclose($file);

		require \view('test');

	}

	function UploadFile(){
		if( $_FILES['test_file']['error'] > 0 ){
			echo '1';
		}else{
			$tmp_name = $_FILES['test_file']['tmp_name'];
			$name = $_FILES['test_file']['name'];
			if(move_uploaded_file($tmp_name,PUBLIC_PATH.'upload/'.$name) ){
				echo 'success';
			}else{
				echo 'error';
			}
			
		}
	}

	function ajax_file(){
		$file = fopen(PUBLIC_PATH.'upload/test.txt','w');
		$data = "<h1>github is repository</h1>";
		fwrite($file,$data);
		fclose($file);
		$data = file_get_contents(PUBLIC_PATH.'upload/test.txt');
		echo $data; 
	}

	function ajax_json(){
		$data = [
			['id'=>1,'name'=>'ls'],
			['id'=>2,'name'=>'lss'],
			['id'=>3,'name'=>'lsss'],
		];

		$ls = json_encode($data);
		echo $ls;
	}

	function html5(){
		require \view('html5');
	}
}