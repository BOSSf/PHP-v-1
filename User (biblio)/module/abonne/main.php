<?php 
class module_abonne extends abstract_module{
	
	public function before(){
		$this->oLayout=new _layout('template1');
		
		$this->oLayout->addModule('menu','menu::index');
	}
	
	
	public function _index(){
	    //on considere que la page par defaut est la page de listage
	    $this->_list();
	}
	
	
	public function _list(){
		
		$tAbonne=model_abonne::getInstance()->findAll();
		
		$oView=new _view('abonne::list');
		$oView->tAbonne=$tAbonne;
		
		
		
		$this->oLayout->add('main',$oView);
		 
	}
		
	
	
	public function _new(){
		$tMessage=$this->processSave();
	
		$oAbonne=new row_abonne;
		
		$oView=new _view('abonne::new');
		$oView->oAbonne=$oAbonne;
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
			
	
	
	public function _edit(){
		$tMessage=$this->processSave();
		
		$oAbonne=model_abonne::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('abonne::edit');
		$oView->oAbonne=$oAbonne;
		$oView->tId=model_abonne::getInstance()->getIdTab();
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _show(){
		$oAbonne=model_abonne::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('abonne::show');
		$oView->oAbonne=$oAbonne;
		
		

		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _delete(){
		$tMessage=$this->processDelete();

		$oAbonne=model_abonne::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('abonne::delete');
		$oView->oAbonne=$oAbonne;
		
		

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
			$oAbonne=new row_abonne;	
		}else{
			$oAbonne=model_abonne::getInstance()->findById( _root::getParam('id',null) );
		}
		
		$tColumn=array('Nom_Abonne','Prenom_Abonne','Adresse_Abonne','Numero_tel_Abonne','Date_Naissance_Abonne','Etat_Abonne','Type_Abonne');
		foreach($tColumn as $sColumn){
			$oAbonne->$sColumn=_root::getParam($sColumn,null) ;
		}
		
		
		if($oAbonne->save()){
			//une fois enregistre on redirige (vers la page liste)
			_root::redirect('abonne::list');
		}else{
			return $oAbonne->getListError();
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
	
		$oAbonne=model_abonne::getInstance()->findById( _root::getParam('id',null) );
				
		$oAbonne->delete();
		//une fois enregistre on redirige (vers la page liste)
		_root::redirect('abonne::list');
		
	}
		
	
	public function after(){
		$this->oLayout->show();
	}
	
	
}

