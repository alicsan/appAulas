
<nav class="container navbar navbar-inverse fondoNegro">
  <div class="navbar-header">
    <a class="navbar-brand" href="hdu/user/homepage"> Inicio</a>
 
  </div>
  
  
  
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">

       <li class="dropdown"> 
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
            Registro<span class="caret"></span> 
         </a>
        
 		<ul class="dropdown-menu"> 
		  <li><a href="<?=base_url()?>hdu/anonymous/registrar">Registrar</a></li>
 	     </ul> 
      </li> 
      
	<li class="dropdown"> 
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
            Login<span class="caret"></span> 
         </a>
        
 		<ul class="dropdown-menu"> 
		  <li><a href="<?=base_url()?>hdu/anonymous/login">Login</a></li>
		  <li><a href="<?=base_url()?>hdu/user/logout">Logout</a></li>
			
 	     </ul> 
      </li> 

    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
           Departamento<span class="caret"></span>
        </a>
        
		<ul class="dropdown-menu">
		  <li><a href="<?=base_url()?>departamento/c">Crear</a></li>
		  <li><a href="<?=base_url()?>departamento/r">Listar</a></li>
	     </ul>
      </li>


    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
           Aulas<span class="caret"></span>
        </a>
        
		<ul class="dropdown-menu">
		  <li><a href="<?=base_url()?>aula/c">Crear</a></li>
		  <li><a href="<?=base_url()?>aula/r">Listar</a></li>
		  <li><a href="<?=base_url()?>categoriaAula/c">Crear Cat</a></li>
		  <li><a href="<?=base_url()?>categoriaAula/r">Listar Cat</a></li>
	     </ul>
      </li>

    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
           Materiales<span class="caret"></span>
        </a>
        
		<ul class="dropdown-menu">
		  <li><a href="<?=base_url()?>material/c">Crear</a></li>
		  <li><a href="<?=base_url()?>material/r">Listar</a></li>
	     </ul>
      </li>
       
	
    
    </ul>
  </div>
</nav>
