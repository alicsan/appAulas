<div class="container">

	<h1>Countries</h1>

	<a href="<?=base_url()?>country/c"><button class="button">Crear Country</button></a>
	<a href="<?=base_url()?>"><button class="button">Volver</button></a>

	<table class="table table-striped table-hover">
		<tr>
			<th>Name</th>
			<th># cities</th>
		</tr>
	
	<?php foreach ($country as $pais): ?>
		<tr>
			<td><?= $pais->name?></td>
			<td><td>
		</tr>
	<?php endforeach;?>
</table>
</div>
