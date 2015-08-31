<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добавить единицы измерения</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="js/measure_add_script.js"></script>
</head>
<body>

	<div class="wrapper">

		<h1>Добавить единицы измерения</h1>
		<form action="" class="mainForm" id="add_measure" method="POST" onsubmit="return false;">
			<table class="tableForm">
				<tr>
					<td><label for="units_name">Ед. изм.</label></td>
					<td>
						<span class="selectWrap f_left">
							<input type="text" id='units_name' name="units_name" class="textInput" placeholder="Введите ед. изм. для добавления в БД" id="objectName">
						</span>
					</td>
				</tr>

			</table>
			<div class="centerButton"><input type="submit" class="buttonSend" value="Отправить" id="submit"></div>
		</form>
	</div>
	
</body>
</html>