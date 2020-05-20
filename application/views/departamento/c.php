<div class="container">

<div class="row">
<h1>Nuevo departamento</h1>
</div>

<form action="<?= base_url()?>departamento/createPost" method="post">
	<div class="form-group">
	<label for="nombre">Nombre</label>
	<input id="nombre" type="text" name="nombre">
	</div>
	<input type="submit"/>
	
</form>
 
 </div>