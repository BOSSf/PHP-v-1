<?php
Class module_menu extends abstract_moduleembedded{
		
	public function _index(){
		
		$tLink=array(
			'Abonne' => 'abonne::index',
'Admin' => 'admin::index',
'Auteur' => 'auteur::index',
'Editeur' => 'editeur::index',
'Emprunte' => 'emprunte::index',
'Livre' => 'livre::index',
'Reservation' => 'reservation::index',
'Theme' => 'theme::index',

		);
		
		$oView=new _view('menu::index');
		$oView->tLink=$tLink;
		
		return $oView;
	}
}
