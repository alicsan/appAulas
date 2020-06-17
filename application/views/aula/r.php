<?php $urol=isset($_SESSION['rol']) ? $_SESSION['rol']:'anon';?>
<div class="container fondoBlanco content" >
<div class="row">
	<h4 class="center">Aulas</h4>
</div>


	<div class="row">
	<?php foreach ($aulas as $aula): ?>
	
	<div class="col s12 m4 l4 xl4"> 
		 <div class="card medium">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="https://cdn.pixabay.com/photo/2020/05/22/08/23/burma-5204371_1280.png">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?= $aula->pertenece->nombre?><i class="material-icons right tooltipped" data-position="bottom" data-tooltip="Reservar">more_vert</i></span>
      <p><?=$aula->nombre?></p><br>
      <p>Capacidad: <?=$aula->capacidad?></p><br>
      <p>Observaciones: <?= $aula->comentarios ? $aula->comentarios  : '--'?></p>
      
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?= $aula->nombre?><i class="material-icons right">close</i></span>
      <p>Observaciones: <?= $aula->comentarios ? $aula->comentarios  : '--'?></p>
      <form action="<?=base_url()?>reserva/create" method="post">
      <input type="hidden" value="<?=$aula->id?>" name="id">
      <input type="hidden" value="<?=$uid?>" name="uid">
      <button onclick="submit()" class="btn waves-effect waves-light light-green lighten-1" style="margin-top:10px;">
						Reservar
					</button>
      </form>
      <form action="<?=base_url()?>calendario/rAula" method="post">
      <input type="hidden" value="<?=$aula->id?>" name="id">
      <input type="hidden" value="<?=$uid?>" name="idUser">
      <button onclick="submit()" class="btn waves-effect waves-light light-green lighten-1" style="margin-top:10px;">
						Ver Reservas de este Aula
					</button>
      </form>
      <?php if($urol=='admin'):?>
      <form action="<?=base_url()?>aula/d" method="post">
					<input type="hidden" name="id" value="<?=$aula->id?>">
					<button onclick="submit()" class="btn-floating waves-effect waves-light red right tooltipped" data-position="top" data-tooltip="Eliminar Aula" style="margin-top:10px;">
					<i class="large material-icons">delete</i>
				</button>
				</form>
      <?php endif;?>
    </div>
  </div>
		</div>
		
			<?php endforeach;?>
		
		</div>
		</div> 

<?php if($urol=='admin'):?>
<div class="fixed-action-btn">
  <a class="btn-floating btn-large red" href="<?=base_url()?>aula/c">
    <i class="large material-icons tooltipped" data-position="top" data-tooltip="Añadir Aula">add</i>
  </a>
</div>
<?php endif;?>
</div>