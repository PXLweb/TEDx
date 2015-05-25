 function getDate()
 {
     var query = window.location.href;
     var vars = query.length;
     var month;
     var year;
     if(vars===44)
     {
         var str= query.substring(37);
         var varp = str.split("/");
         year=varp[0];
         month=varp[1];
     }else
     {
          month="05";
          year="2015";
     }
    return year+"-"+month;
     
 }
 
 
        $(document).ready(function()
        {  
            $('.calendar .day').click(function(){
                day_num=$(this).find('.day_num').html();
                document.getElementById('datum').value =getDate()+'-'+ day_num;
              
                 $('#myModal').modal('toggle');
             
            
               
            });
        });
        
 