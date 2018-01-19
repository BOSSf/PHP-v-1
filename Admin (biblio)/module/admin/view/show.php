<form class="form-horizontal" action="" method="POST" >
	
	<div class="form-group">
		<label class="col-sm-2 control-label">login_a</label>
		<div class="col-sm-10"><?php echo $this->oAdmin->login_a ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">pass_a</label>
		<div class="col-sm-10"><?php echo $this->oAdmin->pass_a ?></div>
	</div>
		
	
	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
			 <a class="btn btn-default" href="<?php echo $this->getLink('admin::list')?>">Retour</a>
		</div>
	</div>
</form>
