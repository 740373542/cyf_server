<?php

class admin 
{
	function index (){
		$arr = [
			0 => array('id'=>1,'name'=>'ls'),
			1 => array('id'=>2,'name'=>'lh'),
			2 => array('id'=>3,'name'=>'cyf'),
		];

		$ls = \indexBy($arr,'id');

		print_r($ls); 
	}
}