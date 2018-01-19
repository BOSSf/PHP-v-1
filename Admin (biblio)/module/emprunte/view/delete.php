<form class="form-horizontal" action="" method="POST">

	
	<div class="form-group">
		<label class="col-sm-2 control-label">Date_Emprunt</label>
		<div class="col-sm-10"><?php echo $this->oEmprunte->Date_Emprunt ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Date_Retour</label>
		<div class="col-sm-10"><?php echo $this->oEmprunte->Date_Retour ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Matricule_Abonne</label>
		<div class="col-sm-10"><?php echo $this->oEmprunte->Matricule_Abonne ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Code_Livre</label>
		<div class="col-sm-10"><?php echo $this->oEmprunte->Code_Livre ?></div>
	</div>
		



<input type="hidden" name="token" value="<?php echo $this->token?>" />
<?php if($this->tMessage and isset($this->tMessage['token'])): echo $this->tMessage['token']; endif;?>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		<input class="btn btn-danger" type="submit" value="Confirmer la suppression" /> <a class="btn btn-link" href="<?php echo $this->getLink('emprunte::list')?>">Annuler</a>
	</div>
</div>

</form>
