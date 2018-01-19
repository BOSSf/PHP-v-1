<form class="form-horizontal" action="" method="POST" >
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Nom_Editeur</label>
		<div class="col-sm-10"><?php echo $this->oEditeur->Nom_Editeur ?></div>
	</div>
		
	
	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
			 <a class="btn btn-default" href="<?php echo $this->getLink('editeur::list')?>">Retour</a>
		</div>
	</div>
</form>
