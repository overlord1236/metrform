<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добавить наименование</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="js/denomination_add_script.js"></script>
</head>
<body>


	<div class="wrapper">

		<h1>Добавить наименование</h1>
		<form action="denomination.php" class="mainForm" id="add_denomination" method="POST" onsubmit="return false;">
			<table class="tableForm">
				<tr>
					<td><label for="">Наименование прибора</label></td>
					<td>
						<span class="selectWrap f_left">
							<input type="text" id='device_name' name="device_name" class="textInput" placeholder="Введите наименование">
						</span>
					</td>
				</tr>


				<tr>
					<td><label for="">Тип/марка прибора</label></td>
					<td>
						<span class="selectWrap f_left">
							<input type="text" id='device_type' name="device_type" class="textInput" placeholder="Введите название цеха">
						</span>
					</td>	
				</tr>


			</table>
			<div class="centerButton"><input type="submit" class="buttonSend" value="Отправить" id="submit"></div>
		</form>
	</div>
	
</body>
</html>