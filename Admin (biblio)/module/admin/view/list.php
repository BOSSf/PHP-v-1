<table class="table table-striped">
	<tr>
		
		<th>login_a</th>
		
		<th>pass_a</th>
		
		<th></th>
	</tr>
	<?php if($this->tAdmin):?>
		<?php foreach($this->tAdmin as $oAdmin):?>
		<tr <?php echo plugin_tpl::alternate(array('','class="alt"'))?>>
			
		<td><?php echo $oAdmin->login_a ?></td>
		
		<td><?php echo $oAdmin->pass_a ?></td>
		
			<td>
				
				
<a class="btn btn-success" href="<?php echo $this->getLink('admin::edit',array(
										'id'=>$oAdmin->getId()
									) 
							)?>">Edit</a>
			| 
<a class="btn btn-danger" href="<?php echo $this->getLink('admin::delete',array(
										'id'=>$oAdmin->getId()
									) 
							)?>">Delete</a>
			| 
<a class="btn btn-default" href="<?php echo $this->getLink('admin::show',array(
										'id'=>$oAdmin->getId()
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

<p><a class="btn btn-primary" href="<?php echo $this->getLink('admin::new') ?>">New</a></p>
			
