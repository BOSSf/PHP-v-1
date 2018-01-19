<form class="form-horizontal" action="" method="POST" >
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Nom_Abonne</label>
		<div class="col-sm-10"><?php echo $this->oAbonne->Nom_Abonne ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Prenom_Abonne</label>
		<div class="col-sm-10"><?php echo $this->oAbonne->Prenom_Abonne ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Adresse_Abonne</label>
		<div class="col-sm-10"><?php echo $this->oAbonne->Adresse_Abonne ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Numero_tel_Abonne</label>
		<div class="col-sm-10"><?php echo $this->oAbonne->Numero_tel_Abonne ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Date_Naissance_Abonne</label>
		<div class="col-sm-10"><?php echo $this->oAbonne->Date_Naissance_Abonne ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Etat_Abonne</label>
		<div class="col-sm-10"><?php echo $this->oAbonne->Etat_Abonne ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Type_Abonne</label>
		<div class="col-sm-10"><?php echo $this->oAbonne->Type_Abonne ?></div>
	</div>
		
	
	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
			 <a class="btn btn-default" href="<?php echo $this->getLink('abonne::list')?>">Retour</a>
		</div>
	</div>
</form>
