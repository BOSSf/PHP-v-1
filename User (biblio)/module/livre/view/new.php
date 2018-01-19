<?php 
$oForm=new plugin_form($this->oLivre);
$oForm->setMessage($this->tMessage);
?>
<form action="" method="POST" >

<table class="tb_new">
	
	<tr>
		<th>Titre_Livre</th>
		<td><?php echo $oForm->getInputText('Titre_Livre') ?></td>
	</tr>
		
	<tr>
		<th>Date_Edition_Livre</th>
		<td><?php echo $oForm->getInputText('Date_Edition_Livre') ?></td>
	</tr>
		
	<tr>
		<th>Stock_Livre</th>
		<td><?php echo $oForm->getInputText('Stock_Livre') ?></td>
	</tr>
		
	<tr>
		<th>Extrait_Livre</th>
		<td><?php echo $oForm->getInputText('Extrait_Livre') ?></td>
	</tr>
		
	<tr>
		<th>Commentaire_Livre</th>
		<td><?php echo $oForm->getInputText('Commentaire_Livre') ?></td>
	</tr>
		
	<tr>
		<th>Id_theme</th>
		<td><?php echo $oForm->getInputText('Id_theme') ?></td>
	</tr>
		
	<tr>
		<th>Id_Editeur</th>
		<td><?php echo $oForm->getInputText('Id_Editeur') ?></td>
	</tr>
		
	<tr>
		<th>Id_Auteur</th>
		<td><?php echo $oForm->getInputText('Id_Auteur') ?></td>
	</tr>
		
	<tr>
		<th>image_livre</th>
		<td><?php echo $oForm->getInputText('image_livre') ?></td>
	</tr>
		
	
	<tr>
		<th></th>
		<td>
			<p>
				<input type="submit" value="Ajouter" /> <a href="<?php echo $this->getLink('livre::list')?>">Annuler</a>
			</p>
		</td>
	</tr>
</table>

<?php echo $oForm->getToken('token',$this->token)?>

</form>
