<div class="container content">

<div class="row">
<h1>Editar material</h1>
</div>

<form action="<?=base_url()?>material/uPost" method="post">
	<input type="hidden" name="id" value="<?=$material->id?>">
	
	<div class="form-group">
	<label for="nombre">Nombre</label>
	<input id="nombre" type="text" name="nombre" class="form-control" value="<?= $material->nombre?>">
	</div>
	
	
	<div class="form-group">
	<label for="observaciones">Observaciones</label>
	<input id="observaciones" type="text" name="observaciones" class="form-control" value="<?= $material->observaciones?>">
	</div>
	
	<button class="btn btn-outline-dark" onclick="submit()">Actualizar</button>	
</form>
<a href="<?=base_url()?>"><button class="btn btn-outline-dark">Cancelar</button></a>

</div>