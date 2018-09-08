<?php $this->load->view('header');?>
<?php $this->load->view('botaobuscar');?>

<div class="container">
	<table class="striped">
		<thead>
			<th>ID</th>
			<th>Titulo</th>
			<th>Data</th>
			<th class="center" >Ações</th>
		</thead>
		<?php foreach ($clientes as $cliente) {?>
			<tr>
				<td> <?= $cliente -> id ?> </td>
				<td> <?= $cliente -> titulo ?></td>
				<td> <?= $cliente -> data ?></td>
				<td class="center" > 
					<a class="btn-small red darken-2" href="<?= base_url("deletar/{$cliente->id}")?>"> Deletar </a> 
					<a class="btn-small grey darken-2" href="<?= base_url("editartabela/{$cliente->id}")?>"> Editar </a> 
				
				</td>
			</tr>
			<?php  }?>
		</table>
	</div>
	

<?php $this->load->view('footer');?>
