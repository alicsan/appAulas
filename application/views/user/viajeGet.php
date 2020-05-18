<div class="container">

<h1>Register Travel</h1>

<form action="<?=base_url()?>user/rViajesPost" method="post">
	<label for="idDn">Dni</label>
	<input id="idDn" type="text" name="dni"/>
	<br>
	Travel
	<br>
	<?php foreach ($city as $ciudad):?>
		<input id="id-af-<?=$ciudad->id?>" type="checkbox" name="idsTravel[]" value="<?=$ciudad->id?>"/>
		<label for="id-af-<?=$ciudad->id?>"><?=$ciudad->name?></label>
	<?php endforeach;?>	
	<input type="submit"/>
	<a href="<?=base_url()?>user/r"><input type="button" value="Cancelar"></a>
</form>

 </div>

