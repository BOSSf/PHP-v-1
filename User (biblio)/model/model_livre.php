<?php
class model_livre extends abstract_model{
	
	protected $sClassRow='row_livre';
	
	protected $sTable='livre';
	protected $sConfig='user';
	
	protected $tId=array('Code_Livre');

	public static function getInstance(){
		return self::_getInstance(__CLASS__);
	}

	public function findById($uId){
		return $this->findOne('SELECT * FROM '.$this->sTable.' WHERE Code_Livre=?',$uId );
	}
	public function findAll(){
		return $this->findMany('SELECT * FROM '.$this->sTable);
	}
	
	
	public function getSelect(){
		$tab=$this->findAll();
		$tSelect=array();
		if($tab){
		foreach($tab as $oRow){
			$tSelect[ $oRow->Code_Livre ]=$oRow->Code_Livre;
		}
		}
		return $tSelect;
	}
			
	
	public function save($oLivre){
			$this->execute('INSERT INTO '.$this->sTable.' 
				(Titre_Livre,Date_Edition_Livre,Stock_Livre,Extrait_Livre,Commentaire_Livre,Id_theme,Id_Editeur,Id_Auteur,image_livre) 
				VALUES (?,?,?,?,?,?,?,?,?) 
				ON DUPLICATE KEY 
					UPDATE Titre_Livre=?,Date_Edition_Livre=?,Stock_Livre=?,Extrait_Livre=?,Commentaire_Livre=?,Id_theme=?,Id_Editeur=?,Id_Auteur=?,image_livre=?  ',
			array($oLivre->Titre_Livre,$oLivre->Date_Edition_Livre,$oLivre->Stock_Livre,$oLivre->Extrait_Livre,$oLivre->Commentaire_Livre,$oLivre->Id_theme,$oLivre->Id_Editeur,$oLivre->Id_Auteur,$oLivre->image_livre,$oLivre->Titre_Livre,$oLivre->Date_Edition_Livre,$oLivre->Stock_Livre,$oLivre->Extrait_Livre,$oLivre->Commentaire_Livre,$oLivre->Id_theme,$oLivre->Id_Editeur,$oLivre->Id_Auteur,$oLivre->image_livre));
	}
			

}

class row_livre extends abstract_row{
	
	protected $sClassModel='model_livre';
	
	/*exemple jointure 
	public function findAuteur(){
		return model_auteur::getInstance()->findById($this->auteur_id);
	}
	*/
	/*exemple test validation*/
	private function getCheck(){
		$oPluginValid=new plugin_valid($this->getTab());
		
		
		/* renseigner vos check ici
		$oPluginValid->isEqual('champ','valeurB','Le champ n\est pas &eacute;gal &agrave; '.$valeurB);
		$oPluginValid->isNotEqual('champ','valeurB','Le champ est &eacute;gal &agrave; '.$valeurB);
		$oPluginValid->isUpperThan('champ','valeurB','Le champ n\est pas sup&eacute; &agrave; '.$valeurB);
		$oPluginValid->isUpperOrEqualThan('champ','valeurB','Le champ n\est pas sup&eacute; ou &eacute;gal &agrave; '.$valeurB);
		$oPluginValid->isLowerThan('champ','valeurB','Le champ n\est pas inf&eacute;rieur &agrave; '.$valeurB);
		$oPluginValid->isLowerOrEqualThan('champ','valeurB','Le champ n\est pas inf&eacute;rieur ou &eacute;gal &agrave; '.$valeurB);
		$oPluginValid->isEmpty('champ','Le champ n\'est pas vide');
		$oPluginValid->isNotEmpty('champ','Le champ ne doit pas &ecirc;tre vide');
		$oPluginValid->isEmailValid('champ','L\email est invalide');
		$oPluginValid->matchExpression('champ','/[0-9]/','Le champ n\'est pas au bon format');
		$oPluginValid->notMatchExpression('champ','/[a-zA-Z]/','Le champ ne doit pas &ecirc;tre a ce format');
		*/

		return $oPluginValid;
	}

	public function isValid(){
		return $this->getCheck()->isValid();
	}
	public function getListError(){
		return $this->getCheck()->getListError();
	}
	public function save(){
		if(!$this->isValid()){
			return false;
		}
		model_livre::getInstance()->save($this);
		return true;
	}

}
