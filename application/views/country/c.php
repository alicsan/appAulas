<div class="container">

<h1>New Country</h1>

<form action="<?=base_url()?>country/cPost" method="post">
	<label for="idp">Nombre</label>
	<input id="idp" type="text" name="nombre"/>
	<input type="submit"/>
	<a href="<?=base_url()?>country/r"><input type="button" value="Cancelar"></a>
</form>

 </div>