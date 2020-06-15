<div class="container content">

	<div class="row">
		<h4 class="center">Editar usuario</h4>
	</div>


<form action="<?=base_url()?>usuario/uPost" method="post">
	<input type="hidden" name="id" value="<?=$usuario->id?>">
	
	<div class="input-field col s12">
	<label for="username">Nombre de usuario</label>
	<input id="username" type="text" name="username"  value="<?= $usuario->username?>">
	</div>
	
		

	<div class="input-field col s12">
	
	<select id="idDepar" name="idDepar">
		<?php foreach ($departamentos as $departamento):?>
		<option value="<?=$departamento->id?>" <?= $departamento->id==$usuario->tiene_id ? 'selected="selected"' : ''?>  > <?=$departamento->nombre?> </option>
		<?php endforeach;?>
	</select>
	</div>

	<div class="col s12">
				<div class="center separacion">
				<button class="btn waves-effect waves-light light-green lighten-1"  onclick="submit()" name="action">
			Actualizar <i class="material-icons left">send</i>
			</button>
				</div>
			</div>
</form>

	
	

</div>