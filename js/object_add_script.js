$(document).ready(function(){
		



	function validateForm(){

		var name = $('#objet_name').val();
		var workshop = $('#workshop_name').val();
		var passed = $('#passed_by').val();


		if(name == '' || workshop == '' || passed == '' ){

			if(!$('p').is('#warn')){
				$('.selectWrap').append("<p id='warn' style='float:right; line-height:30px; margin-left:20px;'>Заполните все поля!</p>");
			}
			return false;
		}

		else{
			return true;
		}

	}
	

	$('#add_object').submit(function(){




			if(validateForm()){

				if(!$('img').is('#loadGif')){
					$('.selectWrap').append("<img src='../images/load.gif' alt='Идет загрузка' style='float:right; margin-left:10px;' id='loadGif'>");
				}
				

				var msg   = $('#add_object').serialize();
					
				$.ajax({
					
				  type: 'POST',
				  url: '../php/object.php',
				  data: msg,
					  success: function(data) {
			            
					  	if(data){

					  		$('form').before("<div class='serverResponse'>"+data+"</div>");
				            console.log(data);
				            var successFlag = eval("("+data+")");

				            if(successFlag['success']){

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
