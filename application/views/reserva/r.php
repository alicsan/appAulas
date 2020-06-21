<?php $uid=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;?>
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
			<td><?=$reserva->tiene->nombre?></td>
			<td><?=$reserva->reservada->pertenece->nombre?> <?=$reserva->reservada->nombre?></td>
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
        		<th>Material</th>
        		<th>Desde</th>
        		<th>Hasta</th>
        		</tr>
        	<?php foreach($reservasMaterial as $r):?>
        		<tr>
        			<td><?=$r->tiene->nombre?></td>
        			<td><?=$r->reservado->nombre?></td>
        			<td><?=$r->fechaInicio?></td>
        			<td><?=$r->fechaFin?></td>		
        		</tr>
        	<?php endforeach;?>
        	</table>
<div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i class="large material-icons tooltipped" data-position="left" data-tooltip="Opciones">add</i>
  </a>
     <ul>
    <li>
     <form action="<?=base_url()?>hdu/anonymous/logout" method="post">
				<input type="hidden" name="uid" value="<?=$uid?>">
				<button onclick="submit()" class="btn-floating green">
					<i class="material-icons tooltipped" data-position="left" data-tooltip="Cerrar sesión">exit_to_app</i></a>
				</button>
			</form>
    </li>
  
  </ul>
</div>
</div>