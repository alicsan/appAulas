<div class="container">

<div class="row">
<h1>Editar usuario</h1>
</div>


<form action="<?=base_url()?>usuario/uPost" method="post">
	<input type="hidden" name="id" value="<?=$usuario->id?>">
	
	<div class="form-group">
	<label for="username">Nombre de usuario</label>
	<input id="username" type="text" name="username" class="form-control" value="<?= $usuario->username?>">
	</div>
	
		

	<div class="form-group">
	<label for="idDepar">Departamento </label>
	<select id="idDepar" name="idDepar" class="form-control">
		<?php foreach ($departamentos as $departamento):?>
		<option value="<?=$departamento->id?>" <?= $departamento->id==$usuario->tiene_id ? 'selected="selected"' : ''?>  > <?=$departamento->nombre?> </option>
		<?php endforeach;?>
	</select>
	</div>


	<button class="btn btn-outline-dark" onclick="submit()">Actualizar</button>	
</form>

<a href="<?=base_url()?>"><button class="btn btn-outline-dark">Cancelar</button></a>

</div>