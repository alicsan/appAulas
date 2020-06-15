<?php 
$nombre=isset($_SESSION['_user']['_un']) ? $_SESSION['_user']['_un'] : "non";
$uid=isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;
$urol=isset($_SESSION['rol']) ? $_SESSION['rol'] : $_SESSION['rol']="anon";
?>
<nav class="nav   teal lighten-1" style="font-family: 'Sarala', sans-serif;">
<div class="row">
  <div class="nav-wrapper">	
  <div class="col 6">
   <?php if($urol=="anon"):?>
 <a class="brand-logo" href="<?=base_url() ?> "><i class="material-icons large right">home</i>Inicio</a>
  </div>	
   </div>
  </nav>
<?php endif;?>
		 <?php if($urol=="user"):?>
		 <a class="brand-logo" href="<?=base_url() ?>hdu/user/homepage "><i class="material-icons large right">home</i>Inicio</a>
    </div>       
 		<div class="col6">
							
 		</div>
 		
   				
   				
   				<ul class="right hide-on-med-and-down">
        <li>
					<a  class="waves-effect waves-light btn" href="<?=base_url()?>calendario/rUser" >
					<i class="material-icons left">insert_invitation</i>TUS RESERVAS
					</a>
					
					
			 </li>
        <li>
					<a  class="waves-effect waves-light btn" href="<?=base_url()?>calendario/rAll" >
					<i class="material-icons left">insert_invitation</i>TODAS LAS RESERVAS
					</a>
					
					
			 </li>
        <li>
   		<button data-target="slide-out" class="waves-effect waves-light btn-floating btn-large sidenav-trigger right"><i class="material-icons">person</i></button> 	
				</li>
      </ul>
	</div>	
   </div>
  </nav>
<?php endif;?>
<?php if($urol=="admin"):?>
<a class="brand-logo" href="<?=base_url() ?>hdu/user/homepageAdmin "><i class="material-icons large right">home</i>Inicio</a>
    </div>       
 		<div class="col6">
							
 		</div>
 		
   				
   				
   				<ul class="right hide-on-med-and-down">
        <li>
					<a  class="waves-effect waves-light btn" href="<?=base_url()?>calendario/rUser" >
					<i class="material-icons left">insert_invitation</i>TUS RESERVAS
					</a>
					
					
			 </li>
        <li>
					<a  class="waves-effect waves-light btn" href="<?=base_url()?>calendario/rAll" >
					<i class="material-icons left">insert_invitation</i>TODAS LAS RESERVAS
					</a>
					
					
			 </li>
        <li>
   		<button data-target="slide-out" class="waves-effect waves-light btn-floating btn-large sidenav-trigger right"><i class="material-icons">person</i></button> 	
				</li>
      </ul>
	</div>	
   </div>
  </nav>
<?php endif;?>
<!-- -----------------------------------------------SIDENAV------------------------------------------- -->
 
<?php if($urol=="user"):?>
<ul id="slide-out" class="sidenav grey darken-4" style="font-family: 'Sarala', sans-serif;">
    <li>
    <div class="user-view">
  
      <p class="white-text"><i><?= $nombre?></i></p>
     <ul class="collapsible">

      <div class="subheader"></div>
 						<li> 
							<div class="collapsible-header white-text">
								<i class="material-icons">brightness_7</i> Opciones de Usuario
 							</div> 
							<div class="collapsible-body grey darken-4"> 
								<ul>
									
 									<li><form action="<?= base_url()?>usuario/changepwd" method="post">
											<input type="hidden" name="uid" value="<?=$uid?>">
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
				<input type="hidden" name="uid" value="<?=$uid?>">
				<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					Listado de Aulas
				</button>
			</form>
			
   				<li><div class="divider"></div></li>
   				<!-- TUS RESERVAS   -->
   				<li>
   					<form action="<?=base_url()?>calendario/rUser" method="post">
					<input type="hidden" name="uid" value="<?=$uid?>">
					<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					<i class="material-icons large right">insert_invitation</i>TUS RESERVAS
					</button>
					</form> 
				</li>
   				
   				 <li><div class="divider"></div></li>
   				 <!-- TODAS LAS RESERVAS   -->
   				<li>
   					<form action="<?=base_url()?>calendario/rAll" method="post">
					<input type="hidden" name="uid" value="<?=$uid?>">
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
  
  <?php if($urol=="admin"):?>
  
  <ul id="slide-out" class="sidenav grey darken-4" style="font-family: 'Sarala', sans-serif;">
    <li>
    <div class="user-view">
  
      <p class="white-text"><i><?= $nombre?> <?= $uid?></i></p>
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
											  <input type="hidden" name="uid" value="<?=$uid?>">
													<button onclick="submit()" class="waves-effect waves-light btn hoverable">
														Cambiar contraseña
													</button>
									</li>
 									
 									<li><a class="waves-effect waves-light btn hoverable" href="<?=base_url()?>usuario/registrar">Registrar Usuario</a>
 										<form action="<?=base_url()?>usuario/registrar" method="post">
											  <input type="hidden" name="uid" value="<?=$uid?>">
													<button onclick="submit()" class="waves-effect waves-light btn hoverable">
														Cambiar contraseña
													</button>
 									</li> 
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
				<input type="hidden" name="uid" value="<?=$uid?>">
				<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					Listado de Aulas
				</button>
			</form>
			
   				<li><div class="divider"></div></li>
   				<!-- TUS RESERVAS   -->
   				<li>
   					<form action="<?=base_url()?>calendario/rUser" method="post">
					<input type="hidden" name="uid" value="<?=$uid?>">
					<button onclick="submit()" class="waves-effect waves-light btn light-green lighten-1">
					<i class="material-icons large right">insert_invitation</i>TUS RESERVAS
					</button>
					</form> 
				</li>
   				
   				 <li><div class="divider"></div></li>
   				 <!-- TODAS LAS RESERVAS   -->
   				<li>
   					<form action="<?=base_url()?>calendario/rAll" method="post">
					<input type="hidden" name="uid" value="<?=$uid?>">
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
  
  
  
  
  
  
  
  