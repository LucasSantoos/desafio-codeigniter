<?php $this->load->view('header');?>
<?php $this->load->view('botaobuscar');?>
	
<div class="container">
	<table>
		<thead>
			<th>ID</th>
			<th>Titulo</th>
			<th>Data</th>
			
		</thead>
			<tr>
				<td> <?= $id ?> </td>
				<td> <?= $titulo ?></td>
				<td> <?= $data ?></td>
				
			</tr>
		
		</table>

	</div>

<?php $this->load->view('footer');?>
