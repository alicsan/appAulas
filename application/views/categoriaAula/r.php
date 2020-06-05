<div class="container content">
	<div class="row">
	<h4 class="center">Categorias</h4>
	</div>

		<table class="highlight striped">
		<tr>
			<th>Nombre</th>
			<th>Acciones</th>
		</tr>
	
	<?php foreach ($categorias as $categoria): ?>
		<tr>
			<td><?= $categoria->nombre?></td>
			<td>
				<form action="<?=base_url()?>categoriaAula/d" method="post">
					<input type="hidden" name="id" value="<?=$categoria->id?>">
					<button onclick="submit()" class="btn-floating waves-effect waves-light">
					<i class="large material-icons">delete</i>
				</button>
				</form>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<div class="divider"></div>

<div class="section">
<div class="col s12">
				<div class="center">
				<a href="<?=base_url()?>categoriaAula/c" class="btn waves-effect waves-light light-green lighten-1">Añadir Categoría</a>
				</div>
			</div>
			</div>
</div>