<?php
namespace controller;
// use \app\controller;


class admin extends \app\controller
{
	
	function index (){
		$count = 0;
		$ls = \model\member::finds("where id > 0",'*',$count,[
				'page'=>3,
				'length'=>1,
			]);
		\vd($ls,'123456789');
	}
}