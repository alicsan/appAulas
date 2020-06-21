<?php $uid = isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0; ?>
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
			
			 <div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i class="large material-icons tooltipped" data-position="left" data-tooltip="Perfil">add</i>
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

<div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i class="large material-icons tooltipped" data-position="left" data-tooltip="Perfil">add</i>
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