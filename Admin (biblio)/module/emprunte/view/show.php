<form class="form-horizontal" action="" method="POST" >
	
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
		
	
	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
			 <a class="btn btn-default" href="<?php echo $this->getLink('emprunte::list')?>">Retour</a>
		</div>
	</div>
</form>
