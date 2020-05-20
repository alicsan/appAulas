<div class="container">
<h3>Registro de nuevo usuario</h3>
<form action="<?=base_url()?>hdu/anonymous/registrarPost" method="post">
<label for="idp">Nombre</label>
<input id="idp" type="text" name="nombre" required="required">
<br>
<label for="id-pwd">Contraseña</label>
	<input id="id-pwd" type="password" name="pwd" required="required">
	<br>


Pais de residencia: <select name="idPaisReside">
    
    <?php foreach($paises as $pais):?>
    <option value="<?=$pais->id?>">
    <?=$pais->nombre ?>
     </option>

    <?php endforeach;?>
</select><br>


<input type="submit">
<a href="<?= base_url()?>" ><button>Volver</button></a>
</form>

</div>