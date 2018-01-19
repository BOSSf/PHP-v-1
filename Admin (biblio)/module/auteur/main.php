<?php 
class module_auteur extends abstract_module{
	
	public function before(){
		$this->oLayout=new _layout('bootstrap');
		
		$this->oLayout->addModule('menu','menu::index');
	}
	
	
	public function _index(){
	    //on considere que la page par defaut est la page de listage
	    $this->_list();
	}
	
	
	public function _list(){
		
		$tAuteur=model_auteur::getInstance()->findAll();
		
		$oView=new _view('auteur::list');
		$oView->tAuteur=$tAuteur;
		
		
		
		$this->oLayout->add('main',$oView);
		 
	}
		
	
	
	public function _new(){
		$tMessage=$this->processSave();
	
		$oAuteur=new row_auteur;
		
		$oView=new _view('auteur::new');
		$oView->oAuteur=$oAuteur;
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
			
	
	
	public function _edit(){
		$tMessage=$this->processSave();
		
		$oAuteur=model_auteur::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('auteur::edit');
		$oView->oAuteur=$oAuteur;
		$oView->tId=model_auteur::getInstance()->getIdTab();
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _show(){
		$oAuteur=model_auteur::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('auteur::show');
		$oView->oAuteur=$oAuteur;
		
		

		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _delete(){
		$tMessage=$this->processDelete();

		$oAuteur=model_auteur::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('auteur::delete');
		$oView->oAuteur=$oAuteur;
		
		

		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
		
	

	private function processSave(){
		if(!_root::getRequest()->isPost() ){ //si ce n'est pas une requete POST on ne soumet pas
			return null;
		}
		
		$oPluginXsrf=new plugin_xsrf();
		if(!$oPluginXsrf->checkToken( _root::getParam('token') ) ){ //on verifie que le token est valide
			return array('token'=>$oPluginXsrf->getMessage() );
		}
	
		$iId=_root::getParam('id',null);
		if($iId==null){
			$oAuteur=new row_auteur;	
		}else{
			$oAuteur=model_auteur::getInstance()->findById( _root::getParam('id',null) );
		}
		
		$tColumn=array('Nom_Auteur','Prenom_Auteur');
		foreach($tColumn as $sColumn){
			$oAuteur->$sColumn=_root::getParam($sColumn,null) ;
		}
		
		
		if($oAuteur->save()){
			//une fois enregistre on redirige (vers la page liste)
			_root::redirect('auteur::list');
		}else{
			return $oAuteur->getListError();
		}
		
	}
	
	
	public function processDelete(){
		if(!_root::getRequest()->isPost() ){ //si ce n'est pas une requete POST on ne soumet pas
			return null;
		}
		
		$oPluginXsrf=new plugin_xsrf();
		if(!$oPluginXsrf->checkToken( _root::getParam('token') ) ){ //on verifie que le token est valide
			return array('token'=>$oPluginXsrf->getMessage() );
		}
	
		$oAuteur=model_auteur::getInstance()->findById( _root::getParam('id',null) );
				
		$oAuteur->delete();
		//une fois enregistre on redirige (vers la page liste)
		_root::redirect('auteur::list');
		
	}
		
	
	public function after(){
		$this->oLayout->show();
	}
	
	
}

