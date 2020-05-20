<div class="container">

<div class="row">
<h1>Nuevo usuario</h1>
</div>

<form action="<?=base_url()?>usuario/cPost" method="post">

	 <div class="form-group">
	<label for="nombre">Nombre</label>
	<input id="nombre" type="text" name="nombre" class="form-control">
	</div>
	
	<div class="form-group">
	<label for="username">Nombre de usuario</label>
	<input id="username" type="text" name="username" class="form-control">
	</div>
	
	<div class="form-group">
	<label for="pwd">Contraseña</label>
	<input id="pwd" type="password" name="pwd" class="form-control">
	</div>

	<div class="form-group">
	<label for="idDepar">Departamento </label>
	<select id="idDepar" name="idDepar" class="form-control">
		<?php foreach ($departamentos as $departamento):?>
		<option value="<?=$departamento->id?>"> <?=$departamento->nombre?> </option>
		<?php endforeach;?>
	</select>
	</div>


	<br/>
	<input type="submit"/>
</form>


</div>