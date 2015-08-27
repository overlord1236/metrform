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
			$('#warn').remove();
			return true;
		}

	}
	

	$('#add_object').submit(function(){




			if(validateForm()){


				$('.selectWrap').append("<img src='../images/load.gif' alt='Идет загрузка' style='float:right; margin-left:10px;'>");

				var msg   = $('#add_object').serialize();
					
				$.ajax({
				  type: 'POST',
				  url: '../php/object.php',
				  data: msg,
					  success: function(data) {
			            
					  	if(data){

					  		$('#object_name').attr("disabled", "disabled");
				            $('.textInput').val('Данные добавлены');
				            $('.textInput').addClass('inputInactive');
				            $('.textInput').attr('disabled','disabled');
				            $('img').remove();
				            $('#warn').remove();
				            $('#submit').remove();
				            window.close();

					  	}
			            
			            
			            
			            
			            
			          },
			          error:  function(xhr, str){
			                console.log('Возникла ошибка: ' + xhr.responseCode);
			          }
				});



			}
			else{
				//$('.selectWrap').append("<p id='warn' style='float:right; line-height:30px; margin-left:20px;'>Заполните все поля!</p>");
				//$('#warn').remove();
			}

			

	});

	
});
