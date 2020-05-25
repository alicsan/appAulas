<div class="container">
	<h1 class="alert alert-<?= $_SESSION['_msg']['severity'] ?>">
		<?=  $_SESSION['_msg']['texto']  ?>
	</h1>

	<form action="<?= $_SESSION['_msg']['uri']?>" method="get">
		<input class="button" type="submit" value="Volver">
	</form>
</div>