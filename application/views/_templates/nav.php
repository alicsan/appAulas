<?php
$nombre = isset($_SESSION['_user']['_un']) ? $_SESSION['_user']['_un'] : "non";
$uid = isset($_SESSION['_user']['_uid']) ? $_SESSION['_user']['_uid'] : $_SESSION['_user']['_uid'] = 0;
$urol = isset($_SESSION['rol']) ? $_SESSION['rol'] : $_SESSION['rol'] = "anon";
$img = isset($_SESSION['_user']['_img']) ? $_SESSION['_user']['_img'] : 'profilepic.png';
// echo var_dump($uid);
?>
<nav class="nav   teal lighten-1"
	style="font-family: 'Sarala', sans-serif;">
	<div class="row">
		<div class="nav-wrapper">
			<div class="col 6">
   <?php if($urol=="anon"):?>
 <a class="brand-logo" href="<?=base_url() ?> "></a>
			</div>
		</div>

</nav>
<?php endif;?>
		 <?php if($urol=="user"):?>
<a class="brand-logo" href="<?=base_url() ?>hdu/user/homepage"><i
	class="material-icons large right">home</i>Inicio</a>
</div>
<?php endif;?>
   		<?php if($urol=="admin"):?>
<a class="brand-logo" href="<?=base_url() ?>hdu/user/homepageAdmin "><i
	class="material-icons large right">home</i>Inicio</a>
</div>
<?php endif;?>
   					<?php if($urol=="user" || $urol=="admin" ):?>
<ul class="right hide-on-med-and-down">
	<!-- Dropdown Trigger -->
	<li><a class="dropdown-trigger" href="#!" data-target="desplegable1">TUS
			RESERVAS<i class="material-icons right">arrow_drop_down</i>
	</a></li>
	<li><a class="dropdown-trigger" href="#!" data-target="desplegable2">TODAS
			LAS RESERVAS<i class="material-icons right">arrow_drop_down</i>
	</a></li>

	<li>
		<button data-target="slide-out"
			class="waves-effect waves-light btn-floating btn-large sidenav-trigger">
			<i class="material-icons">person</i>
		</button>
	</li>
</ul>
</div>
</div>
</nav>
<?php endif;?>
<!-- --------------------------------------DESPLEGABLES NAV ------------------------------------------ -->

<ul id="desplegable1" class="dropdown-content">
	<li><a href="<?=base_url()?>calendario/raMaterial">MATERIALES</a></li>
	<li class="divider"></li>
	<li><a href="<?=base_url()?>calendario/raUser">AULAS</a></li>


</ul>

<ul id="desplegable2" class="dropdown-content">
	<li><a href="<?=base_url()?>calendario/rmAll">MATERIALES</a></li>
	<li><a href="<?=base_url()?>calendario/rAll">AULAS</a></li>
         <?php if($urol=="admin"):?>
         <li><a href="<?=base_url()?>reserva/r">HISTÓRICO</a></li>
         <?php endif;?>
        </ul>



<!-- --------------------------------------BARRA DE NAVEGACIÓN LATERAL IZQ------------------------------------------ -->


<ul id="slide-out" class="sidenav grey darken-4"
	style="font-family: 'Sarala', sans-serif;">
	<li>
		<div class="user-view">
			<a href="#user"><img class="circle"
				src="<?=base_url()?>\assets\upload\<?=$img?>" height="50" width="50"></a>
			<a href="#name"><span class="white-text name"><?= $nombre?></span></a>
		</div>
		<ul class="collapsible">

			<div class="subheader"></div>
			<li>
				<div class="collapsible-header white-text">
					<i class="material-icons">brightness_7</i> Opciones de Usuario
				</div>
				<div class="collapsible-body grey darken-4">
					<ul>

						<li><form action="<?= base_url()?>usuario/changepwd" method="post"
								class="center">
								<input type="hidden" name="uid" value="<?=$uid?>">
								<button onclick="submit()"
									class="waves-effect waves-light btn hoverable">Cambiar
									contraseña</button>
							</form></li>
 								 <?php if($urol=="admin"):?>
 								 <li><form action="<?=base_url()?>usuario/registrar"
								method="post" class="center">
								<input type="hidden" name="uid" value="<?=$uid?>">
								<button onclick="submit()"
									class="waves-effect waves-light btn hoverable">Registrar
									usuario nuevo</button>
							</form></li>

						<li>
							<form action="<?=base_url()?>usuario/r" method="post"
								class="center">
								<input type="hidden" name="uid" value="<?=$uid?>">
								<button onclick="submit()"
									class="waves-effect waves-light btn hoverable">Listado de
									usuarios</button>
							</form>
						</li>
 								 
 								 <?php endif;?>
								</ul>
				</div>
			</li>
   					<?php if($urol=="admin"):?>
   				
   						<li>
				<div class="collapsible-header white-text">
					<i class="material-icons">brightness_7</i> Departamentos
				</div>
				<div class="collapsible-body grey darken-4">
					<ul>
						<li><a class="waves-effect waves-light btn hoverable"
							href="<?=base_url()?>departamento/r">LISTADO</a></li>
						<li><a class="waves-effect waves-light btn hoverable"
							href="<?=base_url()?>departamento/c">AÑADIR</a></li>
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
						<li><a class="waves-effect waves-light btn hoverable"
							href="<?=base_url()?>material/r">LISTADO</a></li>
						<li><a class="waves-effect waves-light btn hoverable"
							href="<?=base_url()?>material/c">AÑADIR</a></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="collapsible-header white-text">
					<i class="material-icons">brightness_7</i> AULAS
				</div>
				<div class="collapsible-body grey darken-4">
					<ul>
						<li><a class="waves-effect waves-light btn hoverable"
							href="<?=base_url()?>aula/c">AÑADIR AULA</a></li>
						<li><a class="waves-effect waves-light btn hoverable"
							href="<?=base_url()?>categoriaAula/c">AÑADIR CAT. AULA</a></li>
						<li><a class="waves-effect waves-light btn hoverable"
							href="<?=base_url()?>categoriaAula/r">LISTAR CAT. AULA</a></li>
					</ul>
				</div>
			</li>
   				<?php endif;?>
   				<!-- AULAS -->
			<li><div class="divider"></div></li>

			<li>
				<form action="<?= base_url()?>aula/r" method="post" class="center">
					<input type="hidden" name="uid" value="<?=$uid?>">
					<button onclick="submit()"
						class="waves-effect waves-light btn center">Listado de Aulas</button>
				</form>
			</li>

			<li>
				<form action="<?= base_url()?>material/r" method="post"
					class="center">
					<input type="hidden" name="uid" value="<?=$uid?>">
					<button onclick="submit()"
						class="waves-effect waves-light btn center">Listado de Materiales
					</button>
				</form>
			</li>




		</ul>
		</div>
	</li>
</ul>

</div>
</li>
</ul>







