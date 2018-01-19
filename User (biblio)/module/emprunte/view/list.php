<table class="tb_list">
	<tr>
		
		<th>Date_Emprunt</th>
		
		<th>Date_Retour</th>
		
		<th>Matricule_Abonne</th>
		
		<th>Code_Livre</th>
		
		<th></th>
	</tr>
	<?php if($this->tEmprunte):?>
		<?php foreach($this->tEmprunte as $oEmprunte):?>
		<tr <?php echo plugin_tpl::alternate(array('','class="alt"'))?>>
			
		<td><?php echo $oEmprunte->Date_Emprunt ?></td>
		
		<td><?php echo $oEmprunte->Date_Retour ?></td>
		
		<td><?php echo $oEmprunte->Matricule_Abonne ?></td>
		
		<td><?php echo $oEmprunte->Code_Livre ?></td>
		
			<td>
				
				
<a href="<?php echo $this->getLink('emprunte::edit',array(
										'id'=>$oEmprunte->getId()
									) 
							)?>">Edit</a>
			| 
<a href="<?php echo $this->getLink('emprunte::delete',array(
										'id'=>$oEmprunte->getId()
									) 
							)?>">Delete</a>
			| 
<a href="<?php echo $this->getLink('emprunte::show',array(
										'id'=>$oEmprunte->getId()
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

<p><a href="<?php echo $this->getLink('emprunte::new') ?>">New</a></p>
			
