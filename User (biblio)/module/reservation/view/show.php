<table class="tb_show">
	
	<tr>
		<th>Date_Reservation</th>
		<td><?php echo $this->oReservation->Date_Reservation ?></td>
	</tr>
		
	<tr>
		<th>Etat</th>
		<td><?php echo $this->oReservation->Etat ?></td>
	</tr>
		
	<tr>
		<th>Matricule_Abonne</th>
		<td><?php echo $this->oReservation->Matricule_Abonne ?></td>
	</tr>
		
	<tr>
		<th>Code_Livre</th>
		<td><?php echo $this->oReservation->Code_Livre ?></td>
	</tr>
		
	
	<tr>
		<th></th>
		<td>
			<p>
				<a href="<?php echo $this->getLink('reservation::list')?>">Retour</a>
			</p>
		</td>
	</tr>
</table>
