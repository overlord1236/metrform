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
                            console.log(data[i]);
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







});


