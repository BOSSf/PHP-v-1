<?php
class model_abonne extends abstract_model{
	
	protected $sClassRow='row_abonne';
	
	protected $sTable='abonne';
	protected $sConfig='user';
	
	protected $tId=array('Matricule_Abonne');

	public static function getInstance(){
		return self::_getInstance(__CLASS__);
	}

	public function findById($uId){
		return $this->findOne('SELECT * FROM '.$this->sTable.' WHERE Matricule_Abonne=?',$uId );
	}
	public function findAll(){
		return $this->findMany('SELECT * FROM '.$this->sTable);
	}
	
	
	public function getSelect(){
		$tab=$this->findAll();
		$tSelect=array();
		if($tab){
		foreach($tab as $oRow){
			$tSelect[ $oRow->Matricule_Abonne ]=$oRow->Matricule_Abonne;
		}
		}
		return $tSelect;
	}
			
	
	public function save($oAbonne){
			$this->execute('INSERT INTO '.$this->sTable.' 
				(Nom_Abonne,Prenom_Abonne,Adresse_Abonne,Numero_tel_Abonne,Date_Naissance_Abonne,Etat_Abonne,Type_Abonne) 
				VALUES (?,?,?,?,?,?,?) 
				ON DUPLICATE KEY 
					UPDATE Nom_Abonne=?,Prenom_Abonne=?,Adresse_Abonne=?,Numero_tel_Abonne=?,Date_Naissance_Abonne=?,Etat_Abonne=?,Type_Abonne=?  ',
			array($oAbonne->Nom_Abonne,$oAbonne->Prenom_Abonne,$oAbonne->Adresse_Abonne,$oAbonne->Numero_tel_Abonne,$oAbonne->Date_Naissance_Abonne,$oAbonne->Etat_Abonne,$oAbonne->Type_Abonne,$oAbonne->Nom_Abonne,$oAbonne->Prenom_Abonne,$oAbonne->Adresse_Abonne,$oAbonne->Numero_tel_Abonne,$oAbonne->Date_Naissance_Abonne,$oAbonne->Etat_Abonne,$oAbonne->Type_Abonne));
	}
			

}

class row_abonne extends abstract_row{
	
	protected $sClassModel='model_abonne';
	
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
		model_abonne::getInstance()->save($this);
		return true;
	}

}
