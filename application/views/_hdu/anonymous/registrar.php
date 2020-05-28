<div class="container">

<div class="row">
<h1>Registrar usuario</h1>
</div>

<form action="<?=base_url()?>hdu/anonymous/registrarPost" enctype='multipart/form-data' method="post">

	 <div class="form-group">
	<label for="nombre">Nombre</label>
	<input id="nombre" type="text" name="nombre" class="form-control">
	</div>
	
	<div class="form-group">
	<label for="apellido">Apellido</label>
	<input id="apellido" type="text" name="apellido" class="form-control">
	</div>
	
       <div class="file-field">
        <label>Foto de perfil</label><br>
        <div class="btn btn-primary btn-sm">
           <input type="file" name="fperfil">
        </div>
       <br>
	
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


	<input type="submit"/>
</form>


</div>