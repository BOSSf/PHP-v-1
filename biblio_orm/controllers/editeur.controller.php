<?php
include "models/editeur.class.php";
//initialisation des attributs de l’objet voiture
$Id_Editeur='';
$Nom_Editeur='';

//récuperation des valeurs des attributs de l’objet voiture
if(isset($_REQUEST['Id_Editeur'])) 
	$Id_Editeur=$_REQUEST['Id_Editeur'];
if(isset($_REQUEST['Nom_Editeur'])) 
	$Nom_Editeur=$_REQUEST['Nom_Editeur'];

//Instanciation de l’objet voiture
$inst=new editeur($Id_Editeur,$Nom_Editeur);

switch($action){
case 'ajout1' : include 'views/editeur/ajout1.view.php';
break;

case 'ajout' : $inst->ajout($cnx);
break;

case 'liste': $res=$inst->liste($cnx);
	include 'views/editeur/liste.view.php';
	break;
	
	case 'edit1': 
	$res=$inst->listWhereId($cnx);
	include 'views/editeur/edit.view.php';
	break;
	
	case 'edit': $inst->edit($cnx);
	break;
	
	case 'delete': $inst->delete($cnx);
	break;
	
}
?>