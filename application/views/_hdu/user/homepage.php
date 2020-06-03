<?php $usuario=isset($_SESSION['rol']) ? $_SESSION['rol'] : $_SESSION['rol']="anon"?>
<div class="container">

<?php if($usuario=="user" || $usuario=="admin" || $usuario=="anon"):?>
	<div class="row">
		<h4 class="center">Área Personal</h4>
	</div>
	<div class="divider"></div>
	 
	 <div clas="row">
		<div class="">
		<div class="row"><div class="col m12"
			<span>Reservas</span></div></div>
			<div class="col m6">
		  <a href="<?= base_url()?>reserva/c" class="waves-effect waves-light btn">Reservar  Aula</a>	
		  
		  <a href="#" class="waves-effect waves-light btn">Reservar  Material</a>	
		 </div>
	    
		</div>
 	</div>
	
 
 <div class="divider"></div>
 
 <div clas="row">
		<div class="">
		<div class="row"><div class="col m12"
			<span>Departamentos</span></div></div>
			<div class="col m6">
		  <a  class="waves-effect waves-light btn" href="<?=base_url()?>departamento/r">Listar</a>
		  
		  <a  class="waves-effect waves-light btn" href="<?=base_url()?>departamento/c">Crear</a>
		 </div>
	    
		</div>
 	</div>

 <div class="divider"></div>
 
 <div clas="row">
 	<div class="col m6">
		<div class="">
			<div class="row"><div class="col m12"
			<span>Aulas</span></div></div>
			<div class="col m6">
		  <a  class="waves-effect waves-light btn" href="<?=base_url()?>aula/r">Listar</a>
		  
		  <a  class="waves-effect waves-light btn" href="<?=base_url()?>aula/c">Crear</a>
		  
		  <a class="waves-effect waves-light btn" href="<?=base_url()?>categoriaAula/c">Crear C.Aula</a>
		  
		  <a class="waves-effect waves-light btn" href="<?=base_url()?>categoriaAula/r">Listar Cat</a>
		 </div>
	    
		</div>
 	</div>
 	</div>
 	
 	<div class="divider"></div>
 
 <div clas="row">
 	
		<div class="">
			<div class="row"><div class="col m12"
			<span>Materiales</span></div></div>
			<div class="col m6">
		  <a  class="waves-effect waves-light btn" href="<?=base_url()?>material/r">Listar</a>
		  
		  <a  class="waves-effect waves-light btn" href="<?=base_url()?>material/c">Crear</a>
		 </div>
	    
		</div>
 	</div>
<div class="divider"></div>
 <?php endif;?>
	
	<?php if($usuario == "admin"):?>
	<div clas="row">
 	
		<div class="">
			<div class="row"><div class="col m12"
			<span>Registrar Usuario</span></div></div>
			<div class="col m6">
		  <a class="waves-effect waves-light btn" href="<?=base_url()?>hdu/anonymous/registrar">Registrar Usuario</a>
		  
		 </div>
	    
		</div>
 	</div>
	<div class="divider"></div>
	
	<div clas="row">
 	
		<div class="">
			<div class="row"><div class="col m12"
			<span>Calendario</span></div></div>
			<div class="col m6">
		  <a class="waves-effect waves-light btn" href="<?=base_url()?>calendario/r">Calendario</a>
		  
		 </div>
	    
		</div>
 	</div>
	<div class="divider"></div>
	<?php endif;?>

</div>
