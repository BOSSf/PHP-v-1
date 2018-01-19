<table class="table table-striped">
	<tr>
		
		<th>Nom_Editeur</th>
		
		<th></th>
	</tr>
	<?php if($this->tEditeur):?>
		<?php foreach($this->tEditeur as $oEditeur):?>
		<tr <?php echo plugin_tpl::alternate(array('','class="alt"'))?>>
			
		<td><?php echo $oEditeur->Nom_Editeur ?></td>
		
			<td>
				
				
<a class="btn btn-success" href="<?php echo $this->getLink('editeur::edit',array(
										'id'=>$oEditeur->getId()
									) 
							)?>">Edit</a>
			| 
<a class="btn btn-danger" href="<?php echo $this->getLink('editeur::delete',array(
										'id'=>$oEditeur->getId()
									) 
							)?>">Delete</a>
			| 
<a class="btn btn-default" href="<?php echo $this->getLink('editeur::show',array(
										'id'=>$oEditeur->getId()
									) 
							)?>">Show</a>
			
				
				
			</td>
		</tr>	
		<?php endforeach;?>
	<?php else:?>
		<tr>
			<td colspan="2">Aucune ligne</td>
		</tr>
	<?php endif;?>
</table>

<p><a class="btn btn-primary" href="<?php echo $this->getLink('editeur::new') ?>">New</a></p>
			
