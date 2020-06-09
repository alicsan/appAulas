<div class="container content">
	<div class="row">
 	 	<h4 class="center">Reservar Aula <?=$usuario->nombre?></h4>
	</div>
 <div class="row">
	<form action="<?= base_url()?>reserva/cPost" method="post">
		<input type="hidden" value="<?=$usuario->id?>"  name="uid" id="uid">
			
		<div class="row">
			<div class="input-field col s6">		
				<label for="fechaInicio">Inicio de reserva</label>
            	<input type='text' class="form-control" id="picker1" name="fechaInicio"/>
    		</div>

   			 <div class='input-field col s6'>
       		  <label for="fechaFin">Fin de reserva</label>
              <input type='text' class="form-control" id="picker2" name="fechaFin">
           </div>
     </div>
			
	<div class="col s12">
	  <select name="idAula" class="browser-default">
	  <option value="" disabled selected>Elige un aula</option>
	 	<?php foreach($aulas as $aula):?>
	 		<option value="<?=$aula->id?>"><?=$aula->pertenece->nombre?> <?=$aula->nombre?></option>
	  	<?php endforeach;?>
	  	</select>
	</div>
	<div class="divider"></div>
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
</div>
   <script> 
     	$('#picker1').datetimepicker({
				timepicker: true,
				datepicker:true,
				format:'Y-m-d H:i',
				hours12:false,
				allowTimes:[
					'08:20','09:15','10:10','11:05','11:35',
					'12:30','13:25','14:20','15:15'],
				yearStart:2020,
				yearEnd:2021
					
         	})
         	$('#picker2').datetimepicker({
				timepicker: true,
				datepicker:true,
				format:'Y-m-d H:i',
				hours12:false,
				allowTimes:[
					'08:20','09:15','10:10','11:05','11:35',
					'12:30','13:25','14:20','15:15'],
				yearStart:2020,
				yearEnd:2021
					
         	})
    </script>