<div class="container content">

	<div class="row">
		<h4 class="center">Materiales</h4>
	</div>

		<table class="striped">
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
			<div class="row">
			<div class="col 6">
				<form action="<?=base_url()?>material/d" method="post">
					<input type="hidden" name="id" value="<?=$material->id?>">
					<button onclick="submit()" class="btn-floating waves-effect waves-light">
					<i class="large material-icons">delete</i>
				</button>
				</form>
				</div>
				<div class="col 6">
				<form action="<?=base_url()?>material/u" method="post">
				<input type="hidden" name="id" value="<?=$material->id?>">
				<button onclick="submit()" class="btn-floating waves-effect waves-light">
					<i class="large material-icons">edit</i>
				</button>
			</form>
			</div>
			</div>
			</td>
		</tr>
	<?php endforeach;?>
</table>

<div class="divider"></div>
	
	<div class="col s12">
				<div class="center">
				<a href="<?=base_url()?>material/c" class="btn waves-effect waves-light light-green lighten-1">Añadir</a>
				</div>
			</div>

</div>