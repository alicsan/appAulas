<div class="container content">

	<h1>Categorias</h1>

		<table class="table table-striped table-hover">
		<tr>
			<th>Nombre</th>
			<th>Acciones</th>
		</tr>
	
	<?php foreach ($categorias as $categoria): ?>
		<tr>
			<td><?= $categoria->nombre?></td>
			<td>
				<form action="<?=base_url()?>categoriaAula/d" method="post">
					<input type="hidden" name="id" value="<?=$categoria->id?>">
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
<a href="<?=base_url()?>categoriaAula/c" class="btn btn-info" role="button">Nueva</a>
	<a href="<?=base_url()?>" class="btn btn-info" role="button">Volver</a>
</div>
</div>