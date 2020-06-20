<div class="container content">
<div class="row">
	<h4 class="center">Nueva Aula</h4>
</div>

	<form action="<?=base_url()?>aula/cPost" method="post">
	<div class="col s12">
	<h6 class="center">Editar Aula</h6>
	</div>
	
	<div class="input-field col s12">
	<select  name="idCat" class="">
	<?php foreach($categorias as $categoria):?>
	<option value="<?=$categoria->id?>" > <?=$categoria->nombre?> </option>
	<?php endforeach;?>
	</select>
	</div>
		
		<div class="input-field col s12">
		<label for="naula">Nombre</label>
		<input type="text" class="form-control" name="naula" id="naula">
		</div>
	
	<div class="input-field col s12">
	<label for="capacidad">Capacidad</label>
		<input type="text"  class="validate"name="capacidad" id="capacidad">
	</div>
	
	<div class="input-field col s12">
	<label for="comnentarios" >Comentarios</label>
		<input type="text" class="validate" name="comentarios" id="comentarios">
	</div>
	
	
	<div class="col m12">
				<div class="center">
					<button class="btn waves-effect waves-light light-green lighten-1" onclick="submit()">Crear</button>
				</div>
			</div>
			
	</form>

</div>