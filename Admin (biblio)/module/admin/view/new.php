<?php 
$oForm=new plugin_form($this->oAdmin);
$oForm->setMessage($this->tMessage);
?>
<form class="form-horizontal" action="" method="POST" >

	
	<div class="form-group">
		<label class="col-sm-2 control-label">login_a</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('login_a',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">pass_a</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('pass_a',array('class'=>'form-control')) ?></div>
	</div>
		
	

<?php echo $oForm->getToken('token',$this->token)?>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		<input type="submit" class="btn btn-success" value="Ajouter" /> <a class="btn btn-link" href="<?php echo $this->getLink('admin::list')?>">Annuler</a>
	</div>
</div>
</form>
