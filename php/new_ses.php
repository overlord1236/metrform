<?php 
	session_start();
	$selfer = $_SERVER['SERVER_NAME'];
	$maladec = $_SESSION['maladec'];

	if ($_POST['vyho'])
	{
	if (!get_magic_quotes_gpc())
	    {
			$_POST['vyho'] = mysql_escape_string($_POST['vyho']);
		}
		
		$_POST['vyho'] = strip_tags($_POST['vyho']);

		$vyho=$_POST['vyho'];
		if ($vyho==777)
		{
			$_SESSION=array();
		}
	}
?>