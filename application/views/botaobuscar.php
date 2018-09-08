
<div class="container">
	<div class="row">		
		<div class="col l6 s12">
			<form action="<?= base_url('pagina/buscarid')?>" method="post">
				<h5>Procurar pelo ID</h5>
				<input type="text" name="id" id="id" required>
				<input class="btn grey darken-2" type="submit" value="Buscar">
			</form>
		</div>
		<div class="col l6 s12">
			<form action="<?= base_url('pagina/buscardata')?>" method="post">
			<h5>Procurar pela data</h5>
			<input type="date" name="data" id="data" required>
			<input class="btn grey darken-2" type="submit" value="Buscar">
			</form>
		</div>
	</div>

	<a class="btn green darken-1" href="<?= base_url('criartabela')?>" ><i class="material-icons right">add</i>Adicionar</a>

</div>

