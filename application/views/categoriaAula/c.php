<div class="container content">
	<div class="row">
		<h4 class="center">Nuevo tipo de aula</h4>
	</div>
	<form action="<?=base_url()?>categoriaAula/cPost" method="post">
		<div class="input-field col s12">
		<label for="nombre">Nombre</label>
		<input  type="text" id="nombre" name="nombre" id="nombre">
		</div>
		<div class="col m12">
				<div class="center">
					<input class="btn waves-effect waves-light light-green lighten-1" type="submit"
						name="action" value="Crear">
				</div>
			</div>
	
	</form>

</div>