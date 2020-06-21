<div class="container content">
	<div class="row">
 	 	<h4 class="center">Reservar: <?=$aula->pertenece->nombre?> <?=$aula->nombre?></h4>
	</div>
 <div class="row">
	<form action="<?= base_url()?>reserva/crAulasPost" method="post">
		<input type="hidden" value="<?=$usuario->id?>"  name="uid" id="uid">
		<input type="hidden" value="<?=$aula->id?>"  name="idAula" id="idAula">
			
		<div class="input-field col s12">		
				<label for="dia">Día</label>
            	<input type='text' class="form-control" id="picker1" name="dia"/>
    			</div>
    			<div class="row">
       			 <div class='input-field col s6'>
           		  <label for="horaInicio">Desde</label>
                  <input type='text' class="form-control" id="picker2" name="horaInicio">
               </div>
               
                <div class='input-field col s6'>
           		  <label for="horaFin">Hasta</label>
                  <input type='text' class="form-control" id="picker3" name="horaFin">
               </div>
     </div>
			
	

	<div class="row">
		<div class="col m12">
			<div class="center">
				<button class="btn waves-effect waves-light light-green lighten-1" onclick="submit()">Reservar
    				<i class="material-icons right">send</i>
 			 	</button>
  			</div>
  		</div>	
  	</div>
	</form>
</div>
<div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i class="large material-icons tooltipped" data-position="left" data-tooltip="Opciones">add</i>
  </a>
     <ul>
    <li>
     <form action="<?=base_url()?>hdu/anonymous/logout" method="post">
				<input type="hidden" name="uid" value="<?=$usuario->id?>">
				<button onclick="submit()" class="btn-floating green">
					<i class="material-icons tooltipped" data-position="left" data-tooltip="Cerrar sesión">exit_to_app</i></a>
				</button>
			</form>
    </li>
  
  </ul>
</div>
</div>
  <script> 
     	$('#picker1').datetimepicker({
				timepicker: false,
				datepicker:true,
				format:'Y-m-d',
				yearStart:2020,
				yearEnd:2021
					
         	})
         	$('#picker2').datetimepicker({
				timepicker: true,
				datepicker:false,
				format:'H:i',
				hours12:false,
				allowTimes:[
					'08:20','09:15','10:10','11:05','11:35',
					'12:30','13:25','14:20','15:15'],
				yearStart:2020,
				yearEnd:2021
					
         	})
         	$('#picker3').datetimepicker({
				timepicker: true,
				datepicker:false,
				format:'H:i',
				hours12:false,
				allowTimes:[
					'08:20','09:15','10:10','11:05','11:35',
					'12:30','13:25','14:20','15:15'],
				yearStart:2020,
				yearEnd:2021
					
         	})
    </script>