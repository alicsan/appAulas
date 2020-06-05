<div class="container content">
<div class="row">
	<h1>Material</h1>
</div>

	<form action="<?=base_url()?>material/cPost" method="post">
		<div class="form-group">
		<label for="nombre">Nombre</label>
		<input type="text" class="form-control" name="nombre" id="nombre">
		</div>
	
	 <div class="form-group">
	 <label for="observaciones" >Observaciones</label>
		<input type="text" class="form-control" name="observaciones" id="observaciones">
	</div>


		<button class="btn btn-outline-dark" onclick="submit()">Crear</button>	
	</form>

</div>