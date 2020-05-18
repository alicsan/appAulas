<!-- 
Pagina que lista las Aficiones.
Contiene los siguientes elementos:
1∫ Un contenedor de la clase "container" para que se aplique la libreria bootstrap.
2∫ Un encabezado de tamaÒo h1 para indicar el formularion actual.
3∫ Un par de botones que Crearian una nueva Aficion o Volverian a la pagina principal.
4∫ Una tabla para dar formato a los datos.
5∫ La linea de encabezado son dos celdas. Una contiene el nombre de la Aficion y otra las Acciones disponibles de dicha aficion.
6∫ En las lineas de datos, se han creado con un foreach para no estar buscando por aficion.
7∫ El primer campo es el nombre.
8∫ El segundo campo es para eliminar la aficion de esa linea
9∫ El tercer campo es para actualizar la aficion de esa linea.
 -->

<div class="container">

<h1>Lista de aficiones</h1>

<a href="<?=base_url()?>aficion/c"><button>Nuevo</button></a>
<a href="<?=base_url()?>"><button>Volver</button></a>

<table border="1">
	<tr>
		<th>Nombre</th>
		<th>Acci√≥n</th>
	</tr>
	
	<?php foreach ($aficiones as $aficion): ?>
		<tr>
			<td><?= $aficion->nombre?></td>
			<td>
				<form action="<?=base_url()?>aficion/dPost" method="post">
					<input type="hidden" name="id" value="<?=$aficion->id?>">
					<button onclick="submit()">
						<img src="<?=base_url()?>/assets/img/basura.png" height="20" width="20">
					</button>
				</form>
				<form action="<?=base_url()?>aficion/u" method="get">
					<input type="hidden" name="id" value="<?=$aficion->id?>">
					<button onclick="submit()">
						<img src="<?=base_url()?>/assets/img/lapiz.png" height="20" width="20">
					</button>
				</form>
			</td>
		</tr>
	<?php endforeach;?>
</table>

</div>

