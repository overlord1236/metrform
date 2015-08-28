<?php 

	
	include_once ("config.php");
	

	$object_name = clear_data($_POST['object_name']);
	$workshop_name = clear_data($_POST['workshop_name']);
	$passed_by = clear_data($_POST['passed_by']);
	$predo = "ОАО \"СНГ\"";

	
	$response = array();

	
	if(isset($object_name)){

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