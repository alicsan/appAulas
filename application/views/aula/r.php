<div class="container fondoBlanco content" >
<div class="row">
	<h4 class="center">Listado de Aulas</h4>
</div>


	<div class="row">
	<?php foreach ($aulas as $aula): ?>
	
	<div class="col s12 m4 l4 xl4"> 
		 <div class="card medium">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="https://cdn.pixabay.com/photo/2020/05/22/08/23/burma-5204371_1280.png">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?= $aula->nombre?><i class="material-icons right">more_vert</i></span>
      <p>Capacidad: <?=$aula->capacidad?></p><br>
      <p>Observaciones: <?= $aula->comentarios ? $aula->comentarios  : '--'?></p>
      <a href="<?=base_url()?>aula/c" class="btn waves-effect waves-light light-green lighten-1">Reservar</a>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?= $aula->nombre?><i class="material-icons right">close</i></span>
      <a href="#" class="btn waves-effect waves-light light-green lighten-1">Ver Reservas de este Aula</a>
    </div>
  </div>
		</div>
		
			<?php endforeach;?>
		
		</div>
<!-- 		<div class="row"> -->
<!-- 			<div class="col m2"> 
			<form action="<//base_url()>aula/d" method="post">
				<input type="hidden" name="id" value="<//$aula->id?>">
				<button onclick="submit()" class="btn-floating waves-effect waves-light">-->
<!-- 					<i class="large material-icons">delete</i> -->
<!-- 				</button> -->
<!-- 			</form> -->
<!-- 			</div> -->
<!-- 			<div class="col m2"> 
			<form action="<//base_url()?>aula/u" method="post">
				<input type="hidden" name="id" value="</->id?>">
				<button onclick="submit()" class="btn-floating waves-effect waves-light">-->
<!-- 					<i class="large material-icons">edit</i> -->
<!-- 				</button> -->
<!-- 			</form> -->
<!-- 			</div> -->
<!-- 			</div> -->
		




 	
  	<div class="col s12">
				<div class="center">
				<a href="<?=base_url()?>aula/c" class="btn waves-effect waves-light light-green lighten-1">Añadir</a>
				</div>
			</div>
		
	
<div class="divider"></div>
</div>