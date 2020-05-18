<div class="container">

<h1>New User</h1>

<form action="<?=base_url()?>user/cPost" method="post">
	<label for="idDn">Dni</label>
	<input id="idDn" type="text" name="dni"/>
	<br>
	<label for="nam">Name</label>
	<input id="nam" type="text" name="name"/>
	<br>
	Born
	<select name="idBorn">
		<?php foreach ($city as $ciudad):?>
		<option value="<?=$ciudad->id?>"><?=$ciudad->name?></option>
		<?php endforeach;?>
	</select>
	<input type="submit"/>
	<a href="<?=base_url()?>user/r"><input type="button" value="Cancelar"></a>
</form>

 </div>