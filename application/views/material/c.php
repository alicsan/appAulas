<div class="container content">
<div class="row">
	<h4 class="center">Material</h4>
</div>

	<form action="<?=base_url()?>material/cPost" method="post">
		<div class="input-field col s12">
		<label for="nombre">Nombre</label>
		<input type="text" class="validate" name="nombre" id="nombre">
		</div>
	
	 <div class="input-field col s12">
	 <label for="observaciones" >Observaciones</label>
		<input type="text" class="validate" name="observaciones" id="observaciones">
	</div>

<div class="divider"></div>

	<div class="row">
		<div class="center">
		<button class="btn waves-effect waves-light light-green lighten-1" onclick="submit()">Crear</button>	
		</div>
	</div>	
	</form>

</div>