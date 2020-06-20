<div class="container content">

	<div class="row">
		<h4 class="center">Materiales</h4>
	</div>

<form action="<?=base_url()?>material/uPost" method="post">
	<input type="hidden" name="id" value="<?=$material->id?>">
	
	<div class="input-field col s12">
	
	<input id="nombre" type="text" name="nombre" class="validate">
	</div>
	
	
	<div class="input-field col s12">
	<input id="observaciones" type="text" name="observaciones" class="validate">
	</div>
	
	<div class="divider"></div>
	
	<div class="col m12">
				<div class="center">
					<button class="btn waves-effect waves-light light-green lighten-1" 
						name="action" onclick="submit()">Actualizar</button>
				</div>
			</div>
</form>


</div>