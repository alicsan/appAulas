<?php $uid=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;?>
<div class="container content">

	<div class="row">
		<h4 class="center">Materiales</h4>
	</div>

<form action="<?=base_url()?>material/uPost" method="post">
	<input type="hidden" name="id" value="<?=$material->id?>">
	
	<div class="input-field col s12">
	<label for="nombre"><?=$material->nombre?></label>
	<input id="nombre" type="text" name="nombre" class="validate">
	</div>
	
	
	<div class="input-field col s12">
	<input id="observaciones" type="text" name="observaciones" class="validate">
	</div>
	
	
	
	<div class="col m12">
				<div class="center">
					<button class="btn waves-effect waves-light light-green lighten-1" 
						name="action" onclick="submit()">Actualizar</button>
				</div>
			</div>
</form>

<div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
     <i class="large material-icons tooltipped" data-position="left" data-tooltip="Opciones">add</i>
  </a>
  <ul>
  <li>
    <a> <form action="<?=base_url()?>hdu/anonymous/logout" method="post">
				<input type="hidden" name="uid" value="<?=$uid?>">
				<button onclick="submit()" class="btn-floating green">
					<i class="material-icons tooltipped" data-position="left" data-tooltip="Cerrar sesión">exit_to_app</i></a>
				</button>
			</form>
    </li>
    </ul>
</div>

</div>