<div class="container content">
	<div class="row">
		<h1 class="center">Reservas</h1>
	</div>
	<table class="striped highlight">
		<tr>
		<th>Profesor</th>
		<th>Aula</th>
		<th>Desde</th>
		<th>Hasta</th>
		</tr>
	<?php foreach($reservas as $reserva):?>
		<tr>
			<td><?=$reserva->usuario->nombre?></td>
			<td><?=$reserva->aula->pertenece->nombre?> <?=$reserva->aula->nombre?></td>
			<td><?=$reserva->fechaInicio?></td>
			<td><?=$reserva->fechaFin?></td>		
		</tr>
	<?php endforeach;?>
	</table>

<div class="divider"></div>

<div class="row">
		<div class="col m12">
			<div class="center">
				<a href="<?=base_url()?>reserva/c" class="btn waves-effect waves-light btn light-green lighten-1" style="margin-top:25px;">Nueva Reserva</a>
  			</div>
  		</div>	
  		
  	</div>





</div>