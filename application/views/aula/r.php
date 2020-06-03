<div class="container fondoBlanco">

<h1>Lista de Aulas</h1>

<table class="table table-hover table-dark">
	<tr>
		<th>Tipo</th>
		<th>Nombre</th>
		<th>Capacidad</th>
		<th>Comentarios</th>
		<th>Acción</th>
	</tr>
	
	<?php foreach ($aulas as $aula): ?>
		<tr>
		<td><?= $aula->pertenece->nombre?></td>
		<td><?= $aula->nombre?></td>
		<td><?= $aula->capacidad?></td>
		<td><?= $aula->comentarios!=null?$aula->comentarios:'--'?></td>
	
		<td>
			<form action="<?=base_url()?>aula/d" method="post">
				<input type="hidden" name="id" value="<?=$aula->id?>">
				<button onclick="submit()">
					<img src="<?=base_url()?>/assets/img/basura.png" height="20"
						width="20">
				</button>
			</form>
			<form action="<?=base_url()?>aula/u" method="post">
				<input type="hidden" name="id" value="<?=$aula->id?>">
				<button onclick="submit()">
					<img src="<?=base_url()?>/assets/img/lapiz.png" height="20"
						width="20">
				</button>
			</form>
			<form action="<?=base_url()?>reserva/c" method="post">
				<input type="hidden" name="id" value="<?=$aula->id?>">
				<button onclick="submit()">
					RESERVAR
				</button>
			</form>
		</td>

	</tr>
	<?php endforeach;?>
</table>


<a href="<?=base_url()?>aula/c"><button>Nueva</button></a>
<a href="<?=base_url()?>"><button>Volver</button></a>

</div>