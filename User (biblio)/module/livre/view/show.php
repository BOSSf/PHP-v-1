<table class="tb_show">
	
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
				<a href="<?php echo $this->getLink('livre::list')?>">Retour</a>
			</p>
		</td>
	</tr>
</table>
