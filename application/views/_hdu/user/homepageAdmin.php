<?php 
    $usuario=isset($_SESSION['usuario']) ? $_SESSION['usuario'] : $_SESSION['usuario']="anon";
       $uid=$usuario->id;
?>
<div class="container content">


	<div class="row">
		<h4 class="center">Área Personal</h4>
	</div>
	
	<div class="divider"></div>
	 
	 
		<!-- ------------------------------------CARTA RESERVAS----------------------------------------- -->
		<div class="row">
		 <div class="card">
    <div class="card-content">
      <p class="center">RESERVAR</p>
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

 
  

</div>