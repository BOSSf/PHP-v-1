<?php
class module_auth extends abstract_module{
	
	//longueur maximum du mot de passe
	private $maxPasswordLength=100;
	
	public function before(){
		//on active l'authentification
		_root::getAuth()->enable();

		$this->oLayout=new _layout('bootstrap');
	}

	public function _login(){
		
		$sMessage=$this->checkLoginPass();
		
		$oView=new _view('auth::login');
		$oView->sError=$sMessage;

		$this->oLayout->add('main',$oView);

	}
	private function checkLoginPass(){
		//si le formulaire n'est pas envoye on s'arrete la
		if(!_root::getRequest()->isPost() ){
			return null;
		}
		
		$sLogin=_root::getParam('login');
		$sPassword=_root::getParam('password');
		
		if(strlen($sPassword) > $this->maxPasswordLength){
			return 'Mot de passe trop long';
		}
		
		//on stoque les mots de passe hashe dans la classe model_admin
		$sHashPassword=model_admin::getInstance()->hashPassword($sPassword);
		$tAccount=model_admin::getInstance()->getListAccount();
		
		//on va verifier que l'on trouve dans le tableau retourne par notre model
		//l'entree $tAccount[ login ][ mot de passe hashe ]
		if(!_root::getAuth()->checkLoginPass($tAccount,$sLogin,$sHashPassword)){
			return 'Mauvais login/mot de passe';
		}
		
		_root::redirect('abonne::index');
	}

	public function _inscription(){
		$tMessage=$this->processInscription();

		$oView=new _view('auth::inscription');
		$oView->tMessage=$tMessage;

		$oView->oUser=new row_admin;
		
		$this->oLayout->add('main',$oView);
	}
	private function processInscription(){
		if(!_root::getRequest()->isPost()){
			return null;
		}
		
		$tAccount=model_admin::getInstance()->getListAccount();
		
		$sLogin=_root::getParam('login_a');
		$sPassword=_root::getParam('password');

		if($sPassword!=_root::getParam('password2')){
			return array('login_a'=>array('Les deux mots de passe doivent etre identiques'));
		}elseif($sLogin==''){
			return array('login_a'=>array('Vous devez remplir le nom d utilisateur'));
		}elseif($sPassword==''){
			return array('login_a'=>array('Vous devez remplir le mot de passe'));
		}elseif(strlen($sPassword) > $this->maxPasswordLength){
			return array('login_a'=>array('Mot de passe trop long'));
		}elseif(isset($tAccount[$sLogin]) ){
			return array('login_a'=>array('Utilisateur d&eacute;j&agrave; existant'));
		}

		$oAdmin=new row_admin;
		$oAdmin->login_a=$sLogin;
		$oAdmin->pass_a=model_admin::getInstance()->hashPassword($sPassword);
		if($oAdmin->save()==false){

			return $oAdmin->getListError();
			
		}

		return array('success'=>array('Votre compte a bien &eacute;t&eacute; cr&eacute;&eacute;'));

	}

	public function _logout(){
		_root::getAuth()->logout();
	}

	public function after(){
		$this->oLayout->show();
	}
}
