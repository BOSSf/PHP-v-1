<?php 
class module_admin extends abstract_module{
	
	public function before(){
		$this->oLayout=new _layout('bootstrap');
		
		$this->oLayout->addModule('menu','menu::index');
	}
	
	
	public function _index(){
	    //on considere que la page par defaut est la page de listage
	    $this->_list();
	}
	
	
	public function _list(){
		
		$tAdmin=model_admin::getInstance()->findAll();
		
		$oView=new _view('admin::list');
		$oView->tAdmin=$tAdmin;
		
		
		
		$this->oLayout->add('main',$oView);
		 
	}
		
	
	
	public function _new(){
		$tMessage=$this->processSave();
	
		$oAdmin=new row_admin;
		
		$oView=new _view('admin::new');
		$oView->oAdmin=$oAdmin;
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
			
	
	
	public function _edit(){
		$tMessage=$this->processSave();
		
		$oAdmin=model_admin::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('admin::edit');
		$oView->oAdmin=$oAdmin;
		$oView->tId=model_admin::getInstance()->getIdTab();
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _show(){
		$oAdmin=model_admin::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('admin::show');
		$oView->oAdmin=$oAdmin;
		
		

		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _delete(){
		$tMessage=$this->processDelete();

		$oAdmin=model_admin::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('admin::delete');
		$oView->oAdmin=$oAdmin;
		
		

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
			$oAdmin=new row_admin;	
		}else{
			$oAdmin=model_admin::getInstance()->findById( _root::getParam('id',null) );
		}
		
		$tColumn=array('login_a','pass_a');
		foreach($tColumn as $sColumn){
			$oAdmin->$sColumn=_root::getParam($sColumn,null) ;
		}
		
		
		if($oAdmin->save()){
			//une fois enregistre on redirige (vers la page liste)
			_root::redirect('admin::list');
		}else{
			return $oAdmin->getListError();
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
	
		$oAdmin=model_admin::getInstance()->findById( _root::getParam('id',null) );
				
		$oAdmin->delete();
		//une fois enregistre on redirige (vers la page liste)
		_root::redirect('admin::list');
		
	}
		
	
	public function after(){
		$this->oLayout->show();
	}
	
	
}

