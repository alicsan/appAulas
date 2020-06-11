<div class="container content">
	
	<div class="row">
	<h4 class="center">Departamentos</h4>
	</div>
		<table class="triped">
		<tr>
			<th>Nombre</th>
			<th>--</th>
		</tr>
	
	<?php foreach ($departamentos as $departamento): ?>
		<tr>
			<td><?= $departamento->nombre?></td>
			<td>
				<form action="<?=base_url()?>departamento/delete" method="post">
					<input type="hidden" name="id" value="<?=$departamento->id?>">
					<button onclick="submit()" class="btn-floating waves-effect waves-light red">
						<i class="material-icons right tooltipped" data-position="bottom" data-tooltip="Eliminar">delete</i>
					</button>
				</form>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<div class="divider"></div>
<div class="row ">
<div class="col m12 center ">
<a href="<?=base_url()?>departamento/c" class="btn waves-effect waves-light light-green lighten-1" style="margin-top:25px;">Añadir Departamento<a>
</div>
</div>
</div>