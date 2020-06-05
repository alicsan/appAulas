<div class="container content">

	<h1>Materiales</h1>

		<table class="table table-striped table-hover">
		<tr>
			<th>Nombre</th>
			<th>Observaciones</th>
			<th>Acciones</th>
		</tr>
	
	<?php foreach ($materiales as $material): ?>
		<tr>
			<td><?= $material->nombre?></td>
			<td><?= $material->observaciones?></td>
			<td>
				<form action="<?=base_url()?>material/d" method="post">
					<input type="hidden" name="idMaterial" value="<?=$material->id?>">
					<button onclick="submit()">
						<img src="<?=base_url()?>/assets/img/basura.png" height="20"
							width="20">
					</button>
				</form>
				<form action="<?=base_url()?>material/u" method="post">
				<input type="hidden" name="idMaterial" value="<?=$material->id?>">
				<button onclick="submit()">
					<img src="<?=base_url()?>/assets/img/lapiz.png" height="20"
						width="20">
				</button>
			</form>
			</td>
		</tr>
	<?php endforeach;?>
</table>

<div class="row">
<a href="<?=base_url()?>material/c"><button class="button">Nuevo</button></a>
	<a href="<?=base_url()?>"><button class="button">Volver</button></a>
</div>
</div>