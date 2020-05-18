<!-- 
Formulario de Actualizacion de Aficion.
Contiene los siguientes elementos:
1∫ Un contenedor de la clase "container" para que se aplique la libreria bootstrap.
2∫ Un encabezado de tamaÒo h1 para indicar el formularion actual.
3∫ Una etiqueta de formulario que lo envia al controlador aficion a la accion uPost por el metodo POST.
4∫ Una pareja label input con el mismo id para la usabilidad que contendra el nombre de la nueva aficion.
5∫ Un campo oculto que contiene el id de la Aficion a actualizar.
6∫ Un boton de submit para el envio de los datos. 
 -->
<div class="container">

<h1>Edici√≥n de afici√≥n</h1>

<form action="<?=base_url()?>aficion/uPost" method="post">
	<label for="idp">Nombre</label>
	<input id="idp" type="text" name="nombre" value="<?=$nombre?>"/>
	<input type="hidden" value="<?=$id?>" name="id">
	<input type="submit"/>
</form>

</div>