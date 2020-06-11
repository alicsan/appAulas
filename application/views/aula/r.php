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
      <input type="hidden" value="<?=$uid?>" name="idUser">
      <button onclick="submit()" class="btn waves-effect waves-light light-green lighten-1">
						Reservar
					</button>
      </form>
      <form action="<?=base_url()?>calendario/rAula" method="post">
      <input type="hidden" value="<?=$aula->id?>" name="id">
      <input type="hidden" value="<?=$uid?>" name="idUser">
      <button onclick="submit()" class="btn waves-effect waves-light light-green lighten-1">
						Ver Reservas de este Aula
					</button>
      </form>
      
    </div>
  </div>
		</div>
		
			<?php endforeach;?>
		
		</div>
		</div> 


</div>