<?php 

	if(isset($_POST['loadNewObjects'])){
		loadNewObjects();
	}


	function loadNewObjects(){

		//some code here
		include_once ("config.php");

		mysql_query("SET NAMES UTF8");

		$result = mysql_query("SELECT DISTINCT ob FROM ob");
		$result_array = array();

		while ($row = mysql_fetch_array($result)) {

				//$convert = mb_convert_encoding($row['ob'], "UTF8");



				//iconv ('windows-1251', 'utf-8', $row['ob']);
				$result_array[] = $row['ob'];
				
		}





		// $json = defined('JSON_UNESCAPED_UNICODE')
  //     		? json_encode($result_array, JSON_UNESCAPED_UNICODE)
  //     		: json_encode($result_array);
  //     	echo $json;

		//$result_array = mb_convert_encoding($result_array, "UTF8");
		


		echo json_encode($result_array);



		//echo $result_array[100];
		//echo preg_replace_callback('/\\\u([01-9a-fA-F]{4})/', 'prepareUTF8', json_encode($result_array));


		// $request = mysql_query("INSERT INTO ob(ob, ceh, sdal, predo) 
		// 			  VALUES ('$object_name', '$workshop_name', '$passed_by', '$predo')
		// 		") or die(mysql_error());
		

		// if ($request != true) {
		// 	$response['success'] = false;
		// }
		// else{
		// 	$response['success'] = true;
		// }

		//echo json_encode($response);
		mysql_close();
	}



	




?>