$(document).ready(function(){


	function validateForm(){

		var device_name = $('#device_name').val();
		var device_type = $('#device_type').val();


		if(device_name == '' || device_type == ''){

			if(!$('p').is('#warn')){
				$('.selectWrap').append("<p id='warn' style='float:right; line-height:30px; margin-left:20px;'>Заполните все поля!</p>");
			}
			return false;
		}

		else{
			return true;
		}

	}
	

	$('#add_denomination').submit(function(){



			
			if(validateForm()){

				if(!$('img').is('#loadGif')){
					$('.selectWrap').append("<img src='../images/load.gif' alt='Идет загрузка' style='float:right; margin-left:10px;' id='loadGif'>");
				}
				

				var msg   = $('#add_denomination').serialize();

				console.log(msg);
					
				$.ajax({
					
				  type: 'POST',
				  url: '../php/denomination.php',
				  data: msg,
					  success: function(data) {

			            console.log(data);
					  	if(data){

					  		$('form').before("<div class='serverResponse'>"+data+"</div>");
					  		$('#loadGif').remove();
				            console.log(data);
				            var successFlag = eval("("+data+")");

				            if(successFlag['success']){


				            	$('#loadGif').remove();
				            	$('.serverResponse').remove();
				            	$('form').before("<div class='serverResponse'>"+"Данные отправлены успешно"+"</div>");
					            $('.textInput').val('Данные добавлены');
					            $('.textInput').addClass('inputInactive');
					            $('.textInput').attr('disabled','disabled');
					            $('#warn').remove();
					            $('#submit').remove();

					            window.close();
					           
				            }
				            else{
				            	$('#loadGif').remove();
				            	$('.serverResponse').remove();
				            	$('form').before("<div class='serverResponse'>"+"Данные не отправлены"+"</div>");

				            }



				           console.log(successFlag['success']);

					  	}
			            
			            
			            
			            
			            
			          },
			          error:  function(xhr, str){
			                console.log('Возникла ошибка: ' + xhr.responseCode);

			          }
				});



			}
				

	});


});