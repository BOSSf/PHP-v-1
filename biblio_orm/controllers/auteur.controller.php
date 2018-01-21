<?php
include "models/auteur.class.php";
//initialisation des attributs de l’objet voiture
$ID_Auteur='';
$Nom_Auteur='';
$Prenom_Auteur='';

//récuperation des valeurs des attributs de l’objet voiture
if(isset($_REQUEST['ID_Auteur'])) 
	$ID_Auteur=$_REQUEST['ID_Auteur'];
if(isset($_REQUEST['Nom_Auteur'])) 
	$Nom_Auteur=$_REQUEST['Nom_Auteur'];
if(isset($_REQUEST['Prenom_Auteur'])) 
	$Prenom_Auteur=$_REQUEST['Prenom_Auteur'];

//Instanciation de l’objet voiture
$inst=new auteur($ID_Auteur,$Nom_Auteur,$Prenom_Auteur);

switch($action){
case 'ajout1' : include 'views/auteur/ajout1.view.php';
break;

case 'ajout' : $inst->ajout($cnx);
break;

case 'liste': $res=$inst->liste($cnx);
	include 'views/auteur/liste.view.php';
	break;
	
	case 'edit1': 
	$res=$inst->listWhereId($cnx);
	include 'views/auteur/edit.view.php';
	break;
	
	case 'edit': $inst->edit($cnx);
	break;
	
	case 'delete': $inst->delete($cnx);
	break;
	
}
?>