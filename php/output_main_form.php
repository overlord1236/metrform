<?php 

	if(isset($_POST['loadNewObjects'])){
		loadNewObjects();
	}

	if(isset($_POST['loadNewTypes'])){
		loadNewTypes();
	}

	if(isset($_POST['loadNewMeas'])){
		loadNewMeas();
	}


	function loadNewObjects(){

		include_once ("config.php");

		mysql_query("SET NAMES UTF-8");


		class Response{
			public $objectName;
			public $success;
		}




		$result = mysql_query("SELECT DISTINCT ob FROM ob ORDER BY id_ob DESC") or die(mysql_error());
		$result_array = array();

		while ($row = mysql_fetch_array($result)) {
				$response = new Response;
				$response->objectName = $row['ob'];
				$response->success = true;
				$result_array[] = $response;
	
		}


		echo json_encode($result_array);

		mysql_close();
	}


	function loadNewTypes(){

		include_once ("config.php");

		mysql_query("SET NAMES UTF-8");

		class Response{
			public $type;
			public $denomination;
			public $success;
		}

		$result = mysql_query("SELECT DISTINCT marka, naim FROM marka GROUP BY naim ORDER BY id_marka DESC") or die(mysql_error());
		$result_array = array();

		while ($row = mysql_fetch_array($result)) {


				$response = new Response;
				$response->type = $row['marka'];
				$response->denomination = $row['naim'];
				$response->success = true;
				$result_array[] = $response;
		}

		echo json_encode($result_array);

		mysql_close();

	}


	function loadNewMeas(){

		include_once ("config.php");

		mysql_query("SET NAMES UTF-8");

		class Response{
			public $measurementLimit;
			public $success;
		}

		$result = mysql_query("SELECT DISTINCT razmer FROM razmer ORDER BY id_razmer DESC") or die(mysql_error());
		$result_array = array();

		while ($row = mysql_fetch_array($result)) {


				$response = new Response;
				$response->measurementLimit = $row['razmer'];
				$response->success = true;
				$result_array[] = $response;
		}

		echo json_encode($result_array);

		mysql_close();

	}

?>