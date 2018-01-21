<?php
include "models/theme.class.php";
//initialisation des attributs de l’objet voiture
$Id_theme='';
$Libelle_theme='';

//récuperation des valeurs des attributs de l’objet voiture
if(isset($_REQUEST['Id_theme'])) 
	$Id_theme=$_REQUEST['Id_theme'];
if(isset($_REQUEST['Libelle_theme'])) 
	$Libelle_theme=$_REQUEST['Libelle_theme'];

//Instanciation de l’objet voiture
$inst=new theme($Id_theme,$Libelle_theme);

switch($action){
case 'ajout1' : include 'views/theme/ajout1.view.php';
break;

case 'ajout' : $inst->ajout($cnx);
break;

case 'liste': $res=$inst->liste($cnx);
	include 'views/theme/liste.view.php';
	break;
	
	case 'edit1': 
	$res=$inst->listWhereId($cnx);
	include 'views/theme/edit.view.php';
	break;
	
	case 'edit': $inst->edit($cnx);
	break;
	
	case 'delete': $inst->delete($cnx);
	break;
	
}
?>