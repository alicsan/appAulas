<div class="container">

	<h1>Cities</h1>

	<a href="<?=base_url()?>city/c"><button class="button">Crear city</button></a>
	<a href="<?=base_url()?>"><button class="button">Volver</button></a>

	<table class="table table-striped table-hover">
		<tr>
			<th>Name</th>
			<th>Country</th>
		</tr>
	
	<?php foreach ($city as $ciudad): ?>
		<tr>
			<td><?= $ciudad->name?></td>
			<td><?= $ciudad->in->name?><td>
		</tr>
	<?php endforeach;?>
</table>
</div>
