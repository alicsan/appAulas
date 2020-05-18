<div class="container">

	<h1>Users</h1>

	<a href="<?=base_url()?>user/c"><button class="button">Crear User</button></a>
	<a href="<?=base_url()?>user/rViajes"><button class="button">Registrar Viajes</button></a>
	<a href="<?=base_url()?>"><button class="button">Volver</button></a>

	<table class="table table-striped table-hover">
		<tr>
			<th>DNI</th>
			<th>Name</th>
			<th>City(Born)</th>
			<th>Cities(Traveled)</th>
		</tr>
	
	<?php foreach ($user as $usuarios): ?>
		<tr>
			<td><?= $usuarios->dni?></td>
			<td><?= $usuarios->name?></td>
			<td><?= $usuarios->born->name?></td>
			<td><?php foreach ($usuarios->ownTravelList as $travel): ?>
					<?= $travel->city!=null?$travel->city->name:''?> 
				<?php endforeach;?></td>
		</tr>
	<?php endforeach;?>
</table>
</div>
