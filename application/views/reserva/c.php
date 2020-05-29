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
            <div class='input-group date' id='datetimepicker1'>
                <input type='text' class="form-control" name="fechaInicio"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class='col-md-5'>
        <div class="form-group">
            <div class='input-group date' id='datetimepicker2'>
                <input type='text' class="form-control"  name="fechaFin" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
     </div>
   </fieldset>

<script> 
$(function () {
    $('#datetimepicker1').datetimepicker();
    $('#datetimepicker2').datetimepicker({
        useCurrent: false //Important! See issue #1075
    });
    $("#datetimepicker1").on("dp.change", function (e) {
        $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
    });
    $("#datetimepicker2").on("dp.change", function (e) {
        $('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
    });
});
</script>
	
	
	<input type="submit">
	</form>

</div>