<?php 

	//header("Content-Type: text/html; charset=utf-8");
	
	include_once ("config1.php");
	

	$object_name = clear_data($_POST['object_name']);
	$workshop_name = clear_data($_POST['workshop_name']);
	$passed_by = clear_data($_POST['passed_by']);
	$predo = "ОАО \"СНГ\"";

	
	$response = array();

	// $connection = mysql_connect('localhost', 'root', 'root');
	// $db_name = mysql_select_db('srv28816_metro', $connection);

	// mysql_set_charset( 'utf8' );
	
	if(isset($object_name)){

		
		//include('config.php');

		


		//$connection = mysql_connect('localhost', 'root', '');
		//$db_name = mysql_select_db('srv28816_metro', $connection);


		$request = mysql_query("INSERT INTO ob(ob, ceh, sdal, predo) 
					  VALUES ('$object_name', '$workshop_name', '$passed_by', '$predo')
				") or die(mysql_error());
		

		if ($request != true) {
			$response['success'] = false;
		}
		else{
			$response['success'] = true;
		}

		echo json_encode($response);
		mysql_close();

	}




	function clear_data($name){
		return htmlspecialchars(strip_tags(trim($name)));
	}

 ?>