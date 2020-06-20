  <?php $uid=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;?>
   <script>
   document.addEventListener('DOMContentLoaded', function() {
       var calendarEl = document.getElementById('calendar');

       var calendar = new FullCalendar.Calendar(calendarEl, {
         plugins: [ 'dayGrid','timeGrid','list','bootstrap'],
         themeSystem:'bootstrap',
      	 locale:'es',
         selectable:'true',
        
			titleFormat:{
				year: 'numeric', month: 'long'
			},
			buttonText:{
				prev: 'ATRÁS',
				next: 'SIGUIENTE'
				   },
		   events:[
				<?php foreach ($reservas as $reserva):?>
				
			   {
				   title:'<?=$reserva->reservada->pertenece->nombre?> <?=$reserva->reservada->nombre?>',
				   start:'<?=$reserva->fecha_inicio?>',
				   end:'<?=$reserva->fecha_fin?>',
				   well: 'what is dis',
					   extendedProps: {
					        pertenece: '<?=$reserva->tiene->nombre?>'
					      }
					      
				  
			   },
			   <?php endforeach;?>
			   ],
			 eventClick: function(info) {
			    alert('Pertenece: ' + info.event.extendedProps.pertenece+'\n'+'Aula: '+info.event.title);
			 				    
				    info.el.style.backgroundColor = 'darkblue';
				  },
// 				   eventRender: function (info) {
// 					    console.log(info.event.extendedProps);
// 					  }
       });
      
       
       calendar.render();
     });
   
   </script>  

       
      
        <div class="container content">
        
             <div id="calendar" style="margin:50px;"></div>
          
           
       <div class="fixed-action-btn">
  <a class="btn-floating btn-large red" href="<?=base_url()?>reserva/crAulas">
    <i class="large material-icons tooltipped" data-position="left" data-tooltip="Hacer una reserva">add</i>
  </a>
</div>
        </div>
