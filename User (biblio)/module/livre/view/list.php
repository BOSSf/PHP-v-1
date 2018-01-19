<table class="tb_list">
	<tr>
		
		<th>Titre_Livre</th>
		
		<th>Date_Edition_Livre</th>
		
		<th>Stock_Livre</th>
		
		<th>Extrait_Livre</th>
		
		<th>Commentaire_Livre</th>
		
		<th>Id_theme</th>
		
		<th>Id_Editeur</th>
		
		<th>Id_Auteur</th>
		
		<th>image_livre</th>
		
		<th></th>
	</tr>
	<?php if($this->tLivre):?>
		<?php foreach($this->tLivre as $oLivre):?>
		<tr <?php echo plugin_tpl::alternate(array('','class="alt"'))?>>
			
		<td><?php echo $oLivre->Titre_Livre ?></td>
		
		<td><?php echo $oLivre->Date_Edition_Livre ?></td>
		
		<td><?php echo $oLivre->Stock_Livre ?></td>
		
		<td><?php echo $oLivre->Extrait_Livre ?></td>
		
		<td><?php echo $oLivre->Commentaire_Livre ?></td>
		
		<td><?php echo $oLivre->Id_theme ?></td>
		
		<td><?php echo $oLivre->Id_Editeur ?></td>
		
		<td><?php echo $oLivre->Id_Auteur ?></td>
		
		<td><?php echo $oLivre->image_livre ?></td>
		
			<td>
				
				
<a href="<?php echo $this->getLink('livre::edit',array(
										'id'=>$oLivre->getId()
									) 
							)?>">Edit</a>
			| 
<a href="<?php echo $this->getLink('livre::delete',array(
										'id'=>$oLivre->getId()
									) 
							)?>">Delete</a>
			| 
<a href="<?php echo $this->getLink('livre::show',array(
										'id'=>$oLivre->getId()
									) 
							)?>">Show</a>
			
				
				
			</td>
		</tr>	
		<?php endforeach;?>
	<?php else:?>
		<tr>
			<td colspan="10">Aucune ligne</td>
		</tr>
	<?php endif;?>
</table>

<p><a href="<?php echo $this->getLink('livre::new') ?>">New</a></p>
			
