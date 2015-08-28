<?php 

	if(isset($_POST['loadNewObjects'])){
		loadNewObjects();
	}

	if(isset($_POST['loadNewTypes'])){
		loadNewTypes();
	}


	function loadNewObjects(){

		//some code here
		include_once ("config.php");

		mysql_query("SET NAMES UTF-8");

		$result = mysql_query("SELECT DISTINCT ob FROM ob ORDER BY id_ob DESC");
		$result_array = array();

		while ($row = mysql_fetch_array($result)) {
				$result_array[] = $row['ob'];
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
		}

		$result = mysql_query("SELECT DISTINCT marka, naim FROM marka GROUP BY naim ORDER BY id_marka DESC");
		$result_array = array();

		while ($row = mysql_fetch_array($result)) {


				$response = new Response;
				$response->type = $row['marka'];
				$response->denomination = $row['naim'];
				$result_array[] = $response;
		}

		echo json_encode($result_array);

		mysql_close();

	}

?>