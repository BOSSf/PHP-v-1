<?php
class model_emprunte extends abstract_model{
	
	protected $sClassRow='row_emprunte';
	
	protected $sTable='emprunte';
	protected $sConfig='user';
	
	protected $tId=array('Numero_Emprunt');

	public static function getInstance(){
		return self::_getInstance(__CLASS__);
	}

	public function findById($uId){
		return $this->findOne('SELECT * FROM '.$this->sTable.' WHERE Numero_Emprunt=?',$uId );
	}
	public function findAll(){
		return $this->findMany('SELECT * FROM '.$this->sTable);
	}
	
	
	public function getSelect(){
		$tab=$this->findAll();
		$tSelect=array();
		if($tab){
		foreach($tab as $oRow){
			$tSelect[ $oRow->Numero_Emprunt ]=$oRow->Numero_Emprunt;
		}
		}
		return $tSelect;
	}
			
	
	public function save($oEmprunte){
			$this->execute('INSERT INTO '.$this->sTable.' 
				(Date_Emprunt,Date_Retour,Matricule_Abonne,Code_Livre) 
				VALUES (?,?,?,?) 
				ON DUPLICATE KEY 
					UPDATE Date_Emprunt=?,Date_Retour=?,Matricule_Abonne=?,Code_Livre=?  ',
			array($oEmprunte->Date_Emprunt,$oEmprunte->Date_Retour,$oEmprunte->Matricule_Abonne,$oEmprunte->Code_Livre,$oEmprunte->Date_Emprunt,$oEmprunte->Date_Retour,$oEmprunte->Matricule_Abonne,$oEmprunte->Code_Livre));
	}
			

}

class row_emprunte extends abstract_row{
	
	protected $sClassModel='model_emprunte';
	
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
		model_emprunte::getInstance()->save($this);
		return true;
	}

}
