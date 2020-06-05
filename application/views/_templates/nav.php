<?php 

$usuario=isset($_SESSION['rol']) ? $_SESSION['rol'] : $_SESSION['rol']="anon";
//echo var_dump($usuario);
?>
<nav class="nav   teal lighten-1">
<div class="row">
  <div class="nav-wrapper">		
  <?php 
  if($usuario=="anon"){
      echo "<a class=\"brand-logo\" href=".base_url()."><i class=\"material-icons large right\">home</i></a>";
  }
  if($usuario=="user"){
      echo " <a class=\"brand-logo\" href=".base_url()."hdu/user/homepage \"><i class=\"material-icons large right\">home</i></a>" ; 
  }
  if($usuario=="admin"){
      echo "<a class=\"brand-logo\" href=".base_url()."hdu/user/homepageAdmin\"><i class=\"material-icons large right\">home</i></a>" ;
  }
  ?>
			  
    </div> 
 	<ul  class="right hide-on-med-and-down">
        <?php if($usuario!="anon"):?>
        <li><a class="waves-effect waves-light hoverable btn light-green lighten-1" href="<?=base_url()?>hdu/anonymous/logout">
        <i class="material-icons large right">exit_to_app</i>Cerrar Sesión</a></li>
        <?php endif;?>
        </ul>
 
 	
 
  </div>
  </nav>

