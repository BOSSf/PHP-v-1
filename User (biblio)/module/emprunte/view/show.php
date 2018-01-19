<table class="tb_show">
	
	<tr>
		<th>Date_Emprunt</th>
		<td><?php echo $this->oEmprunte->Date_Emprunt ?></td>
	</tr>
		
	<tr>
		<th>Date_Retour</th>
		<td><?php echo $this->oEmprunte->Date_Retour ?></td>
	</tr>
		
	<tr>
		<th>Matricule_Abonne</th>
		<td><?php echo $this->oEmprunte->Matricule_Abonne ?></td>
	</tr>
		
	<tr>
		<th>Code_Livre</th>
		<td><?php echo $this->oEmprunte->Code_Livre ?></td>
	</tr>
		
	
	<tr>
		<th></th>
		<td>
			<p>
				<a href="<?php echo $this->getLink('emprunte::list')?>">Retour</a>
			</p>
		</td>
	</tr>
</table>
