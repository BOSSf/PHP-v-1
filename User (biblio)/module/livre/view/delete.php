<form action="" method="POST">
<table class="tb_delete">
	
	<tr>
		<th>Titre_Livre</th>
		<td><?php echo $this->oLivre->Titre_Livre ?></td>
	</tr>
		
	<tr>
		<th>Date_Edition_Livre</th>
		<td><?php echo $this->oLivre->Date_Edition_Livre ?></td>
	</tr>
		
	<tr>
		<th>Stock_Livre</th>
		<td><?php echo $this->oLivre->Stock_Livre ?></td>
	</tr>
		
	<tr>
		<th>Extrait_Livre</th>
		<td><?php echo $this->oLivre->Extrait_Livre ?></td>
	</tr>
		
	<tr>
		<th>Commentaire_Livre</th>
		<td><?php echo $this->oLivre->Commentaire_Livre ?></td>
	</tr>
		
	<tr>
		<th>Id_theme</th>
		<td><?php echo $this->oLivre->Id_theme ?></td>
	</tr>
		
	<tr>
		<th>Id_Editeur</th>
		<td><?php echo $this->oLivre->Id_Editeur ?></td>
	</tr>
		
	<tr>
		<th>Id_Auteur</th>
		<td><?php echo $this->oLivre->Id_Auteur ?></td>
	</tr>
		
	<tr>
		<th>image_livre</th>
		<td><?php echo $this->oLivre->image_livre ?></td>
	</tr>
		
	
	<tr>
		<th></th>
		<td>
			<p>
				<input type="submit" value="Confirmer la suppression" /> <a href="<?php echo $this->getLink('livre::list')?>">Annuler</a>
			</p>
		</td>
	</tr>
</table>


<input type="hidden" name="token" value="<?php echo $this->token?>" />
<?php if($this->tMessage and isset($this->tMessage['token'])): echo $this->tMessage['token']; endif;?>


</form>
