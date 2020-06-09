<div class="container content">

	<div class="row">
		<h4 class="center">Registrar usuario</h4>
	</div>

<form action="<?=base_url()?>usuario/registrarPost" enctype='multipart/form-data' method="post">

	 <div class="input-field col m12 s12">
	<label for="nombre">Nombre</label>
	<input type="text" id="nombre" name="nombre">
	</div>
	
	<div class="input-field col m12 s12">
	<label for="apellido">Apellido</label>
	<input id="apellido" type="text" name="apellido" class="">
	</div>
	
       <div class="file-field input-field col m12 s12">
        	<div class="btn waves-effect">
        	<span>Foto de perfil</span>
        	<input type="file" name="fperfil" class="">
        	</div>
        </div>
       <br>
	<br>
	<div class="input-field col m12 s12">
		<label for="username">Nombre de usuario</label>
		<input id="username" type="text" name="username" class="">
	</div>
	
	<div class="input-field col m12 s12">
	<label for="pwd">Contraseña</label>
	<input id="pwd" type="password" name="pwd" class="">
	</div>

	<div class="col m12 s12">
	<select id="idDepar" name="idDepar">
		<?php foreach ($departamentos as $departamento):?>
		<option value="<?=$departamento->id?>"> <?=$departamento->nombre?> </option>
		<?php endforeach;?>
	</select>
	</div>

	
	<div class="col m12">
				<div class="center">
				<button class="btn waves-effect waves-light light-green lighten-1"  onclick="submit()" name="action">
			Registrar <i class="material-icons left">send</i>
			</button>
				</div>
			</div>
	
	
	
</form>


</div>