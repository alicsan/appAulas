<div class="container content">
	<div class="row">
		<h1 class="center">Reservas</h1>
	</div>
	<table class="centered highlight">
		<tr>
		<th>Profesor</th>
		<th>Aula</th>
		<th>Desde</th>
		<th>Hasta</th>
		</tr>
	<?php foreach($reservas as $reserva):?>
		<tr>
			<td><?=$reserva->usuarios->nombre?></td>
			<td><?=$reserva->aulas->pertenece->nombre?> <?=$reserva->aulas->nombre?></td>
			<td><?=$reserva->fechaInicio?></td>
			<td><?=$reserva->fechaFin?></td>		
		</tr>
	<?php endforeach;?>
	</table>


<div class="row" style="margin-top:25px;">
		<div class="col m6">
			<div class="center">
				<a href="<?=base_url()?>reserva/c" class="btn waves-effect waves-light btn light-green lighten-1">Nueva Reserva</a>
  			</div>
  		</div>	
  		<div class="col m6">
			<div class="center">
				<a href="<?=base_url()?>hdu/user/homepage" class="btn waves-effect waves-light btn light-green lighten-1">Home</a>
  			</div>
  		</div>	
  	</div>





</div>