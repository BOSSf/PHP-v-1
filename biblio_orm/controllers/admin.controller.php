<?php
include "models/admin.class.php";
//initialisation des attributs de l’objet voiture
$id_admin='';
$login_a='';
$pass_a='';

//récuperation des valeurs des attributs de l’objet voiture
if(isset($_REQUEST['id_admin'])) 
	$id_admin=$_REQUEST['id_admin'];
if(isset($_REQUEST['login_a'])) 
	$login_a=$_REQUEST['login_a'];
if(isset($_REQUEST['pass_a'])) 
	$pass_a=$_REQUEST['pass_a'];

//Instanciation de l’objet voiture
$inst=new admin($id_admin,$login_a,$pass_a);

switch($action){
case 'ajout1' : include 'views/admin/ajout1.view.php';
break;

case 'ajout' : $inst->ajout($cnx);
break;

case 'liste': $res=$inst->liste($cnx);
	include 'views/admin/liste.view.php';
	break;
	
	case 'edit1': 
	$res=$inst->listWhereId($cnx);
	include 'views/admin/edit.view.php';
	break;
	
	case 'edit': $inst->edit($cnx);
	break;
	
	case 'delete': $inst->delete($cnx);
	break;
	
}
?>