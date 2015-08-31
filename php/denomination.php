<?php 

	include_once ("config.php");
	

	$device_name = clear_data($_POST['device_name']);
	$device_type = clear_data($_POST['device_type']);
	
	
	$response = array();

	
	if(isset($device_name)){

		$request = mysql_query("INSERT INTO marka(naim, marka) 
					  VALUES ('$device_name', '$device_type')
				") or die(mysql_error());
		

		if ($request != true) {
			$response['success'] = false;
			mysql_error();
		}
		else{
			$response['success'] = true;
		}

		echo json_encode($response);
		//echo $device_name;
		mysql_close();

	}




	function clear_data($name){
		return htmlspecialchars(strip_tags(trim($name)));
	}

?>