
//ajax for registration
$(document).ready(function(){
    $("#sub").click(function(e){
   e.preventDefault();       
   var val1=$('#username').val();
   
   var val2=$('#lastname').val();
   
   var val3=$('#password').val();
   
   var val4=$('#email').val();
   
   var val5=$('#contact').val();
        $.ajax({
                type: "POST",
                url: "reg.php",
                data:{ text1:val1,text2:val2,text3:val3,text4:val4,text5:val5},
                success: function(result){
            
                 alert(result);
           }});
    $("form").trigger("reset");
      });
    });
//ajax for login
$(document).ready(function(){
    $("#log").click(function(e){
   e.preventDefault();       
   var mail=$('#ml').val();
var pass=$('#ps').val();
        $.ajax({
                type: "POST",
                url: "log.php",
                data:{email:mail,password:pass},
                success: function(result){
                  //alert(result);//result is output from database
              //take variable and store the result den compare
                                var res=result;
                                if(res==0)
                               {
                                 alert("error");
                               }
                               else
                               {
                        
                           //link to another file 
                                window.location = 'welcome.php';
                       
                            
                               }
                          }                
           });
    $("form").trigger("reset");
      });
    });
   