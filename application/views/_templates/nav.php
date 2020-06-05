<?php 

$usuario=isset($_SESSION['rol']) ? $_SESSION['rol'] : $_SESSION['rol']="anon"?>


<nav class="nav   teal lighten-1">
<div class="row">
  <div class="nav-wrapper">		
<?php switch ($usuario):?><?php case "anon":?>
  				  <a class="brand-logo" href="<?=base_url()?>"<i class="material-icons large">home</i></a>
  				  <?php case "user":?>
  				  <a class="brand-logo" href="<?=base_url()?>hdu/user/homepage"><i class="material-icons large">home</i>Inicio</a>
  				  <?php case "admin":?>
  				  <a class="brand-logo" href="<?=base_url()?>hdu/user/homepageAdmin"><i class="material-icons large">home</i>Inicio</a>
  				  <?php endswitch;?>				  
    </div>
 	
 
 	<ul  class="right hide-on-med-and-down">
        <?php if($usuario!="anon"):?>
        <li><a class="waves-effect waves-light hoverable btn light-green lighten-1" href="<?=base_url()?>hdu/anonymous/logout">
        <i class="material-icons large right">exit_to_app</i>Cerrar Sesión</a></li>
        <?php endif;?>
        </ul>
 
 	
 
  </div>
  </nav>

