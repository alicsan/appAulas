<div class="container content">
<div class="row">
		<h4 class="center">Iniciar sesión</h4>
	</div>
  <form class="form" action="<?=base_url()?>hdu/anonymous/loginPost" method="post">
  
  <div class="input-field col s12">
  <label for="idnombre">Nombre de usuario</label>
  <input class="form-control"id="idnombre" type="text" name="username"><br>
  </div>
  
  <div class="input-field col s12">
   <label for="idpwd">Contraseña</label>
  <input class="form-control"id="idpwd" type="password" name="pwd">
   <br>
   </div>
   
   
  	<div class="col m12">
				<div class="center">
					<input class="btn waves-effect waves-light light-green lighten-1" type="submit"
						name="action" value="Entrar">
				</div>
			</div>
  </form>

</div>
