<?php $usuario=isset($_SESSION['rol']) ? $_SESSION['rol'] : $_SESSION['rol']="anon"?>
<?php 
isset($_SESSION['userName']) ? $_SESSION['userName'] : $_SESSION['userName']="jolines";
?>

<nav class="nav">
<div class="row">
  <div class="nav-wrapper">		
    		<a class="brand-logo" <?php if ($usuario=='anon'):?> href="<?=base_url()?>"
  				 <?php else:?> href="<?=base_url()?>hdu/user/homepage" <?php endif;?>>
  				  <i class="material-icons large">home</i>Inicio</a>
    	
    </div>
 	
 
 	<ul  class="right hide-on-med-and-down">
 	<?php //if($usuario == "admin" || $usuario == "user"):?>
      <!-- <li><a class="waves-effect waves-light hoverable btn light-green lighten-1" href="<?=base_url()?>hdu/anonymous/login">Iniciar Sesión</a></li> -->  
        <?php //endif;?>
        
        <?php if($usuario!="anon"):?>
        <li><a class="waves-effect waves-light hoverable btn light-green lighten-1" href="<?=base_url()?>hdu/anonymous/logout">Cerrar Sesión</a></li>
        <?php endif;?>
        </ul>
 
 	
 
  </div>
  </nav>

