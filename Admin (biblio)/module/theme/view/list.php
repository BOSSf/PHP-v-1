<table class="table table-striped">
	<tr>
		
		<th>Libelle_theme</th>
		
		<th></th>
	</tr>
	<?php if($this->tTheme):?>
		<?php foreach($this->tTheme as $oTheme):?>
		<tr <?php echo plugin_tpl::alternate(array('','class="alt"'))?>>
			
		<td><?php echo $oTheme->Libelle_theme ?></td>
		
			<td>
				
				
<a class="btn btn-success" href="<?php echo $this->getLink('theme::edit',array(
										'id'=>$oTheme->getId()
									) 
							)?>">Edit</a>
			| 
<a class="btn btn-danger" href="<?php echo $this->getLink('theme::delete',array(
										'id'=>$oTheme->getId()
									) 
							)?>">Delete</a>
			| 
<a class="btn btn-default" href="<?php echo $this->getLink('theme::show',array(
										'id'=>$oTheme->getId()
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

<p><a class="btn btn-primary" href="<?php echo $this->getLink('theme::new') ?>">New</a></p>
			
