<?php $this->load->view('header');?>
<?php $this->load->view('botaobuscar');?>
	
<div class="container">
	<table>
		<thead>
			<th>ID</th>
			<th>Titulo</th>
			<th>Data</th>
			
        </thead>
        <?php foreach ($cliente as $clientee) {?>
			<tr>
				<td> <?= $clientee -> id ?> </td>
				<td> <?= $clientee -> titulo ?></td>
				<td> <?= $clientee -> data ?></td>
			</tr>
        <?php  }?>
		</table>

	</div>

	
	
<?php $this->load->view('footer');?>