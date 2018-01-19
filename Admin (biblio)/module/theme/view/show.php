<form class="form-horizontal" action="" method="POST" >
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Libelle_theme</label>
		<div class="col-sm-10"><?php echo $this->oTheme->Libelle_theme ?></div>
	</div>
		
	
	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
			 <a class="btn btn-default" href="<?php echo $this->getLink('theme::list')?>">Retour</a>
		</div>
	</div>
</form>
