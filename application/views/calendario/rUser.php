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
			   events:[
					<?php foreach ($reservas as $reserva):?>
				   {
					   title:'<?=$reserva->aulas->pertenece->nombre?>',
					   start:'<?=$reserva->fecha_inicio?>',
					   end:'<?=$reserva->fecha_fin?>'
				   },
				   <?php endforeach;?>
				   ]
			   
    		});
   	});
   
   </script>  

       
      
        <div class="container content">
          
           <div id="calendar"></div>
       
        </div>
