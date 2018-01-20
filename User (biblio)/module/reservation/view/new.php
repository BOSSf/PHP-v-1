<?php 
$oForm=new plugin_form($this->oReservation);
$oForm->setMessage($this->tMessage);
?>
<form action="" method="POST" >

<table class="tb_new">
	
	<tr>
		<th>Date_Reservation</th>
		<td><?php $datetime = date("Y-m-d ");echo $datetime;?></td>

	</tr>
		
	<tr>
		<th>Etat</th>
		<td><?php  ?></td>
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
				<input type="submit" value="Ajouter" /> <a href="<?php echo $this->getLink('reservation::list')?>">Annuler</a>
			</p>
		</td>
	</tr>
</table>

<?php echo $oForm->getToken('token',$this->token)?>

</form>
