<div class="container">
	<div class="row">
 	 	<h4>Reservar Aula</h4>
	</div>

<!-- Los datos del usuario se rellenarán con los datos de la persona conectada
cuando el login funcione correctamente.  -->

	<form action="<?= base_url()?>reserva/cPost" method="post">

	<fieldset>
	<legend>Usuario</legend>
	<select name="idProfe" class="form-control">
    <?php foreach($usuarios as $usuario):?>
    <option value="<?=$usuario->id?>"> <?=$usuario->nombre ?></option>
    <?php endforeach;?>
	</select>
	</fieldset>
	
	<fieldset>
	<legend>Aulas</legend>
	<select name="idAula[]"  class="form-control">
	<?php foreach($aulas as $aula):?>
	 <option value="<?=$aula->id?>"><?=$aula->pertenece->nombre?> <?=$aula->nombre ?></option>
	  <?php endforeach;?>
	</select>
	</fieldset>
	
	
	<fieldset>
	<legend>Día y hora de la reserva</legend>
    <div class='col-md-5'>
        <div class="form-group">
            <input type='text' class="form-control" id="picker1" name="fechaInicio"/>
        </div>
    </div>
    <div class='col-md-5'>
        <div class="form-group">
              <input type='text' class="form-control" id="picker2" name="fechaFin" /> 
           </div>
     </div>
   </fieldset>

    <script> 
     	$('#picker1').datetimepicker({
				timepicker: true,
				datepicker:true,
				format:'d-m-Y H:i',
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
				format:'d-m-Y H:i',
				hours12:false,
				allowTimes:[
					'08:20','09:15','10:10','11:05','11:35',
					'12:30','13:25','14:20','15:15'],
				yearStart:2020,
				yearEnd:2021
					
         	})
    </script>
	
	
	<input type="submit">
	</form>

</div>