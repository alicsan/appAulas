<?php 
//session_start();
    $usuario=isset($_SESSION['usuario']) ? $_SESSION['usuario'] : $_SESSION['usuario']="anon";
       $uid=$usuario->id;
?>
<div class="container">

<?php if($usuario->rol=="user" || $usuario->rol=="admin"):?>
	<div class="row">
		<h4 class="center">Área Personal</h4>
	</div>
	<div class="divider"></div>
	 
	 <div clas="row">
		<div class="">
		<div class="row">
		<div class="col m12 center">
		<span>Reservas</span>
		</div></div>
		
			<div class="row">
			<div class="col m6 center">
			<form action="<?= base_url()?>reserva/c" method="post">
				<input type="hidden" name="id" value="<?=$uid?>">
				<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					Reservar Aula
				</button>
			</form>
			</div>
			<div class="col m6 center">
		  <form action="#"  method="post">
		  <button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					Reservar Material
				</button>
		  </form>
		 </div>
		 </div>
		</div>
 	</div>
	
 
 <div class="divider"></div>
 
 <div clas="row">
		<div class="">
		<div class="row"><div class="col m12 center">
			<span>Departamentos</span>
			</div>
		</div>
			<div class="col m6 center">
		  <a  class="waves-effect waves-light btn light-green lighten-1" href="<?=base_url()?>departamento/r">Listar</a>
		  
		  <a  class="waves-effect waves-light btn light-green lighten-1" href="<?=base_url()?>departamento/c">Crear</a>
		 </div>
	    
		</div>
 	</div>

 <div class="divider"></div>
 
 <div clas="row">
 	<div class="col m6">
		<div class="">
			<div class="row"><div class="col m12 center" style="margin-top:25px;">
				<span class="center">Aulas</span>
				</div>
			</div>
			<div class="col m6 center">
		  <a  class="waves-effect waves-light btn light-green lighten-1" href="<?=base_url()?>aula/r">Listar</a>
		  
		  <a  class="waves-effect waves-light btn light-green lighten-1" href="<?=base_url()?>aula/c">Crear</a>
		  
		  <a class="waves-effect waves-light btn light-green lighten-1" href="<?=base_url()?>categoriaAula/c">Crear C.Aula</a>
		  
		  <a class="waves-effect waves-light btn light-green lighten-1"  href="<?=base_url()?>categoriaAula/r">Listar Cat</a>
		 </div>
	    
		</div>
 	</div>
 	</div>
 	
 	<div class="divider"></div>
 
 <div clas="row">
 	
		<div class="">
			<div class="row"><div class="col m12 center" style="margin-top:25px;">
			<span class="center">Materiales</span>
			</div>
			</div>
			<div class="col m6 center">
		  <a  class="waves-effect waves-light btn light-green lighten-1" href="<?=base_url()?>material/r">Listar</a>
		  
		  <a  class="waves-effect waves-light btn light-green lighten-1" href="<?=base_url()?>material/c">Crear</a>
		 </div>
	    
		</div>
 	</div>
<div class="divider"></div>
 <?php endif;?>
	
	<?php if($usuario->rol == "admin"):?>
	<div clas="row">
 	
		<div class="">
			<div class="row"><div class="col m12 center" style="margin-top:25px;">
			<span>Registrar Usuario</span>
			</div>
		</div>
			<div class="col m6 center">
		  <a class="waves-effect waves-light btn light-green lighten-1" href="<?=base_url()?>hdu/anonymous/registrar">Registrar Usuario</a>
		  
		 </div>
	    
		</div>
 	</div>
	<div class="divider"></div>
	
	<div clas="row">
 	
		<div class="">
			<div class="row">
			<div class="col m12 center">
			<span>Calendario</span>
			</div></div>
			<div class="col m6 center">
		   <form action="<?=base_url()?>calendario/r" method="post">
    			<input type="hidden" name="id" value="<?=$uid?>">
    		<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
    			Calendario
   			 </button>
    </form>
		 </div>
	    
		</div>
 	</div>
	<div class="divider"></div>
	<?php endif;?>

</div>
