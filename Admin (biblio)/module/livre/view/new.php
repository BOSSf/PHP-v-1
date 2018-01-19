<?php 
$oForm=new plugin_form($this->oLivre);
$oForm->setMessage($this->tMessage);
?>
<form class="form-horizontal" action="" method="POST" >

	
	<div class="form-group">
		<label class="col-sm-2 control-label">Titre_Livre</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('Titre_Livre',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Date_Edition_Livre</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('Date_Edition_Livre',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Stock_Livre</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('Stock_Livre',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Extrait_Livre</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('Extrait_Livre',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Commentaire_Livre</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('Commentaire_Livre',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Id_theme</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('Id_theme',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Id_Editeur</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('Id_Editeur',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Id_Auteur</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('Id_Auteur',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">image_livre</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('image_livre',array('class'=>'form-control')) ?></div>
	</div>
		
	

<?php echo $oForm->getToken('token',$this->token)?>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		<input type="submit" class="btn btn-success" value="Ajouter" /> <a class="btn btn-link" href="<?php echo $this->getLink('livre::list')?>">Annuler</a>
	</div>
</div>
</form>
