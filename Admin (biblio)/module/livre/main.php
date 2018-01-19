<?php 
class module_livre extends abstract_module{
	
	public function before(){
		$this->oLayout=new _layout('bootstrap');
		
		$this->oLayout->addModule('menu','menu::index');
	}
	
	
	public function _index(){
	    //on considere que la page par defaut est la page de listage
	    $this->_list();
	}
	
	
	public function _list(){
		
		$tLivre=model_livre::getInstance()->findAll();
		
		$oView=new _view('livre::list');
		$oView->tLivre=$tLivre;
		
		
		
		$this->oLayout->add('main',$oView);
		 
	}
		
	
	
	public function _new(){
		$tMessage=$this->processSave();
	
		$oLivre=new row_livre;
		
		$oView=new _view('livre::new');
		$oView->oLivre=$oLivre;
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
			
	
	
	public function _edit(){
		$tMessage=$this->processSave();
		
		$oLivre=model_livre::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('livre::edit');
		$oView->oLivre=$oLivre;
		$oView->tId=model_livre::getInstance()->getIdTab();
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _show(){
		$oLivre=model_livre::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('livre::show');
		$oView->oLivre=$oLivre;
		
		

		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _delete(){
		$tMessage=$this->processDelete();

		$oLivre=model_livre::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('livre::delete');
		$oView->oLivre=$oLivre;
		
		

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
			$oLivre=new row_livre;	
		}else{
			$oLivre=model_livre::getInstance()->findById( _root::getParam('id',null) );
		}
		
		$tColumn=array('Titre_Livre','Date_Edition_Livre','Stock_Livre','Extrait_Livre','Commentaire_Livre','Id_theme','Id_Editeur','Id_Auteur','image_livre');
		foreach($tColumn as $sColumn){
			$oLivre->$sColumn=_root::getParam($sColumn,null) ;
		}
		
		
		if($oLivre->save()){
			//une fois enregistre on redirige (vers la page liste)
			_root::redirect('livre::list');
		}else{
			return $oLivre->getListError();
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
	
		$oLivre=model_livre::getInstance()->findById( _root::getParam('id',null) );
				
		$oLivre->delete();
		//une fois enregistre on redirige (vers la page liste)
		_root::redirect('livre::list');
		
	}
		
	
	public function after(){
		$this->oLayout->show();
	}
	
	
}

