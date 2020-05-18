<div class="container">

<h1>New City</h1>

<form action="<?=base_url()?>city/cPost" method="post">
	<label for="idp">Nombre</label>
	<input id="idp" type="text" name="nombre"/>
	<br>
	Country
	<select name="idCountry">
		<?php foreach ($country as $pais):?>
		<option value="<?=$pais->id?>"><?=$pais->name?></option>
		<?php endforeach;?>
	</select>
	<input type="submit"/>
	<a href="<?=base_url()?>country/r"><input type="button" value="Cancelar"></a>
</form>

 </div>