
  
    
   <script>
   	$(document).ready(function(){
   		var calendar=$('#calendar').fullCalendar({
   			editable:true,
   			header:{
   				left:'prev,next today',
   				center:'title',
   				right:'month,agendaWeek,angendaDay'
   			},
   			event:"<?=base_url()?>calendario/load"
   		});
   	});
   
   </script>  

       
      
        <div class="container">
         
            <div id="calendar"></div>
        </div>
