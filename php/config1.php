<?php 

	$dblocation = 'localhost';
	$dbname = 'srv28816_metro';
	$user = 'root';
	$password = '';

	

	$connection = mysql_connect($dblocation, $user, $password);
	$db_name = mysql_select_db($dbname, $connection);

	mysql_set_charset( 'cp-1251' );


	if (!$connection && !$db) {
		exit(mysql_error());
	}


 ?>