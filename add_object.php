<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="cp-1251">
	<title>Добавить объект</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="js/object_add_script.js"></script>
</head>
<body>
	<div class="wrapper">

		<h1>Добавить объект</h1>
		<form action="add_object.php" class="mainForm" id="add_object" method="POST" onsubmit="return false;">
			<table class="tableForm">
				<tr>
					<td><label for="">Наименование объекта</label></td>
					<td>
						<span class="selectWrap f_left">
							<input type="text" id='object_name' name="object_name" class="textInput" placeholder="Введите наименование" id="objectName">
						</span>
					</td>
				</tr>


				<tr>
					<td><label for="">Цех</label></td>
					<td>
						<span class="selectWrap f_left">
							<input type="text" id='workshop_name' name="workshop_name" class="textInput" placeholder="Введите название цеха" id="objectName">
						</span>
					</td>	
				</tr>

				<tr>
					
					<td><label for="">Сдал</label></td>
					<td>
						<span class="selectWrap f_left">
							<input type="text" id='passed_by' name="passed_by" class="textInput" placeholder="Фамилия, инициалы" id="objectName">
						</span>
					</td>
				</tr>


				

			</table>
			<div class="centerButton"><input type="submit" class="buttonSend" value="Отправить" id="submit"></div>
		</form>
	</div>
</body>
</html>