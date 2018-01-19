<?php 
$oForm=new plugin_form($this->oAbonne);
$oForm->setMessage($this->tMessage);
?>
<form class="form-horizontal" action="" method="POST" >

	
	<div class="form-group">
		<label class="col-sm-2 control-label">Nom_Abonne</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('Nom_Abonne',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Prenom_Abonne</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('Prenom_Abonne',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Adresse_Abonne</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('Adresse_Abonne',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Numero_tel_Abonne</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('Numero_tel_Abonne',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Date_Naissance_Abonne</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('Date_Naissance_Abonne',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Etat_Abonne</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('Etat_Abonne',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Type_Abonne</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('Type_Abonne',array('class'=>'form-control')) ?></div>
	</div>
		
	

<?php echo $oForm->getToken('token',$this->token)?>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		<input type="submit" class="btn btn-success" value="Ajouter" /> <a class="btn btn-link" href="<?php echo $this->getLink('abonne::list')?>">Annuler</a>
	</div>
</div>
</form>
