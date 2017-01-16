<?php


function indexBy($data,$key){
	$res = [];
	foreach ($data as $k => $v) {
		$res[$v[$key]] = $v;
	}
	return $res;
}

function view($filename){
	return VIEW_PATH . $filename .'.php';
}