<div class="container fondoBlanco content" >
<div class="row">
	<h4 class="center">Listado de Aulas</h4>
</div>


<table class="highlight striped">
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
		<div class="row">
			<div class="col m2">
			<form action="<?=base_url()?>aula/d" method="post">
				<input type="hidden" name="id" value="<?=$aula->id?>">
				<button onclick="submit()" class="btn-floating waves-effect waves-light">
					<i class="large material-icons">delete</i>
				</button>
			</form>
			</div>
			<div class="col m2">
			<form action="<?=base_url()?>aula/u" method="post">
				<input type="hidden" name="id" value="<?=$aula->id?>">
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


 	
  	<div class="col s12">
				<div class="center">
				<a href="<?=base_url()?>aula/c" class="btn waves-effect waves-light light-green lighten-1">Añadir</a>
				</div>
			</div>
		
	
<div class="divider"></div>
</div>