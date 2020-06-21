<?php $uid=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;?>
<div class="container content">
	<div class="row">
		<h4 class="center">Editar usuario</h4>
	</div>
	<form action="<?=base_url()?>usuario/uPost" method="post">
		<input type="hidden" name="id" value="<?=$usuario->id?>">

		<div class="input-field col s12">
			<label for="username">Nombre de usuario</label> <input id="username"
				type="text" name="username" value="<?= $usuario->username?>">
		</div>



		<div class="input-field col s12">

			<select id="idDepar" name="idDepar">
		<?php foreach ($departamentos as $departamento):?>
		<option value="<?=$departamento->id?>"
					<?= $departamento->id==$usuario->tiene_id ? 'selected="selected"' : ''?>> <?=$departamento->nombre?> </option>
		<?php endforeach;?>
	</select>
		</div>

		<div class="col s12">
			<div class="center separacion">
				<button class="btn waves-effect waves-light light-green lighten-1"
					onclick="submit()" name="action">
					Actualizar <i class="material-icons left">send</i>
				</button>
			</div>
		</div>
	</form>

	<div class="fixed-action-btn">
		<a class="btn-floating btn-large red"> <i
			class="large material-icons tooltipped" data-position="left"
			data-tooltip="Opciones">add</i>
		</a>
		<ul>
			<li>
				<form action="<?=base_url()?>hdu/anonymous/logout" method="post">
					<input type="hidden" name="uid" value="<?=$uid?>">
					<button onclick="submit()" class="btn-floating green">
						<i class="material-icons tooltipped" data-position="left"
							data-tooltip="Cerrar sesión">exit_to_app</i></a>
					</button>
				</form>
			</li>

		</ul>
	</div>


</div>