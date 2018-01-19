<?php 
class module_editeur extends abstract_module{
	
	public function before(){
		$this->oLayout=new _layout('bootstrap');
		
		$this->oLayout->addModule('menu','menu::index');
	}
	
	
	public function _index(){
	    //on considere que la page par defaut est la page de listage
	    $this->_list();
	}
	
	
	public function _list(){
		
		$tEditeur=model_editeur::getInstance()->findAll();
		
		$oView=new _view('editeur::list');
		$oView->tEditeur=$tEditeur;
		
		
		
		$this->oLayout->add('main',$oView);
		 
	}
		
	
	
	public function _new(){
		$tMessage=$this->processSave();
	
		$oEditeur=new row_editeur;
		
		$oView=new _view('editeur::new');
		$oView->oEditeur=$oEditeur;
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
			
	
	
	public function _edit(){
		$tMessage=$this->processSave();
		
		$oEditeur=model_editeur::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('editeur::edit');
		$oView->oEditeur=$oEditeur;
		$oView->tId=model_editeur::getInstance()->getIdTab();
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _show(){
		$oEditeur=model_editeur::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('editeur::show');
		$oView->oEditeur=$oEditeur;
		
		

		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _delete(){
		$tMessage=$this->processDelete();

		$oEditeur=model_editeur::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('editeur::delete');
		$oView->oEditeur=$oEditeur;
		
		

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
			$oEditeur=new row_editeur;	
		}else{
			$oEditeur=model_editeur::getInstance()->findById( _root::getParam('id',null) );
		}
		
		$tColumn=array('Nom_Editeur');
		foreach($tColumn as $sColumn){
			$oEditeur->$sColumn=_root::getParam($sColumn,null) ;
		}
		
		
		if($oEditeur->save()){
			//une fois enregistre on redirige (vers la page liste)
			_root::redirect('editeur::list');
		}else{
			return $oEditeur->getListError();
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
	
		$oEditeur=model_editeur::getInstance()->findById( _root::getParam('id',null) );
				
		$oEditeur->delete();
		//une fois enregistre on redirige (vers la page liste)
		_root::redirect('editeur::list');
		
	}
		
	
	public function after(){
		$this->oLayout->show();
	}
	
	
}

