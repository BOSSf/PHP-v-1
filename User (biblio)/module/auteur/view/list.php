<table class="tb_list">
	<tr>
		
		<th>Nom_Auteur</th>
		
		<th>Prenom_Auteur</th>
		
		<th></th>
	</tr>
	<?php if($this->tAuteur):?>
		<?php foreach($this->tAuteur as $oAuteur):?>
		<tr <?php echo plugin_tpl::alternate(array('','class="alt"'))?>>
			
		<td><?php echo $oAuteur->Nom_Auteur ?></td>
		
		<td><?php echo $oAuteur->Prenom_Auteur ?></td>
		
			<td>
				
				
<a href="<?php echo $this->getLink('auteur::edit',array(
										'id'=>$oAuteur->getId()
									) 
							)?>">Edit</a>
			| 
<a href="<?php echo $this->getLink('auteur::delete',array(
										'id'=>$oAuteur->getId()
									) 
							)?>">Delete</a>
			| 
<a href="<?php echo $this->getLink('auteur::show',array(
										'id'=>$oAuteur->getId()
									) 
							)?>">Show</a>
			
				
				
			</td>
		</tr>	
		<?php endforeach;?>
	<?php else:?>
		<tr>
			<td colspan="3">Aucune ligne</td>
		</tr>
	<?php endif;?>
</table>

<p><a href="<?php echo $this->getLink('auteur::new') ?>">New</a></p>
			
