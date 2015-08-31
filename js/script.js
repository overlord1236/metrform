$(document).ready(function(){


      
      $('#updateFormButton').click(function(){

          loadObjects();
          loadType();
          loadMeasLim();

      });


      function loadObjects(){

            if($('option').is('.objectNameList')){
              $('.objectNameList').remove();
            }

            var msg = {
              loadNewObjects: true
            };

            $.ajax({
          
              type: 'POST',
              url: '../php/output_main_form.php',
              data: msg,
                success: function(data) {
                      
                    if(data){

                      $('form').before("<div class='serverResponse'>"+data+"</div>");

                      var data = eval("("+data+")");


                      if(data[0].success == true){

                          $('.serverResponse').remove();
                          data.forEach(function(item,i,data){
                            //console.log(data[i]);
                            $('#objectName').append("<option value='"+data[i].objectName+"' class='objectNameList'>"+data[i].objectName+"</option>");
                          });
                      }
  
                    }
                },

                error:  function(xhr, str){
                          console.log('Возникла ошибка: ' + xhr.responseCode);

                }
            });

      }



      function loadType(){

            if($('option').is('.denominationList')){
              $('.denominationList').remove();
            }

            if($('option').is('.typeList')){
              $('.typeList').remove();
            }

            var msg = {
              loadNewTypes: true
            };
          
          $.ajax({
          
              type: 'POST',
              url: '../php/output_main_form.php',
              data: msg,
                success: function(data) {
                      
                    if(data){

                      $('form').before("<div class='serverResponse'>"+data+"</div>");

                      var data = eval("("+data+")");
                     

                      if(data[0].success == true){

                        $('.serverResponse').remove();

                        data.forEach(function(item,i,data){
                        
                          $('#denomination').append("<option value='"+data[i].denomination+"' class='denominationList'>"+data[i].denomination+"</option>");
                          $('#type').append("<option value='"+data[i].type+"' class='typeList'>"+data[i].type+"</option>");
                        });

                      }

                      

                    }
                },

                error:  function(xhr, str){
                          console.log('Возникла ошибка: ' + xhr.responseCode);

                }
          });
      }


      function loadMeasLim(){

          if($('option').is('.measList')){
              $('.measList').remove();
            }

            var msg = {
              loadNewMeas: true
            };
          
          $.ajax({
          
              type: 'POST',
              url: '../php/output_main_form.php',
              data: msg,
                success: function(data) {
                      
                    if(data){

                      $('form').before("<div class='serverResponse'>"+data+"</div>");

                      var data = eval("("+data+")");
                     

                      if(data[0].success == true){

                        $('.serverResponse').remove();

                        data.forEach(function(item,i,data){
                        
                          $('#meas').append("<option value='"+data[i].measurementLimit+"' class='measList'>"+data[i].measurementLimit+"</option>");
                          
                        });

                      }

                      

                    }
                },

                error:  function(xhr, str){
                          console.log('Возникла ошибка: ' + xhr.responseCode);

                }
          });
      }




      $('#mainForm').submit(function(){
          //'true' must be replaced to formValidation()

          if(validateForm()){

            var msg   = $('#mainForm').serialize();
          
            $.ajax({
              
              type: 'POST',
              url: '../php/main_form.php',
              data: msg,
                success: function(data) {
                        

                      console.log(data);  
                  if(data){

                    $('form').before("<div class='serverResponse'>"+data+"</div>");
                        console.log(data);
                        var successFlag = eval("("+data+")");

                        if(successFlag['success']){

                          $('.serverResponse').remove();
                          $('form').before("<div class='serverResponse'>"+"Данные отправлены успешно"+"</div>");
                          //$('.textInput').val('Данные добавлены');
                          //$('.textInput').addClass('inputInactive');
                          //$('.textInput').attr('disabled','disabled');
                          $('#mainForm')[0].reset();
                          $('#warn').remove();
                          $('#submit').remove();
                          //window.close();
                         
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


      function validateForm(){

        var objectName = $('#objectName').val();
        var denomination = $('#denomination').val();
        var type = $('#type').val();
        var factureNumber = $('#factureNumber').val();
        var measLim = $('#measLim').val();
        var meas = $('meas').val();


        if(objectName == 'Выберите объект' || denomination == 'Выберите наименование' || type == 'Тип, марка' || factureNumber == '' || meas == '' || measLim == 'Ед. изм.'){

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
      





});


