$(document).ready(function() {
    
   $('#reg').on('click',function(e){
       
       $('.form').show();
       $('.form').on('submit',function(e){
            e.preventDefault();
            $.post('/',$(this).serializeArray(),function(res){
                $('.res').html(res);
            });
        });
       $('#close').on('submit',function(e){
          
            $(this).hide();
            return false;
        });
        
       
   });
   
   
});