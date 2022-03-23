
 $(document).ready(function() {
$('#my_form').submit(function(){
    
   
    $.post(
        '/login', // адрес обработчика
         $("#my_form").serialize(), // отправляемые данные          
        
        function(msg)  {
            
                $('#my_message').html(msg);
           
        // получен ответ сервера  
            
            
             
            }
       
            
           
        
    );
    return false;
    
    
});
 });
