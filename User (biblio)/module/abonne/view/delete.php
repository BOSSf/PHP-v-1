<form action="" method="POST">
<table class="tb_delete">
	
	<tr>
		<th>Nom_Abonne</th>
		<td><?php echo $this->oAbonne->Nom_Abonne ?></td>
	</tr>
		
	<tr>
		<th>Prenom_Abonne</th>
		<td><?php echo $this->oAbonne->Prenom_Abonne ?></td>
	</tr>
		
	<tr>
		<th>Adresse_Abonne</th>
		<td><?php echo $this->oAbonne->Adresse_Abonne ?></td>
	</tr>
		
	<tr>
		<th>Numero_tel_Abonne</th>
		<td><?php echo $this->oAbonne->Numero_tel_Abonne ?></td>
	</tr>
		
	<tr>
		<th>Date_Naissance_Abonne</th>
		<td><?php echo $this->oAbonne->Date_Naissance_Abonne ?></td>
	</tr>
		
	<tr>
		<th>Etat_Abonne</th>
		<td><?php echo $this->oAbonne->Etat_Abonne ?></td>
	</tr>
		
	<tr>
		<th>Type_Abonne</th>
		<td><?php echo $this->oAbonne->Type_Abonne ?></td>
	</tr>
		
	
	<tr>
		<th></th>
		<td>
			<p>
				<input type="submit" value="Confirmer la suppression" /> <a href="<?php echo $this->getLink('abonne::list')?>">Annuler</a>
			</p>
		</td>
	</tr>
</table>


<input type="hidden" name="token" value="<?php echo $this->token?>" />
<?php if($this->tMessage and isset($this->tMessage['token'])): echo $this->tMessage['token']; endif;?>


</form>
