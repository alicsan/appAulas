<?php 
    $usuario=isset($_SESSION['usuario']) ? $_SESSION['usuario'] : $_SESSION['usuario']="anon";
       $uid=$usuario->id;
?>
<div class="container content">


	<div class="row">
		<h4 class="center">Área Personal</h4>
	</div>
	<?php var_dump($uid)?>
	<div class="divider"></div>
	 
	 
		<!-- ------------------------------------CARTA RESERVAS----------------------------------------- -->
		<div class="row">
		 <div class="card">
    <div class="card-content">
      <p class="center">Reservas</p>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab">
        <a href="#test1">Aulas</a>
        </li>
        <li class="tab">
        <a  href="#test2">Materiales</a>
        </li>
      </ul>
    </div>
    <div class="card-content grey lighten-4 center">
      <div id="test1">
    		<form action="<?= base_url()?>reserva/c" method="post">
				<input type="hidden" name="uid" value="<?=$uid?>">
				<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					Reservar Aula
				</button>
			</form>  
	      </div>
      <div id="test2">
      	<form action="#"  method="post">
		  <button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					Reservar Material
				</button>
		  </form> 
	     </div>
	   </div>
    </div>
  </div>
  <!-- ------------------------------------------------- CALENDARIO -------------------------------------------------------------- -->

 <div class="row">
		 <div class="card">
    <div class="card-content">
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
      
        <li class="tab">
        <a href="#calendario1">Tus Reservas</a>
        </li>
        
        <li class="tab">
        <a href="#calendario2">Todas las reservas</a>
        </li>
        
      </ul>
    </div>
    <div class="card-content grey lighten-4 center">
    
      <div id="calendario1">
    		<form action="<?=base_url()?>calendario/rUser" method="post">
				<input type="hidden" name="uid" value="<?=$uid?>">
				<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					<i class="material-icons large right">insert_invitation</i>Calendario
				</button>
			</form>  
	      </div>
	
		<div id="calendario2">
    		<form action="<?=base_url()?>calendario/rAll" method="post">
				<input type="hidden" name="uid" value="<?=$uid?>">
				<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					<i class="material-icons large right">insert_invitation</i>Calendario
				</button>
			</form>  
	      </div>
	    
	   </div>
    </div>
  </div>
 
 <div class="divider"></div>
 
 <!-- ------------------------------------CARTA AULAS----------------------------------------- -->
 
  <div class="row">
		 <div class="card">
    <div class="card-content">
   		 <p class="center">Aulas</p>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab">
        <a href="#listAula">Listar Aulas</a>
        </li>
        
        <li class="tab">
        <a  href="#addAula">Añadir Aulas</a>
        </li>
        <li class="tab">
        <a  href="#listCAula">List Cat. Aulas</a>
        </li>
        <li class="tab">
        <a  href="#addCAula">Añadir Cat. Aulas</a>
        </li>
      
      </ul>
    </div>
    <div class="card-content grey lighten-4 center">
      <div id="listAula">
    		<form action="<?= base_url()?>aula/r" method="post">
				<input type="hidden" name="uid" value="<?=$uid?>">
				<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					<i class="material-icons large">arrow_forward</i>
				</button>
			</form>  
	      </div>
	    
      <div id="addAula">
      	<form action="<?=base_url()?>aula/c"  method="post">
		  <button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					<i class="material-icons large">add</i>
				</button>
		  </form> 
	     </div>
	     
	     <div id="listCAula">
    		<form action="<?= base_url()?>categoriaAula/r" method="post">
				<input type="hidden" name="uid" value="<?=$uid?>">
				<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					<i class="material-icons large">arrow_forward</i>
				</button>
			</form>  
	      </div>
	      <div id="addCAula">
    		<form action="<?= base_url()?>categoriaAula/c" method="post">
				<input type="hidden" name="uid" value="<?=$uid?>">
				<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					<i class="material-icons large">add</i>
				</button>
			</form>  
	      </div>
	    
	   </div>
    </div>
  </div>
 

 <!-- ------------------------------------CARTA DEPARTAMENTO----------------------------------------- -->
 	
 	<div class="divider"></div>
 	
 	<div class="row">
		 <div class="card">
    <div class="card-content">
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab">
        <a href="#test3">Listar Departamentos</a>
        </li>
        
        <li class="tab">
        <a  href="#test4">Añadir Departamentos</a>
        </li>
      
      </ul>
    </div>
    <div class="card-content grey lighten-4 center">
      <div id="test3">
    		<form action="<?= base_url()?>departamento/r" method="post">
				<input type="hidden" name="uid" value="<?=$uid?>">
				<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					<i class="material-icons large">arrow_forward</i>
				</button>
			</form>  
	      </div>
	    
      <div id="test4">
      	<form action="<?=base_url()?>departamento/c"  method="post">
		  <button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					<i class="material-icons large">add</i>
				</button>
		  </form> 
	     </div>
	    
	   </div>
    </div>
  </div>
 
 <!-- ------------------------------------CARTA MATERIALES----------------------------------------- -->
 	<div class="divider"></div>
 	
 	<div class="row">
		 <div class="card">
    <div class="card-content">
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab">
        <a href="#matList">Listar Materiales </a>
        </li>
        
        <li class="tab">
        <a  href="#matAdd">Añadir Materiales</a>
        </li>
      
      </ul>
    </div>
    <div class="card-content grey lighten-4 center">
      <div id="matList">
    		<form action="<?= base_url()?>material/r" method="post">
				<input type="hidden" name="uid" value="<?=$uid?>">
				<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					<i class="material-icons large">arrow_forward</i>
				</button>
			</form>  
	      </div>
	    
      <div id="matAdd">
      	<form action="<?=base_url()?>material/c"  method="post">
		  <button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					<i class="material-icons large">add</i>
				</button>
		  </form> 
	     </div>
	    
	   </div>
    </div>
  </div>
 
<div class="divider"></div>

<!-- ------------------------------------REGISTRAR USUARIO----------------------------------------- -->


<div class="row">
		 <div class="card">
    <div class="card-content">
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab">
        <a href="#matList">Registrar un Usuario</a>
        </li>
      </ul>
    </div>
    <div class="card-content grey lighten-4 center">
      <div id="matList">
    		<form action="<?=base_url()?>hdu/anonymous/registrar" method="post">
				<input type="hidden" name="uid" value="<?=$uid?>">
				<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					Registrar
				</button>
			</form>  
	      </div>
	
	    
	   </div>
    </div>
  </div>
	<div class="divider"></div>
	
	
	
	
	
	
	
	


</div>