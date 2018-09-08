<?php $this->load->view('header');?>
<div class="container">
	<div class="container">
		<h4 class="center">Editar Tabelas</h4>
		<form action="<?= base_url("pagina/editartabela/$id")?> " method="post">
			<h6 class="blue-text text-darken-2">Id</h6>
				<input type="text" class="dados" id="id" name="id" value=" <?= $id ?> " size="50" required />
			<h6 class="blue-text text-darken-2">Titulo</h6>
				<input type="text" class="dados" id="titulo" name="titulo" value="<?= $titulo ?>" size="50" required />
			<h6 class="blue-text text-darken-2">Data</h6>
				<input type="date" id="data" class="dados" name="data" value="<?= $data ?>" required />
			<div class="right">
				<a class="btn grey darken-2 " href="<?=base_url('tabela')?> ">Voltar</a>
				<input class="btn green darken-2 " type="submit" value="Salvar"/>
			</div>	
		</form>
	</div>	
</div>


<?php $this->load->view('footer');?>

