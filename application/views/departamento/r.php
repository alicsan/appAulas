<div class="container content">
	
	<div class="row">
	<h1 class="center">Lista de departamentos</h1>
	</div>
		<table class="highlight striped">
		<tr>
			<th>Nombre</th>
			<th>Acciones</th>
		</tr>
	
	<?php foreach ($departamentos as $departamento): ?>
		<tr>
			<td><?= $departamento->nombre?></td>
			<td>
				<form action="<?=base_url()?>departamento/delete" method="post">
					<input type="hidden" name="id" value="<?=$departamento->id?>">
					<button onclick="submit()">
						<img src="<?=base_url()?>/assets/img/basura.png" height="20"
							width="20">
					</button>
				</form>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<div class="divider"></div>
<div class="row">
<div class="center">
<a href="<?=base_url()?>departamento/c" class="btn waves-effect waves-light light-green lighten-1">Añadir Departamento<a>
</div>
</div>
</div>