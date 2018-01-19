<?php 
class module_theme extends abstract_module{
	
	public function before(){
		$this->oLayout=new _layout('bootstrap');
		
		$this->oLayout->addModule('menu','menu::index');
	}
	
	
	public function _index(){
	    //on considere que la page par defaut est la page de listage
	    $this->_list();
	}
	
	
	public function _list(){
		
		$tTheme=model_theme::getInstance()->findAll();
		
		$oView=new _view('theme::list');
		$oView->tTheme=$tTheme;
		
		
		
		$this->oLayout->add('main',$oView);
		 
	}
		
	
	
	public function _new(){
		$tMessage=$this->processSave();
	
		$oTheme=new row_theme;
		
		$oView=new _view('theme::new');
		$oView->oTheme=$oTheme;
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
			
	
	
	public function _edit(){
		$tMessage=$this->processSave();
		
		$oTheme=model_theme::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('theme::edit');
		$oView->oTheme=$oTheme;
		$oView->tId=model_theme::getInstance()->getIdTab();
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _show(){
		$oTheme=model_theme::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('theme::show');
		$oView->oTheme=$oTheme;
		
		

		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _delete(){
		$tMessage=$this->processDelete();

		$oTheme=model_theme::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('theme::delete');
		$oView->oTheme=$oTheme;
		
		

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
			$oTheme=new row_theme;	
		}else{
			$oTheme=model_theme::getInstance()->findById( _root::getParam('id',null) );
		}
		
		$tColumn=array('Libelle_theme');
		foreach($tColumn as $sColumn){
			$oTheme->$sColumn=_root::getParam($sColumn,null) ;
		}
		
		
		if($oTheme->save()){
			//une fois enregistre on redirige (vers la page liste)
			_root::redirect('theme::list');
		}else{
			return $oTheme->getListError();
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
	
		$oTheme=model_theme::getInstance()->findById( _root::getParam('id',null) );
				
		$oTheme->delete();
		//une fois enregistre on redirige (vers la page liste)
		_root::redirect('theme::list');
		
	}
		
	
	public function after(){
		$this->oLayout->show();
	}
	
	
}

