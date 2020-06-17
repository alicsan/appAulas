  <?php $uid=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;?>
   <script>
   //var events=json_encode();
   	$(document).ready(function(){
   		var calendar=$('#calendar').fullCalendar({
   			editable:true,
   		 	 selectable: true,
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
					   title:'<?=$reserva->aula->pertenece->nombre?>',
					   start:'<?=$reserva->fecha_inicio?>',
					   end:'<?=$reserva->fecha_fin?>',
					   backgroundColor:'black'
				   },
				   <?php endforeach;?>
				   ]
			   
    		});
   	});
   
   </script>  

       
      
        <div class="container content">
        
             <div id="calendar" style="margin:50px;"></div>
          
           <div class="row" style="margin:20px;">
        <div class="col m12 separacion">
        
          <form action="<?=base_url()?>reserva/c" method="post" class="center">
      			
      				<input type="hidden" value="<?=$uid?>" name="uid">
     			 <button onclick="submit()" class="btn waves-effect waves-light light-green lighten-1">
						RESERVAR AULA
					</button>
     			 </form>
     			
     	  </div>
      </div>
       
        </div>
