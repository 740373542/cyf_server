<?php
namespace controller;
// use \app\controller;


class admin extends \app\controller
{
	
	function index (){
		$ls = \model\member::finds("where id > 0");
		$this->ajaxReturn(['ls'=>$ls]);
	}
}