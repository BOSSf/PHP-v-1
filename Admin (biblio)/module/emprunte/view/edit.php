<?php 
$oForm=new plugin_form($this->oEmprunte);
$oForm->setMessage($this->tMessage);
?>
<form class="form-horizontal" action="" method="POST" >
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Date_Emprunt</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('Date_Emprunt',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Date_Retour</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('Date_Retour',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Matricule_Abonne</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('Matricule_Abonne',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Code_Livre</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('Code_Livre',array('class'=>'form-control')) ?></div>
	</div>
		
	
	

<?php echo $oForm->getToken('token',$this->token)?>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		<input type="submit" class="btn btn-success" value="Modifier" /> <a class="btn btn-link" href="<?php echo $this->getLink('emprunte::list')?>">Annuler</a>
	</div>
</div>
</form>

