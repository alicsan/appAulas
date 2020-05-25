<?php $usuario=isset($_SESSION['rol']) ? $_SESSION['rol'] : $_SESSION['rol']="anon"?>

<nav class="container navbar navbar-inverse fondoNegro">
  <div class="navbar-header">
    <a class="navbar-brand" href="<?=base_url()?>"> Inicio</a>
 
  </div>
  
  
  
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
     
	<li class="dropdown"> 
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
            Login<span class="caret"></span> 
         </a>
        
 		<ul class="dropdown-menu"> 
		  <li><a href="<?=base_url()?>hdu/anonymous/login">Login</a></li>
		  <li><a href="<?=base_url()?>hdu/anonymous/logout">Logout</a></li>
			
 	     </ul> 
      </li> 
      <?php if($usuario=="admin"):?>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>anonymous/registrar">Registrar Usuario</a>
      </li>
		<?php endif;?>
		<?php if($usuario=="user" || $usuario=="admin"):?>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
           Departamento<span class="caret"></span>
        </a>
        
		<ul class="dropdown-menu">
		  <li><a href="<?=base_url()?>departamento/r">Listar</a></li>
		  <?php if($usuario=="admin"):?>
		  <li><a href="<?=base_url()?>departamento/c">Crear</a></li>
		  <?php endif;?>
	     </ul>
      </li>


    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
           Aulas<span class="caret"></span>
        </a>
        
		<ul class="dropdown-menu">
		  
		  <li><a href="<?=base_url()?>aula/r">Listar</a></li>
		  <?php if($usuario=="admin"):?>
		 <li><a href="<?=base_url()?>aula/c">Crear</a></li>
		  <li><a href="<?=base_url()?>categoriaAula/c">Crear Cat</a></li>
		  <li><a href="<?=base_url()?>categoriaAula/r">Listar Cat</a></li>
	     </ul>
	      <?php endif;?>
      </li>
	</ul>
    
        
		
		<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
           Materiales<span class="caret"></span>
        </a>
         <ul class="dropdown-menu">
				  <li><a href="<?=base_url()?>material/r">Listar</a></li>
				 
		  	  <?php if($usuario=="admin"):?>
		  	  <li><a href="<?=base_url()?>material/c">Crear</a></li>
		  	  <?php endif;?>
	     
      </li>
        <?php endif;?>
	
    
    </ul>
  </div>
</nav>
