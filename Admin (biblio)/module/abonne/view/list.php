<table class="table table-striped">
	<tr>
		
		<th>Nom_Abonne</th>
		
		<th>Prenom_Abonne</th>
		
		<th>Adresse_Abonne</th>
		
		<th>Numero_tel_Abonne</th>
		
		<th>Date_Naissance_Abonne</th>
		
		<th>Etat_Abonne</th>
		
		<th>Type_Abonne</th>
		
		<th></th>
	</tr>
	<?php if($this->tAbonne):?>
		<?php foreach($this->tAbonne as $oAbonne):?>
		<tr <?php echo plugin_tpl::alternate(array('','class="alt"'))?>>
			
		<td><?php echo $oAbonne->Nom_Abonne ?></td>
		
		<td><?php echo $oAbonne->Prenom_Abonne ?></td>
		
		<td><?php echo $oAbonne->Adresse_Abonne ?></td>
		
		<td><?php echo $oAbonne->Numero_tel_Abonne ?></td>
		
		<td><?php echo $oAbonne->Date_Naissance_Abonne ?></td>
		
		<td><?php echo $oAbonne->Etat_Abonne ?></td>
		
		<td><?php echo $oAbonne->Type_Abonne ?></td>
		
			<td>
				
				
<a class="btn btn-success" href="<?php echo $this->getLink('abonne::edit',array(
										'id'=>$oAbonne->getId()
									) 
							)?>">Edit</a>
			| 
<a class="btn btn-danger" href="<?php echo $this->getLink('abonne::delete',array(
										'id'=>$oAbonne->getId()
									) 
							)?>">Delete</a>
			| 
<a class="btn btn-default" href="<?php echo $this->getLink('abonne::show',array(
										'id'=>$oAbonne->getId()
									) 
							)?>">Show</a>
			
				
				
			</td>
		</tr>	
		<?php endforeach;?>
	<?php else:?>
		<tr>
			<td colspan="8">Aucune ligne</td>
		</tr>
	<?php endif;?>
</table>

<p><a class="btn btn-primary" href="<?php echo $this->getLink('abonne::new') ?>">New</a></p>
			
