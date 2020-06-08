<?php 
//session_start();
    $usuario=isset($_SESSION['usuario']) ? $_SESSION['usuario'] : $_SESSION['usuario']="anon";
       $uid=$usuario->id;
?>
<div class="container content">

<?php if($usuario->rol=="user"):?>
	<div class="row">
		<h4 class="center">Área Personal</h4>
	</div>
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
				<input type="hidden" name="id" value="<?=$uid?>">
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
 
 <!-- ------------------------------------CARTA DEPARTAMENTOS----------------------------------------- -->
 
 
 
 
 <div class="row">
		 <div class="card">
    <div class="card-content">
      
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab">
        <a href="#test3">Departamentos</a>
        </li>
      
      </ul>
    </div>
    <div class="card-content grey lighten-4 center">
      <div id="test3">
    		<form action="<?= base_url()?>departamento/r" method="post">
				<input type="hidden" name="id" value="<?=$uid?>">
				<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					Listar
				</button>
			</form>  
	      </div>
	    
	   </div>
    </div>
  </div>
 

 <div class="divider"></div>
 

<?php endif;?>
</div>
