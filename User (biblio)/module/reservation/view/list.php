<table class="tb_list">
	<tr>
		
		<th>Date_Reservation</th>
		
		<th>Etat</th>
		
		<th>Matricule_Abonne</th>
		
		<th>Code_Livre</th>
		
		<th></th>
	</tr>
	<?php if($this->tReservation):?>
		<?php foreach($this->tReservation as $oReservation):?>
		<tr <?php echo plugin_tpl::alternate(array('','class="alt"'))?>>
			
		<td><?php echo $oReservation->Date_Reservation ?></td>
		
		<td><?php echo $oReservation->Etat ?></td>
		
		<td><?php echo $oReservation->Matricule_Abonne ?></td>
		
		<td><?php echo $oReservation->Code_Livre ?></td>
		
			<td>
				
				
<a href="<?php echo $this->getLink('reservation::show',array(
										'id'=>$oReservation->getId()
									) 
							)?>">Show</a>
			
				
				
			</td>
		</tr>	
		<?php endforeach;?>
	<?php else:?>
		<tr>
			<td colspan="5">Aucune ligne</td>
		</tr>
	<?php endif;?>
</table>

<p><a href="<?php echo $this->getLink('reservation::new') ?>">New</a></p>
			
