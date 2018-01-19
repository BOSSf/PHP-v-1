<?php 
class module_emprunte extends abstract_module{
	
	public function before(){
		$this->oLayout=new _layout('template1');
		
		$this->oLayout->addModule('menu','menu::index');
	}
	
	
	public function _index(){
	    //on considere que la page par defaut est la page de listage
	    $this->_list();
	}
	
	
	public function _list(){
		
		$tEmprunte=model_emprunte::getInstance()->findAll();
		
		$oView=new _view('emprunte::list');
		$oView->tEmprunte=$tEmprunte;
		
		
		
		$this->oLayout->add('main',$oView);
		 
	}
		
	
	
	public function _new(){
		$tMessage=$this->processSave();
	
		$oEmprunte=new row_emprunte;
		
		$oView=new _view('emprunte::new');
		$oView->oEmprunte=$oEmprunte;
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
			
	
	
	public function _edit(){
		$tMessage=$this->processSave();
		
		$oEmprunte=model_emprunte::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('emprunte::edit');
		$oView->oEmprunte=$oEmprunte;
		$oView->tId=model_emprunte::getInstance()->getIdTab();
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _show(){
		$oEmprunte=model_emprunte::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('emprunte::show');
		$oView->oEmprunte=$oEmprunte;
		
		

		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _delete(){
		$tMessage=$this->processDelete();

		$oEmprunte=model_emprunte::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('emprunte::delete');
		$oView->oEmprunte=$oEmprunte;
		
		

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
			$oEmprunte=new row_emprunte;	
		}else{
			$oEmprunte=model_emprunte::getInstance()->findById( _root::getParam('id',null) );
		}
		
		$tColumn=array('Date_Emprunt','Date_Retour','Matricule_Abonne','Code_Livre');
		foreach($tColumn as $sColumn){
			$oEmprunte->$sColumn=_root::getParam($sColumn,null) ;
		}
		
		
		if($oEmprunte->save()){
			//une fois enregistre on redirige (vers la page liste)
			_root::redirect('emprunte::list');
		}else{
			return $oEmprunte->getListError();
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
	
		$oEmprunte=model_emprunte::getInstance()->findById( _root::getParam('id',null) );
				
		$oEmprunte->delete();
		//une fois enregistre on redirige (vers la page liste)
		_root::redirect('emprunte::list');
		
	}
		
	
	public function after(){
		$this->oLayout->show();
	}
	
	
}

