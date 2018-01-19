<form action="" method="POST">
<table class="tb_delete">
	
	<tr>
		<th>Date_Emprunt</th>
		<td><?php echo $this->oEmprunte->Date_Emprunt ?></td>
	</tr>
		
	<tr>
		<th>Date_Retour</th>
		<td><?php echo $this->oEmprunte->Date_Retour ?></td>
	</tr>
		
	<tr>
		<th>Matricule_Abonne</th>
		<td><?php echo $this->oEmprunte->Matricule_Abonne ?></td>
	</tr>
		
	<tr>
		<th>Code_Livre</th>
		<td><?php echo $this->oEmprunte->Code_Livre ?></td>
	</tr>
		
	
	<tr>
		<th></th>
		<td>
			<p>
				<input type="submit" value="Confirmer la suppression" /> <a href="<?php echo $this->getLink('emprunte::list')?>">Annuler</a>
			</p>
		</td>
	</tr>
</table>


<input type="hidden" name="token" value="<?php echo $this->token?>" />
<?php if($this->tMessage and isset($this->tMessage['token'])): echo $this->tMessage['token']; endif;?>


</form>
