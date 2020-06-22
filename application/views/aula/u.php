<?php $uid=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;?>
<div class="container content">
<div class="row">
	<h4 class="center">Editar Aula</h4>
</div>

	<form action="<?=base_url()?>aula/uPost" method="post">
	<input type="hidden" name="id" value="<?=$aula->id?>">
	<div class="col s12">
	<h6 class="center"><?=$aula->pertenece->nombre?> <?=$aula->nombre?></h6>
	</div>
	
	<div class="input-field col s12">
	<select  name="idCat" class="">
	<?php foreach($categorias as $categoria):?>
	<option value="<?=$categoria->id?>" > <?=$categoria->nombre?> </option>
	<?php endforeach;?>
	</select>
	</div>
		
		<div class="input-field col s12">
		<label for="naula">Nombre</label>
		<input type="text" class="form-control" name="naula" id="naula">
		</div>
	
	<div class="input-field col s12">
	<label for="capacidad">Capacidad</label>
		<input type="text"  class="validate"name="capacidad" id="capacidad">
	</div>
	
	<div class="input-field col s12">
	<label for="comnentarios" >Comentarios</label>
		<input type="text" class="validate" name="comentarios" id="comentarios">
	</div>
	
	
	<div class="col m12">
				<div class="center">
					<button class="btn waves-effect waves-light light-green lighten-1" onclick="submit()">Crear</button>
				</div>
			</div>
			
	</form>
	
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