<?php $uid=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;?>
<div class="container content">
	<div class="row">
		<h4 class="center">Cambiar contraseña</h4>
	</div>


	<form action="<?=base_url()?>usuario/changepwdPost" method="post">
		<input type="hidden" name="uid" value="<?=$uid?>">

		<div class="input-field col s12">
			<label for="oldpwd">Introduce tu contraseña actual: </label> <input
				id="oldpwd" type="password" name="oldpwd">
		</div>

		<div class="input-field col s12">
			<label for="newpwd">Introduce tu nueva contraseña: </label> <input
				id="newpwd" type="password" name="newpwd">
		</div>



		<div class="col s12">
			<div class="center">
				<button class="btn waves-effect waves-light red" onclick="submit()"
					name="action">
					Cambiar contraseña <i class="material-icons left">send</i>
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