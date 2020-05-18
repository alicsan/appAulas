<div class="container">

	<h1>Lista de departamentos</h1>

		<table class="table table-striped table-hover">
		<tr>
			<th>Nombre</th>
			<th>Acciones</th>
		</tr>
	
	<?php foreach ($departamentos as $departamento): ?>
		<tr>
			<td><?= $departamento->nombre?></td>
			<td>
				<form action="<?=base_url()?>departamento/delete" method="post">
					<input type="hidden" name="id" value="<?=$departamento->id?>">
					<button onclick="submit()">
						<img src="<?=base_url()?>/assets/img/basura.png" height="20"
							width="20">
					</button>
				</form>
			</td>
		</tr>
	<?php endforeach;?>
</table>

<div class="row">
<a href="<?=base_url()?>departamento/create"><button class="button">Nuevo</button></a>
	<a href="<?=base_url()?>"><button class="button">Volver</button></a>
</div>
</div>