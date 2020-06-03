<div class="container fondoBlanco">
<div class="row">
	<h1>Nueva Aula</h1>
</div>

	<form action="<?=base_url()?>aula/cPost" method="post">
		<div class="form-group">
		<label for="naula">Nombre</label>
		<input type="text" class="form-control" name="naula" id="naula">
		</div>
	
	<div class="form-group">
	<label for="capacidad">Capacidad</label>
		<input type="text"  class="form-control"name="capacidad" id="capacidad">
	</div>
	
	<div class="form-group">
	<label for="comnentarios" >Comentarios</label>
		<input type="text" class="form-control" name="comentarios" id="comentarios">
	</div>
	
	<div class="form-group">
	<label for="idCat">Categoría</label>
	<select  name="idCat" class="form-control">
	<?php foreach($categorias as $categoria):?>
	<option value="<?=$categoria->id?>" > <?=$categoria->nombre?> </option>
	<?php endforeach;?>
	</select>
	</div>

		<button class="btn btn-outline-dark" onclick="submit()">Crear</button>	
	</form>

</div>