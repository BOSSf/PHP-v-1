<form action="" method="POST">
<table class="tb_delete">
	
	<tr>
		<th>Nom_Auteur</th>
		<td><?php echo $this->oAuteur->Nom_Auteur ?></td>
	</tr>
		
	<tr>
		<th>Prenom_Auteur</th>
		<td><?php echo $this->oAuteur->Prenom_Auteur ?></td>
	</tr>
		
	
	<tr>
		<th></th>
		<td>
			<p>
				<input type="submit" value="Confirmer la suppression" /> <a href="<?php echo $this->getLink('auteur::list')?>">Annuler</a>
			</p>
		</td>
	</tr>
</table>


<input type="hidden" name="token" value="<?php echo $this->token?>" />
<?php if($this->tMessage and isset($this->tMessage['token'])): echo $this->tMessage['token']; endif;?>


</form>
