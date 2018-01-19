<?php
Class module_menu extends abstract_moduleembedded{
		
	public function _index(){
		
		$tLink=array(
			'Abonne' => 'abonne::index',
'Auteur' => 'auteur::index',
'Emprunte' => 'emprunte::index',
'Livre' => 'livre::index',

		);
		
		$oView=new _view('menu::index');
		$oView->tLink=$tLink;
		
		return $oView;
	}
}
