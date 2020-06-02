   <script>
   //var events=json_encode();
   	$(document).ready(function(){
   		var calendar=$('#calendar').fullCalendar({
   			editable:true,
   			header:{
   				left:'prev,next today',
   				center:'title',
   				right:'month,agendaWeek,angendaDay'
   			},
   			buttonText:{
				today : 'hoy',
				month: 'mes',
				week: 'semana',
				day: 'día'
			   },
			   events:"<?=base_url()?>calendario/load()"
				   
    		});
   	});
   
   </script>  

       
      
        <div class="container">
          
           <div id="calendar"></div>
       
        </div>
