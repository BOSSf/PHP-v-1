<form class="form-horizontal" action="" method="POST" >
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Titre_Livre</label>
		<div class="col-sm-10"><?php echo $this->oLivre->Titre_Livre ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Date_Edition_Livre</label>
		<div class="col-sm-10"><?php echo $this->oLivre->Date_Edition_Livre ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Stock_Livre</label>
		<div class="col-sm-10"><?php echo $this->oLivre->Stock_Livre ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Extrait_Livre</label>
		<div class="col-sm-10"><?php echo $this->oLivre->Extrait_Livre ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Commentaire_Livre</label>
		<div class="col-sm-10"><?php echo $this->oLivre->Commentaire_Livre ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Id_theme</label>
		<div class="col-sm-10"><?php echo $this->oLivre->Id_theme ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Id_Editeur</label>
		<div class="col-sm-10"><?php echo $this->oLivre->Id_Editeur ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Id_Auteur</label>
		<div class="col-sm-10"><?php echo $this->oLivre->Id_Auteur ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">image_livre</label>
		<div class="col-sm-10"><?php echo $this->oLivre->image_livre ?></div>
	</div>
		
	
	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
			 <a class="btn btn-default" href="<?php echo $this->getLink('livre::list')?>">Retour</a>
		</div>
	</div>
</form>
