<div class="container content">

<div class="row">
		<h4 class="center">Listado de Usuarios</h4>
	</div>

<table class="striped hightlight">
	<tr>
		<th>Username</th>
		<th>Nombre</th>
		<th>Departamento</th>
		<th>Acción</th>
	</tr>
	
	<?php foreach ($usuarios as $usuario): ?>
		<tr>
		<td><?= $usuario->username?></td>
		<td><?= $usuario->nombre?></td>
		<td><?= $usuario->tiene!=null?$usuario->tiene->nombre:'--'?></td>
		
		<td>
			<form action="<?=base_url()?>usuario/d" method="post">
				<input type="hidden" name="id" value="<?=$usuario->id?>">
				<button onclick="submit()">
					<img src="<?=base_url()?>/assets/img/basura.png" height="20"
						width="20">
				</button>
			</form>
			<form action="<?=base_url()?>usuario/u" method="post">
				<input type="hidden" name="id" value="<?=$usuario->id?>">
				<button onclick="submit()">
					<img src="<?=base_url()?>/assets/img/lapiz.png" height="20"
						width="20">
				</button>
			</form>
		</td>

	</tr>
	<?php endforeach;?>
</table>
<div class="col m12" style="margin-top:50px">
				<div class="center">
				<a href="<?=base_url()?>usuario/registrar" class="btn waves-effect waves-light light-green lighten-1">Registrar un usuario nuevo</a>
				</div>
			</div>


</div>