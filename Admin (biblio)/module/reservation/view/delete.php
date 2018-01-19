<form class="form-horizontal" action="" method="POST">

	
	<div class="form-group">
		<label class="col-sm-2 control-label">Date_Reservation</label>
		<div class="col-sm-10"><?php echo $this->oReservation->Date_Reservation ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Etat</label>
		<div class="col-sm-10"><?php echo $this->oReservation->Etat ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Matricule_Abonne</label>
		<div class="col-sm-10"><?php echo $this->oReservation->Matricule_Abonne ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Code_Livre</label>
		<div class="col-sm-10"><?php echo $this->oReservation->Code_Livre ?></div>
	</div>
		



<input type="hidden" name="token" value="<?php echo $this->token?>" />
<?php if($this->tMessage and isset($this->tMessage['token'])): echo $this->tMessage['token']; endif;?>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		<input class="btn btn-danger" type="submit" value="Confirmer la suppression" /> <a class="btn btn-link" href="<?php echo $this->getLink('reservation::list')?>">Annuler</a>
	</div>
</div>

</form>
