<?php $uid=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;?>
<div class="container content">

	<div class="row">
		<h4 class="center">Listado de Usuarios</h4>
	</div>

	<table class="striped hightlight">
		<tr>
			<th>Username</th>
			<th>Nombre</th>
			<th>Departamento</th>
			<th>Foto Usuario</th>
			<th>Acción</th>
		</tr>
	
	<?php foreach ($usuarios as $usuario): ?>
		<tr>
			<td><?= $usuario->username?></td>
			<td><?= $usuario->nombre?></td>
			<td><?= $usuario->tiene!=null?$usuario->tiene->nombre:'--'?></td>
			<td><?= $usuario->foto_perfil!=null?$usuario->foto_perfil:'--'?></td>

			<td>
				<div class="row">
					<div class="col 6">
						<form action="<?=base_url()?>usuario/d" method="post">
							<input type="hidden" name="id" value="<?=$usuario->id?>">
							<button onclick="submit()"
								class="btn-floating waves-effect waves-light red">
								<i class="material-icons right tooltipped"
									data-position="bottom" data-tooltip="Eliminar">delete</i>
							</button>
						</form>
					</div>
					<div class="col 6">
						<form action="<?=base_url()?>usuario/u" method="post">
							<input type="hidden" name="id" value="<?=$usuario->id?>">
							<button onclick="submit()"
								class="btn-floating waves-effect waves-light">
								<i class="material-icons right tooltipped"
									data-position="bottom" data-tooltip="Editar">edit</i>
							</button>
						</form>
					</div>
				</div>
			</td>

		</tr>
	<?php endforeach;?>
</table>
	<div class="col m12" style="margin-top: 50px">
		<div class="center">
			<a href="<?=base_url()?>usuario/registrar"
				class="btn waves-effect waves-light light-green lighten-1">Registrar
				un usuario nuevo</a>
		</div>
	</div>

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