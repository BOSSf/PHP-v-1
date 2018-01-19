<?php 
$oForm=new plugin_form($this->oAbonne);
$oForm->setMessage($this->tMessage);
?>
<form action="" method="POST" >

<table class="tb_new">
	
	<tr>
		<th>Nom_Abonne</th>
		<td><?php echo $oForm->getInputText('Nom_Abonne') ?></td>
	</tr>
		
	<tr>
		<th>Prenom_Abonne</th>
		<td><?php echo $oForm->getInputText('Prenom_Abonne') ?></td>
	</tr>
		
	<tr>
		<th>Adresse_Abonne</th>
		<td><?php echo $oForm->getInputText('Adresse_Abonne') ?></td>
	</tr>
		
	<tr>
		<th>Numero_tel_Abonne</th>
		<td><?php echo $oForm->getInputText('Numero_tel_Abonne') ?></td>
	</tr>
		
	<tr>
		<th>Date_Naissance_Abonne</th>
		<td><?php echo $oForm->getInputText('Date_Naissance_Abonne') ?></td>
	</tr>
		
	<tr>
		<th>Etat_Abonne</th>
		<td><?php echo $oForm->getInputText('Etat_Abonne') ?></td>
	</tr>
		
	<tr>
		<th>Type_Abonne</th>
		<td><?php echo $oForm->getInputText('Type_Abonne') ?></td>
	</tr>
		
	
	<tr>
		<th></th>
		<td>
			<p>
				<input type="submit" value="Ajouter" /> <a href="<?php echo $this->getLink('abonne::list')?>">Annuler</a>
			</p>
		</td>
	</tr>
</table>

<?php echo $oForm->getToken('token',$this->token)?>

</form>
