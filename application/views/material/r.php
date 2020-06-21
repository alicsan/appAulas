<?php $urol=isset($_SESSION['rol']) ? $_SESSION['rol']:'anon';
$uid=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;
?>
<div class="container fondoBlanco content" >
<div class="row">
	<h4 class="center">Materiales</h4>
</div>


	<div class="row">
	<?php foreach ($materiales as $material): ?>
	
	<div class="col s12 m4 l4 xl4"> 
		 <div class="card medium">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="https://cdn.pixabay.com/photo/2017/08/06/20/36/school-2596090_1280.png">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?= $material->nombre?><i class="material-icons right tooltipped" data-position="bottom" data-tooltip="Reservar">more_vert</i></span>
      <p><?=$material->nombre?></p><br>
      <p>Observaciones: <?= $material->observaciones ? $material->observaciones  : '--'?></p>
      
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?= $material->nombre?><i class="material-icons right">close</i></span>
      <p>Observaciones: <?= $material->observaciones ? $material->observaciones  : '--'?></p>
      <form action="<?=base_url()?>reserva/crSingleMaterial" method="post">
    	  <input type="hidden" value="<?=$material->id?>" name="id">
    		  <input type="hidden" value="<?=$uid?>" name="uid">
    				  <button onclick="submit()" class="btn waves-effect waves-light light-green lighten-1" style="margin-top:10px;">
								Reservar
									</button>
     		 </form>
    	  <form action="<?=base_url()?>calendario/rMaterial" method="post">
      		<input type="hidden" value="<?=$material->id?>" name="id">
      			<button onclick="submit()" class="btn waves-effect waves-light light-green lighten-1" style="margin-top:10px;">
						Ver Reservas de este Objeto
					</button>
    	  </form>
      <?php if($urol=='admin'):?>
      <form action="<?=base_url()?>material/u" method="post">
					<input type="hidden" name="id" value="<?=$material->id?>">
					<button onclick="submit()" class="btn-floating waves-effect waves-light blue right tooltipped" data-position="top" data-tooltip="Editar Material" style="margin:10px;">
					<i class="large material-icons">edit</i>
				</button>
				</form>
      <form action="<?=base_url()?>material/d" method="post">
					<input type="hidden" name="id" value="<?=$material->id?>">
					<button onclick="submit()" class="btn-floating waves-effect waves-light red right tooltipped" data-position="top" data-tooltip="Eliminar Material" style="margin-top:10px;">
					<i class="large material-icons">delete</i>
				</button>
				</form>
      <?php endif;?>
    </div>
  </div>
		</div>
		
			<?php endforeach;?>
		
		</div>
		 


<div class="fixed-action-btn">
  <a class="btn-floating btn-large red" href="<?=base_url()?>material/c">
     <i class="large material-icons tooltipped" data-position="left" data-tooltip="Opciones">add</i>
  </a>
  <ul>
  <?php if($urol=='admin'):?>
  <li>
  	<a class="btn-floating yellow darken-1" href="<?=base_url()?>material/c">
    <i class="large material-icons tooltipped" data-position="left" data-tooltip="Añadir Material">add</i>
  </a>
  </li>
  <?php endif;?>
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
<!--  -->
<!-- Image by <a href="https://pixabay.com/users/simisi1-5920903/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2596090">simisi1</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2596090">Pixabay</a> -->