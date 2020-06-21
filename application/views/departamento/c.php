<?php $uid = isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0; ?>
<div class="container content">

<div class="row">
	<h1 class="center">Nuevo departamento</h1>
</div>

<form action="<?= base_url()?>departamento/cPost" method="post">
	<div class="input-field col s12">
	<label for="nombre">Nombre</label>
	<input id="nombre" type="text" name="nombre">
	</div>
	
	
	<div class="col s12">
				<div class="center">
				<button class="btn waves-effect waves-light light-green lighten-1" onclick="submit()">Añadir</button>
				</div>
			</div>
	
</form>
 
 
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