<table class="table table-striped">
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
				
				
<a class="btn btn-success" href="<?php echo $this->getLink('reservation::edit',array(
										'id'=>$oReservation->getId()
									) 
							)?>">Edit</a>
			| 
<a class="btn btn-danger" href="<?php echo $this->getLink('reservation::delete',array(
										'id'=>$oReservation->getId()
									) 
							)?>">Delete</a>
			| 
<a class="btn btn-default" href="<?php echo $this->getLink('reservation::show',array(
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

<p><a class="btn btn-primary" href="<?php echo $this->getLink('reservation::new') ?>">New</a></p>
			
