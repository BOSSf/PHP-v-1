<?php 
$oForm=new plugin_form($this->oAuteur);
$oForm->setMessage($this->tMessage);
?>
<form action="" method="POST" >
<table class="tb_edit">
	
	<tr>
		<th>Nom_Auteur</th>
		<td><?php echo $oForm->getInputText('Nom_Auteur') ?></td>
	</tr>
		
	<tr>
		<th>Prenom_Auteur</th>
		<td><?php echo $oForm->getInputText('Prenom_Auteur') ?></td>
	</tr>
		
	
	<tr>
		<th></th>
		<td>
			<p>
				<input type="submit" value="Modifier" /> <a href="<?php echo $this->getLink('auteur::list')?>">Annuler</a>
			</p>
		</td>
	</tr>
</table>

<?php echo $oForm->getToken('token',$this->token)?>

</form>

