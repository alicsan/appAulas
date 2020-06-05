<div class="container content">

	<div class="row">
		<h4 class="center">Materiales</h4>
	</div>

<form action="<?=base_url()?>material/uPost" method="post">
	<input type="hidden" name="id" value="<?=$material->id?>">
	
	<div class="input-field col s12">
	<label for="nombre">Nombre</label>
	<input id="nombre" type="text" name="nombre" class="validate" value="<?= $material->nombre?>">
	</div>
	
	
	<div class="input-field col s12">
	<label for="observaciones">Observaciones</label>
	<input id="observaciones" type="text" name="observaciones" class="validate" value="<?= $material->observaciones?>">
	</div>
	
	<div class="divider"></div>
	
	<div class="col m12">
				<div class="center">
					<input class="btn waves-effect waves-light light-green lighten-1" type="submit"
						name="action" value="Actualizar">
				</div>
			</div>
</form>


</div>