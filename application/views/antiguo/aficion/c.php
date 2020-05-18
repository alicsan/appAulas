<!-- 
Formulario de creacion de una Aficion.
Contiene los siguientes campos:
1∫ Un contenedor de la clase "container" para que se aplique la libreria bootstrap.
2∫ Un encabezado de tamaÒo h1 para indicar el formularion actual.
3∫ Una etiqueta de formulario que lo envia al controlador aficion a la accion cPost por el metodo POST.
4∫ Una pareja label input con el mismo id para la usabilidad que contendra el nombre de la nueva aficion.
5∫ Un boton de submit para el envio de los datos. 
 -->

<div class="container">

<h1>Nueva afici√≥n</h1>

<form action="<?=base_url()?>aficion/cPost" method="post">
	<label for="idp">Nombre</label>
	<input id="idp" type="text" name="nombre"/>
	<input type="submit"/>
</form>

</div>