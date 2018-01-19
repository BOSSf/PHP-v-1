<form class="form-horizontal" action="" method="POST">

	
	<div class="form-group">
		<label class="col-sm-2 control-label">login_a</label>
		<div class="col-sm-10"><?php echo $this->oAdmin->login_a ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">pass_a</label>
		<div class="col-sm-10"><?php echo $this->oAdmin->pass_a ?></div>
	</div>
		



<input type="hidden" name="token" value="<?php echo $this->token?>" />
<?php if($this->tMessage and isset($this->tMessage['token'])): echo $this->tMessage['token']; endif;?>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		<input class="btn btn-danger" type="submit" value="Confirmer la suppression" /> <a class="btn btn-link" href="<?php echo $this->getLink('admin::list')?>">Annuler</a>
	</div>
</div>

</form>
