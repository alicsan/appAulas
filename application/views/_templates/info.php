<div class="container">
	<h2 class="alert alert-<?= $_SESSION['_msg']['severity'] ?>">
		<?=  $_SESSION['_msg']['texto']  ?>
	</h3>

	<form action="<?= $_SESSION['_msg']['uri']?>" method="get">
		<input class="btn waves-effect waves-light light-green lighten-1" type="submit" value="Volver">
	</form>
</div>