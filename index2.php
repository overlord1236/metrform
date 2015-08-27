<!DOCTYPE html>

<html>
<head>
	<title>Форма WEBLANCER</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	
	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="js/form_script.js"></script>
	
	<meta charset="utf-8">
</head>
<body>

	<div class="wrapper">

		<h1>Добавить прибор</h1>

		

		<form action="form.php" id="form">
			

			<table class="tableForm">
				<tr>
					<td><label for="object">Объект</label></td>
					<td>
						<span class="selectWrap">
							<select name="" id="">
								<option value="">Выберите объект</option>
								<option value="">Добавить объект</option>
							</select>
						</span>
						
					</td>
				</tr>



				<tr>
					<td><label for="object">Наименование</label></td>
					<td>
						
						<span class="selectWrap">
							<select name="" id="">
								<option value="">Счетчик жидкости</option>
								<option value="">Добавить наименование</option>
							</select>
						</span>

						<span class="selectWrap">
							<select name="" id="">
								<option value="">Тип, марка</option>
								<option value="">Добавить марку</option>
							</select>
						</span>						
						
						

					</td>
				</tr>



				<tr>
				
					<td>
						<label for="object">Заводской номер</label>
					</td>
					<td>
						<span class="selectWrap"><input type="text" name="object" class="textInput" placeholder="Введите заводской номер"></span>
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
						
						<td></td><td colspan="2" align="center"><input type="submit" class="buttonSend" value="Отправить"></td>

				</tr>
				
			</table>
			


			
		</form>	
		
	</div>



</body>
</html>



<!-- <div class="formGroup">
				<p><label for="object">Объект</label></p>
				<span class="selectWrap f_right">
					<select name="" id="">
						<option value="">Выберите объект</option>
						<option value="">Добавить объект</option>
					</select>
				</span>
			</div>
			<div class="clr"></div>


			<div class="formGroup">
				<p><label for="object">Наименование</label></p>

				<span class="selectWrap f_right">
					<select name="" id="">
						<option value="">Счетчик жидкости</option>
						<option value="">Добавить наименование</option>
					</select>
				</span>

				<span class="selectWrap f_right">
					<select name="" id="">
						<option value="">Тип, марка</option>
						<option value="">Добавить марку</option>
					</select>
				</span>
			</div>
			<div class="clr"></div>


			<div class="formGroup">
				<p><label for="object">Заводской номер</label></p>
				<span class="f_right"><input type="text" name="object" class="textInput" placeholder="Введите заводской номер"></span>
			</div>

			<div class="clr"></div>
			<div class="formGroup">
				<p><label for="">Вид ремонта</label></p>
				<div class="checkBoxBlock">
					<span class="checkBoxRow"><input type="checkbox" name="repair" class="checkBox"><label for="repair">Ремонт</label></span><br>
					<span class="checkBoxRow"><input type="checkbox" name="check" class="checkBox"><label for="check">Проверка</label></span><br>
					<span class="checkBoxRow"><input type="checkbox" name="calibration" class="checkBox"><label for="calibration">Калибровка</label></span><br>
				</div>
				
			</div>
			<div class="clr"></div>


			<div class="formGroup">
				<p><label for="">Пример радио-кнопки</label></p>
				<div class="checkBoxBlock">
					<span class="checkBoxRow"><input type="radio" name="answer" class="radioButton"><label for="repair">Ремонт</label></span><br>
					<span class="checkBoxRow"><input type="radio" name="answer" class="radioButton"><label for="check">Проверка</label></span><br>
				</div>
				
			</div>
			<div class="clr"></div> -->
