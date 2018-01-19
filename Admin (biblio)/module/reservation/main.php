<?php 
class module_reservation extends abstract_module{
	
	public function before(){
		$this->oLayout=new _layout('bootstrap');
		
		$this->oLayout->addModule('menu','menu::index');
	}
	
	
	public function _index(){
	    //on considere que la page par defaut est la page de listage
	    $this->_list();
	}
	
	
	public function _list(){
		
		$tReservation=model_reservation::getInstance()->findAll();
		
		$oView=new _view('reservation::list');
		$oView->tReservation=$tReservation;
		
		
		
		$this->oLayout->add('main',$oView);
		 
	}
		
	
	
	public function _new(){
		$tMessage=$this->processSave();
	
		$oReservation=new row_reservation;
		
		$oView=new _view('reservation::new');
		$oView->oReservation=$oReservation;
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
			
	
	
	public function _edit(){
		$tMessage=$this->processSave();
		
		$oReservation=model_reservation::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('reservation::edit');
		$oView->oReservation=$oReservation;
		$oView->tId=model_reservation::getInstance()->getIdTab();
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _show(){
		$oReservation=model_reservation::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('reservation::show');
		$oView->oReservation=$oReservation;
		
		

		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _delete(){
		$tMessage=$this->processDelete();

		$oReservation=model_reservation::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('reservation::delete');
		$oView->oReservation=$oReservation;
		
		

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
			$oReservation=new row_reservation;	
		}else{
			$oReservation=model_reservation::getInstance()->findById( _root::getParam('id',null) );
		}
		
		$tColumn=array('Date_Reservation','Etat','Matricule_Abonne','Code_Livre');
		foreach($tColumn as $sColumn){
			$oReservation->$sColumn=_root::getParam($sColumn,null) ;
		}
		
		
		if($oReservation->save()){
			//une fois enregistre on redirige (vers la page liste)
			_root::redirect('reservation::list');
		}else{
			return $oReservation->getListError();
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
	
		$oReservation=model_reservation::getInstance()->findById( _root::getParam('id',null) );
				
		$oReservation->delete();
		//une fois enregistre on redirige (vers la page liste)
		_root::redirect('reservation::list');
		
	}
		
	
	public function after(){
		$this->oLayout->show();
	}
	
	
}

