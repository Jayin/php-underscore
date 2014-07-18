<?php
require_once '_.php';
//call all test here

function test_get_val(){
	$a['name'] = "phper";
	_::assert(_::get_val($a['name'],"PHP_User") == "phper");
	_::assert(_::get_val($a['psw'],"123456") == "123456");
	_::assert(_::get_val($a['psw']) == null );
}



