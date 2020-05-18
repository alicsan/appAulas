<div class="container">

<h1>Lista de usuarios</h1>

<table class="table table-striped table-hover">
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


<a href="<?=base_url()?>usuario/c"><button>Nueva</button></a>
<a href="<?=base_url()?>"><button>Volver</button></a>

</div>