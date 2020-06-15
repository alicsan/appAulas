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
					   backgroundColor:'pink'
				   },
				   <?php endforeach;?>
				   ]
			   
    		});
   	});
   
   </script>  

       
      
        <div class="container content">
        <div class="divider"></div>
             <div id="calendar"></div>
             <div class="divider"></div>
           <div class="row">
        <div class="col m12 separacion">
        
          <form action="<?=base_url()?>reserva/create" method="post" class="center">
      			<input type="hidden" value="<?=$reserva->aula->id?>" name="id">
      				<input type="hidden" value="<?=$idUsuario?>" name="idUser">
     			 <button onclick="submit()" class="btn waves-effect waves-light light-green lighten-1">
						RESERVAR ESTE AULA
					</button>
     			 </form>
     			
     	  </div>
      </div>
       
        </div>
