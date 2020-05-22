<div class="container">
	<div class="row">
	<h1>Reservas</h1>
	</div>
	<table class="table table-hover table-dark">
		<tr>
		<th>Profesor</th>
		<th>Aula</th>
		<th>Desde</th>
		<th>Hasta</th>
		</tr>
	<?php foreach($reservas as $reserva):?>
		<tr>
			<td><?=$reserva->usuarios->nombre?></td>
			<td><?=$reserva->aulas->nombre?></td>
			<td><?=$reserva->fechaInicio?></td>
			<td><?=$reserva->fechaFin?></td>		
		</tr>
	<?php endforeach;?>
	</table>



<a href="<?=base_url()?>reserva/c"><button>Nueva</button></a>
<a href="<?=base_url()?>"><button>Volver</button></a>


</div>