<?php $this->load->view('header');?>
<div class="container">
	<div class="container">
		<h4 class="center">Criar Tabelas</h4>
		<form action="<?= base_url('pagina/cadastrar')?> " method="post">
			<h6 class="blue-text text-darken-2">Id</h6>
				<input type="text" id="id" name="id" value="" size="50" required />
			<h6 class="blue-text text-darken-2">Titulo</h6>
				<input type="text" id="titulo" name="titulo" value="" size="50" required />
			<h6 class="blue-text text-darken-2">Data</h6>
				<input type="date" id="data" name="date" required />
			<div class="right">
				<a class="btn grey darken-2 " href="<?=base_url('tabela')?> ">Voltar</a>
				<input class="btn green darken-2 " type="submit" value="Salvar"/>	
			</div>
		</form>
	</div>
</div>

<?php $this->load->view('footer');?>
