<div class="container content">

<div class="row">
	<h1 class="center">Nuevo departamento</h1>
</div>

<form action="<?= base_url()?>departamento/cPost" method="post">
	<div class="input-field col s12">
	<label for="nombre">Nombre</label>
	<input id="nombre" type="text" name="nombre">
	</div>
	
	
	<div class="col s12">
				<div class="center">
				<button class="btn waves-effect waves-light light-green lighten-1" onclick="submit()">Añadir</button>
				</div>
			</div>
	
</form>
 
 </div>