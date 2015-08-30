<!DOCTYPE html>

<html>
<head>
	<title>Форма WEBLANCER</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	
	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	
	<meta charset="utf-8">
</head>
<body>

	<div class="wrapper">

		<h1>Добавить прибор</h1>

		<button class="updateFormButton" id="updateFormButton">Update form</button>

		

		<form action="form.php" id="mainForm" class="mainForm">
			

			<table class="tableForm">
				<tr>
					<td><label for="object">Объект</label></td>
					<td>
						<span class="selectWrap f_left">
							<select name="objectName" id="objectName">
								<option value="">Выберите объект</option>
								
							</select>
						</span>
						<a href="add_object.php" target="_blank">Добавить объект</a>
					</td>
				</tr>



				<tr>
					<td><label for="object">Наименование</label></td>
					<td>
						
						<span class="selectWrap f_left">
							<select name="" id="denomination">
								<option value="">Выберите наименование</option>
								
							</select>
						</span>
						
						<div class="clr"></div>
						<span class="selectWrap f_left">
							<select name="" id="type">
								<option value="">Тип, марка</option>
								
							</select>
						</span>		
						<div class="clr"></div>
						<br>
						<a href="add_denomination.php" target="_blank" class="f_left clrHeight">Добавить наименование и тип</a>				
						<!-- <a href="" target="_blank">Добавить марку</a> -->
						

					</td>
				</tr>

				<tr>
				
					<td>
						<label for="object">Заводской номер</label>
					</td>
					<td>
						<span class="selectWrap f_left"><input type="text" name="object" class="textInput" placeholder="Введите заводской номер" id="factureNumber"></span>
						

						<div class="clr"></div>
					</td>

				</tr>	




				<tr>
				
					<td>
						<label for="object">Измеряемая величина</label>
					</td>
					<td>
						<span class="selectWrap f_left"><input type="text" name="object" class="textInput" placeholder="Введите предел измерений" id="measLim"></span>
						<select name="" id="meas" class="select">
							<option value="Ед. изм">Ед. изм.</option>
						</select>
						<a href="" target="_blank">Добавить размерность</a>

						<div class="clr"></div>
					</td>

				</tr>



				<tr>
					<td><label for="">Вид ремонта</label></td>
					<td>
						<div class="checkBoxBlock">
							<span class="checkBoxRow"><input type="checkbox" name="repair" class="checkBox"><label for="repair">Ремонт</label></span><br>
							<span class="checkBoxRow"><input type="checkbox" name="check" class="checkBox"><label for="check">Проверка</label></span><br>
							<span class="checkBoxRow"><input type="checkbox" name="calibration" class="checkBox"><label for="calibration">Калибровка</label></span><br>
						</div>
					</td>
				</tr>

				<tr>
					
					<td><label for="">Пример радио-кнопки</label></td>

					<td>
							
						<div class="checkBoxBlock">
							<span class="checkBoxRow"><input type="radio" name="answer" class="radioButton"><label for="repair">Вариант ответа 1</label></span><br>
							<span class="checkBoxRow"><input type="radio" name="answer" class="radioButton"><label for="check">Вариант ответа 2</label></span><br>
						</div>	


					</td>

				</tr>
			

				<tr>
					
					<td><label for="prim">Примечание</label></td>
					<td><span><textarea name="prim" id="" cols="65" rows="10"spellcheck="false"></textarea></span></td>
				</tr>


				
			</table>
			
			<div class="centerButton"><input type="submit" class="buttonSend" value="Отправить"></div>

			
		</form>	

	</div>



</body>
</html>