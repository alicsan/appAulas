<div class="container">

<div class="row">
<h1>Registrar usuario</h1>
</div>

<form action="<?=base_url()?>usuario/registrarPost" enctype='multipart/form-data' method="post">

	 <div class="input-field col s12">
	<label for="nombre">Nombre</label>
	<input type="text" id="nombre" name="nombre">
	</div>
	
	<div class="input-field col s12">
	<label for="apellido">Apellido</label>
	<input id="apellido" type="text" name="apellido" class="">
	</div>
	
       <div class="file-field input-field col s12">
        	<div class="btn waves-effect">
        	<span>Foto de perfil</span>
        	<input type="file" name="fperfil" class="">
        	</div>
        </div>
       <br>
	<br>
	<div class="input-field col s12">
		<label for="username">Nombre de usuario</label>
		<input id="username" type="text" name="username" class="">
	</div>
	
	<div class="input-field col s12">
	<label for="pwd">Contraseña</label>
	<input id="pwd" type="password" name="pwd" class="">
	</div>

	<div class="form-group">
	<label for="idDepar">Departamento </label>
	<select id="idDepar" name="idDepar" class="form-control">
		<?php foreach ($departamentos as $departamento):?>
		<option value="<?=$departamento->id?>"> <?=$departamento->nombre?> </option>
		<?php endforeach;?>
	</select>
	</div>

	<button class="btn waves-effect waves-light"  onclick="submit()" name="action">
			Registrar <i class="material-icons left">send</i>
			</button>
	
</form>


</div>