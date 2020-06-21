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
			   <?php $c=array('green','black','lightblue','lilla','purple'); ?>
				<?php foreach ($reservas as $reserva):?>
				<?php $randomkeys=$c[rand(0,sizeof($c)-1)];?>
			   {
				   title:'<?=$reserva->tiene->nombre?>',
				   start:'<?=$reserva->fecha_inicio?>',
				   end:'<?=$reserva->fecha_fin?>',
				   backgroundColor:'<?=$randomkeys?>',
					   extendedProps: {
					        pertenece: '<?=$reserva->reservado->nombre?>'
					      }
					      
				  
			   },
			   <?php endforeach;?>
			   ],
			 eventClick: function(info) {
			    alert('Material: ' + info.event.extendedProps.pertenece+'\n'+'Reserva hecha por: '+info.event.title);
			 				    
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
        
             <div id="calendar"></div>
          
           
       <div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i class="large material-icons tooltipped" data-position="left" data-tooltip="Opciones">add</i>
  </a>
  <ul>  
<li> <a class="btn-floating yellow darken-1" href="reserva/crMateriales"><i class="large material-icons tooltipped" data-position="left" data-tooltip="Hacer una reserva">add</i></a></li>  
    <li>
     <form action="<?=base_url()?>hdu/anonymous/logout" method="post">
				<input type="hidden" name="uid" value="<?=$uid?>">
				<button onclick="submit()" class="btn-floating green">
					<i class="material-icons tooltipped" data-position="left" data-tooltip="Cerrar sesión">exit_to_app</i></a>
				</button>
			</form>
    </li>
  
  </ul>
</div>
        </div>