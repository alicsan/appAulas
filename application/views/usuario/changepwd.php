<div class="container content">

	<div class="row">
		<h4 class="center">Cambiar contraseña</h4>
	</div>


<form action="<?=base_url()?>usuario/changepwdPost" method="post">
	<input type="hidden" name="uid" value="<?=$uid?>">
	
	<div class="input-field col s12">
	<label for="oldpwd">Introduce tu contraseña actual: </label>
	<input id="oldpwd" type="password" name="oldpwd">
	</div>
	
		<div class="input-field col s12">
	<label for="newpwd">Introduce tu nueva contraseña: </label>
	<input id="newpwd" type="password" name="newpwd">
	</div>



	<div class="col s12">
				<div class="center">
				<button class="btn waves-effect waves-light red"  onclick="submit()" name="action">
			Cambiar contraseña <i class="material-icons left">send</i>
			</button>
				</div>
			</div>
</form>

	
	

</div>