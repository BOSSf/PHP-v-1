<table class="tb_show">
	
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
				<a href="<?php echo $this->getLink('auteur::list')?>">Retour</a>
			</p>
		</td>
	</tr>
</table>
