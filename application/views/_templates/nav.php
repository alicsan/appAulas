<?php $usuario=isset($_SESSION['rol']) ? $_SESSION['rol'] : $_SESSION['rol']="anon"?>
<?php 
isset($_SESSION['userName']) ? $_SESSION['userName'] : $_SESSION['userName']="jolines";

?>

<nav>
  <div class="nav-wrapper">
    <div class="row">
    		
    		<a class="brand-logo" <?php if ($usuario=='anon'):?> href="<?=base_url()?>"
  				 <?php else:?> href="<?=base_url()?>hdu/user/homepage" <?php endif;?>>
  				  <i class="material-icons large">home</i>Inicio</a>
    	
    </div>
 
 	<ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="<?=base_url()?>hdu/anonymous/login">Iniciar Sesión</a></li>
        <?php if($usuario!="anon"):?>
        <li><a href="<?=base_url()?>hdu/anonymous/logout">Cerrar Sesión</a></li>
        <?php endif;?>

      </ul>
 
 
  </div>
  </nav>

