<?php 
$oForm=new plugin_form($this->oEmprunte);
$oForm->setMessage($this->tMessage);
?>
<form action="" method="POST" >

<table class="tb_new">
	
	<tr>
		<th>Date_Emprunt</th>
		<td><?php echo $oForm->getInputText('Date_Emprunt') ?></td>
	</tr>
		
	<tr>
		<th>Date_Retour</th>
		<td><?php echo $oForm->getInputText('Date_Retour') ?></td>
	</tr>
		
	<tr>
		<th>Matricule_Abonne</th>
		<td><?php echo $oForm->getInputText('Matricule_Abonne') ?></td>
	</tr>
		
	<tr>
		<th>Code_Livre</th>
		<td><?php echo $oForm->getInputText('Code_Livre') ?></td>
	</tr>
		
	
	<tr>
		<th></th>
		<td>
			<p>
				<input type="submit" value="Ajouter" /> <a href="<?php echo $this->getLink('emprunte::list')?>">Annuler</a>
			</p>
		</td>
	</tr>
</table>

<?php echo $oForm->getToken('token',$this->token)?>

</form>
