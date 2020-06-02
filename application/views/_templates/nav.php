<?php $usuario=isset($_SESSION['rol']) ? $_SESSION['rol'] : $_SESSION['rol']="anon"?>
<?php 
echo var_dump($_SESSION['rol']);
?>

<nav class="container navbar navbar-inverse fondoNegro">
  <div class="navbar-header">
    <a class="navbar-brand" 
    <?php if ($usuario=='anon'):?> href="<?=base_url()?>"
    <?php else:?> href="<?=base_url()?>hdu/user/homepage" 
    <?php endif;?>> Inicio</a>
 
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
      
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>hdu/anonymous/registrar">Registrar Usuario</a>
      </li>
      
     
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>calendario/r">Calendario</a>
      </li>
		
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
    
    <ul class="dropdown-menu">
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
           Materiales<span class="caret"></span>
        </a>
        
		
		  <li><a href="<?=base_url()?>material/r">Listar</a></li>
		  <?php if($usuario=="admin"):?>
		  <li><a href="<?=base_url()?>material/c">Crear</a></li>
		  <?php endif;?>
	     </ul>
      </li>
		
		
        <?php endif;?>
	
    
    </ul>
  </div>
</nav>
