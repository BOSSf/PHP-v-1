<form class="form-horizontal" action="" method="POST" >
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Nom_Auteur</label>
		<div class="col-sm-10"><?php echo $this->oAuteur->Nom_Auteur ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Prenom_Auteur</label>
		<div class="col-sm-10"><?php echo $this->oAuteur->Prenom_Auteur ?></div>
	</div>
		
	
	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
			 <a class="btn btn-default" href="<?php echo $this->getLink('auteur::list')?>">Retour</a>
		</div>
	</div>
</form>
