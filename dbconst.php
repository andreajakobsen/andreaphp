<?php 
/*
	const DB_HOST = 'localhost';
	const DB_USER = 'root';
	const DB_PASS = '';
	const DB_NAME = 'phplogin';

*/
	const DB_HOST = 'andreajakobsen.com.mysql';
	const DB_USER = 'andreajakobsen_';
	const DB_PASS = 'eELNyYTZ';
	const DB_NAME = 'andreajakobsen_';
	
	$link = new mysqli( DB_HOST, DB_USER, DB_PASS ,DB_NAME );

	if ($link->connect_error) {
		die('connect error ('.$link->connect_errno.') '.$link->connect_error);

}
	$link->set_charset('utf8');

?>
