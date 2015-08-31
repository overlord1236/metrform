<?php 

		include_once ("config.php");
	

		$units_name = clear_data($_POST['units_name']);

		
		$response = array();

		
		if(isset($units_name)){

			$request = mysql_query("INSERT INTO razmer(razmer) 
						  VALUES ('$units_name')
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