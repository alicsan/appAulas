<div class="container">
	<div class="row">
 	 	<h1>Reservar Aula</h1>
	</div>

<!-- Los datos del usuario se rellenarán con los datos de la persona conectada
cuando el login funcione correctamente.  -->

	<form action="<?= base_url()?>reserva/cPost" method="post">

	<div class="form-group">
	<label for="idProfe">Profesor:</label>
	<select name="idProfe" class="form-control">
    <?php foreach($usuarios as $usuario):?>
    <option value="<?=$usuario->id?>"> <?=$usuario->nombre ?></option>
    <?php endforeach;?>
	</select>
	</div>
	
	<div class="form-check form-check-inline">
	<label for="idAula" >Aulas:</label><br>
	<?php foreach($aulas as $aula):?>
	<input type="checkbox"  class="form-check-input" id="idAula<?=$aula->id?>" name="idAula[]" value="<?=$aula->id?>"/>
    <label for="idAula<?=$aula->id?>" class="form-check-label" ><?=$aula->pertenece->nombre?> <?=$aula->nombre?></label>
    <?php endforeach;?>
	</div>
	<br>
	<div class="form-group">
	<label for="fechaInicio">Inicio de reserva</label><br>
	<input type="datetime-local" name="fechaInicio" class="form-control">
	</div>
	
	<div class="form-group">
	<label for="fechaFin">Fin de reserva</label><br>
	<input type="datetime-local" name="fechaFin" class="form-control">
	</div>
	
	
	<input type="submit">
	</form>

</div>