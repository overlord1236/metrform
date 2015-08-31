<?php 

	include_once ("config.php");
	

	$object_name = clear_data($_POST['objectName']);
	$denomination = clear_data($_POST['denomination']);
	$type = clear_data($_POST['type']);
	$facture_number = clear_data($_POST['facture_number']);
	$measLim = clear_data($_POST['measLim']);
	$meas = clear_data($_POST['meas']);
	$repair = '';
	$check = '';
	$calibration = '';
	$prim = clear_data($_POST['prim']);
	$date = date("Y.m.d H:i");

	if(isset($_POST['repair'])){
		$repair = clear_data($_POST['repair']);
	}

	if(isset($_POST['check'])){
		$check = clear_data($_POST['check']);
	}

	if(isset($_POST['calibration'])){
		$calibration = clear_data($_POST['calibration']);
	}

	// $vid = array();
	// $vid[]=$repair;
	// $vid[]=$check;
	// $vid[]=$calibration;

	$vid = $repair.', '.$check.', '.$calibration;


		
	$response = array();

		
	if(isset($object_name)){

			//object_name, denomination, type, facture_number, measLim, meas, prim, repair, check, calibration

			//ob, naim, marka, nomer, predel, razmer, prim


			$request = mysql_query("INSERT INTO pribor(ob, naim, marka, nomer, predel, razmer, prim, vid) 
						  VALUES ('$object_name', '$denomination', '$type', '$facture_number', '$measLim', '$meas', '$prim', '$vid')
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