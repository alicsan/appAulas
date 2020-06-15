<?php 
$user=isset($_SESSION['usuario']) ? $_SESSION['usuario'] : $_SESSION['usuario']="anon";
// $uid=$user->id;

$usuario=isset($_SESSION['rol']) ? $_SESSION['rol'] : $_SESSION['rol']="anon";


?>
<nav class="nav   teal lighten-1" style="font-family: 'Sarala', sans-serif;">
<div class="row">
  <div class="nav-wrapper">	
  <div class="col">
  <?php 
  if($usuario=="anon"){
      echo "<a class=\"brand-logo\" href=".base_url()."><i class=\"material-icons large right\">home</i></a>";
  }
  if($usuario=="user"){
      echo " <a class=\"brand-logo\" href=".base_url()."hdu/user/homepage \"\><i class=\"material-icons large right\">home</i>Inicio</a>" ; 
  }
  if($usuario=="admin"){
      echo "<a class=\"brand-logo\" href=".base_url()."hdu/user/homepageAdmin \"\><i class=\"material-icons large right\">home</i>Inicio</a>" ;
  }
  ?>
			  
    </div>       
       
 			<button data-target="slide-out" class=" s4 m4 l4 xl4 right btn waves-light  sidenav-trigger"><i class="small material-icons">dehaze </i></button>
		
	
	</div>	
   </div>
  </nav>

<!-- -----------------------------------------------SIDENAV------------------------------------------- -->
 
<?php if($usuario=="user"):?>
<ul id="slide-out" class="sidenav grey darken-4" style="font-family: 'Sarala', sans-serif;">
    <li>
    <div class="user-view">
  
      <p class="white-text"><i><?= $user->nombre?></i></p>
     <ul class="collapsible">

      <div class="subheader"></div>
 						<li> 
							<div class="collapsible-header white-text">
								<i class="material-icons">brightness_7</i> Opciones de Usuario
 							</div> 
							<div class="collapsible-body grey darken-4"> 
								<ul>
									
 									<li><form action="<?= base_url()?>usuario/changepwd" method="post">
											<input type="hidden" name="uid" value="<?=$user->id?>">
													<button onclick="submit()" class="waves-effect waves-light btn hoverable">
														Cambiar contraseña
													</button>
											</form>
									</li>
 								 
								</ul>
   					 </div>
   				</li>
   				
   				
   				<!-- AULAS -->			
   				
   				<div class="divider"></div>
   				<li>
   				<form action="<?= base_url()?>aula/r" method="post">
				<input type="hidden" name="uid" value="<?=$user->id?>">
				<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					Listado de Aulas
				</button>
			</form>
			
   				<li><div class="divider"></div></li>
   				<!-- TUS RESERVAS   -->
   				<li>
   					<form action="<?=base_url()?>calendario/rUser" method="post">
					<input type="hidden" name="uid" value="<?=$user->id?>">
					<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					<i class="material-icons large right">insert_invitation</i>TUS RESERVAS
					</button>
					</form> 
				</li>
   				
   				 <li><div class="divider"></div></li>
   				 <!-- TODAS LAS RESERVAS   -->
   				<li>
   					<form action="<?=base_url()?>calendario/rAll" method="post">
					<input type="hidden" name="uid" value="<?=$user->id?>">
					<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					<i class="material-icons large right">insert_invitation</i>TODAS LAS RESERVAS	
					</button>
			</form> 
   				</li>
   				<li><div class="divider"></div></li>
   				
   				 
   		</ul>
   	</div>	
   	</li>	
 </ul> 
 <?php endif;?>
  
  <?php if($usuario=="admin"):?>
  
  <ul id="slide-out" class="sidenav grey darken-4" style="font-family: 'Sarala', sans-serif;">
    <li>
    <div class="user-view">
  
      <p class="white-text"><i><?= $user->nombre?> <?= $user->id?></i></p>
     <ul class="collapsible">

      <div class="subheader"></div>
 						<li> 
							<div class="collapsible-header white-text">
								<i class="material-icons">brightness_7</i> Opciones de Usuario
 							</div> 
							<div class="collapsible-body grey darken-4"> 
								<ul>
									<li>
										<form action="<?= base_url()?>usuario/changepwd" method="post">
											  <input type="hidden" name="uid" value="<?=$user->id?>">
													<button onclick="submit()" class="waves-effect waves-light btn hoverable">
														Cambiar contraseña
													</button>
									</li>
 									
 									<li><a class="waves-effect waves-light btn hoverable" href="<?=base_url()?>usuario/registrar">Registrar Usuario</a></li> 
								</ul>
   					 </div>
   				</li>
   				
   				<li> 
							<div class="collapsible-header white-text">
								<i class="material-icons">brightness_7</i> Departamentos
 							</div> 
							<div class="collapsible-body grey darken-4"> 
								<ul>
									<li>
									  <a class="waves-effect waves-light btn hoverable" href="<?=base_url()?>departamento/r">LISTADO</a>
									</li>
 									<li>
 										<a class="waves-effect waves-light btn hoverable" href="<?=base_url()?>departamento/c">AÑADIR</a>
 									</li> 
								</ul>
	   					 </div>
   				</li>
   
   				 <!-- MATERIALES -->
   				 
   				 <li> 
							<div class="collapsible-header white-text">
								<i class="material-icons">brightness_7</i> Materiales
 							</div> 
							<div class="collapsible-body grey darken-4"> 
								<ul>
									<li>
									<a class="waves-effect waves-light btn hoverable" href="<?=base_url()?>material/r">LISTADO</a>  
									</li>
 									<li>
 										<a class="waves-effect waves-light btn hoverable" href="<?=base_url()?>material/c">AÑADIR</a>
 									</li> 
								</ul>
	   					 </div>
   				</li>
   				 <li> 
							<div class="collapsible-header white-text">
								<i class="material-icons">brightness_7</i> AULAS
 							</div> 
							<div class="collapsible-body grey darken-4"> 
								<ul>
									<li>
		 								 <a class="waves-effect waves-light btn hoverable" href="<?=base_url()?>aula/c">AÑADIR AULA</a>
 									</li> 
 									<li>
 										<a class="waves-effect waves-light btn hoverable" href="<?=base_url()?>categoriaAula/c">AÑADIR CAT. AULA</a>
 									</li>
 									<li>
 										<a class="waves-effect waves-light btn hoverable" href="<?=base_url()?>categoriaAula/r">LISTAR CAT. AULA</a>
 									</li>
								</ul>
	   					 </div>
   				</li>
   				
   				<!-- AULAS -->			
   				
   				<div class="divider"></div>
   				<li>
   				<form action="<?= base_url()?>aula/r" method="post">
				<input type="hidden" name="uid" value="<?=$user->id?>">
				<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					Listado de Aulas
				</button>
			</form>
			
   				<li><div class="divider"></div></li>
   				<!-- TUS RESERVAS   -->
   				<li>
   					<form action="<?=base_url()?>calendario/rUser" method="post">
					<input type="hidden" name="uid" value="<?=$user->id?>">
					<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					<i class="material-icons large right">insert_invitation</i>TUS RESERVAS
					</button>
					</form> 
				</li>
   				
   				 <li><div class="divider"></div></li>
   				 <!-- TODAS LAS RESERVAS   -->
   				<li>
   					<form action="<?=base_url()?>calendario/rAll" method="post">
					<input type="hidden" name="uid" value="<?=$user->id?>">
					<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					<i class="material-icons large right">insert_invitation</i>TODAS LAS RESERVAS	
					</button>
			</form> 
   				</li>
   				<li><div class="divider"></div></li>
   				
   				 
   		</ul>
   	</div>	
   	</li>	
 </ul> 

  
  <?php endif;?>
  
  
  
  
  
  
  
  