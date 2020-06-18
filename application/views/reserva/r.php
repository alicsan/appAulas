<div class="container content">
	<div class="row">
		<h5 class="center">Aulas Reservadas</h5>
	</div>
	<table class="striped">
		<tr>
		<th>Profesor</th>
		<th>Aula</th>
		<th>Desde</th>
		<th>Hasta</th>
		</tr>
	<?php foreach($reservasAula as $reserva):?>
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
		<h5 class="center">Materiales Reservados</h5>
	</div>
        <table class="striped">
        		<tr>
        		<th>Profesor</th>
        		<th>Aula</th>
        		<th>Desde</th>
        		<th>Hasta</th>
        		</tr>
        	<?php foreach($reservasMaterial as $r):?>
        		<tr>
        			<td><?=$r->usuario->nombre?></td>
        			<td><?=$r->aula->pertenece->nombre?> <?=$r->aula->nombre?></td>
        			<td><?=$r->fechaInicio?></td>
        			<td><?=$r->fechaFin?></td>		
        		</tr>
        	<?php endforeach;?>
        	</table>

</div>