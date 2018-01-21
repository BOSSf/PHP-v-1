<?php
include "models/livre.class.php";
//initialisation des attributs de l’objet voiture
$Code_Livre='';
$Titre_Livre='';
$Date_Edition_Livre='';
$Stock_Livre='';
$Extrait_Livre='';
$Commentaire_Livre='';
$Id_theme='';
$Id_Editeur='';
$Id_Auteur='';
$image_livre='';

//récuperation des valeurs des attributs de l’objet voiture
if(isset($_REQUEST['Code_Livre'])) 
	$Code_Livre=$_REQUEST['Code_Livre'];
if(isset($_REQUEST['Titre_Livre'])) 
	$Titre_Livre=$_REQUEST['Titre_Livre'];
if(isset($_REQUEST['Date_Edition_Livre'])) 
	$Date_Edition_Livre=$_REQUEST['Date_Edition_Livre'];
if(isset($_REQUEST['Stock_Livre'])) 
	$Stock_Livre=$_REQUEST['Stock_Livre'];
if(isset($_REQUEST['Extrait_Livre'])) 
	$Extrait_Livre=$_REQUEST['Extrait_Livre'];
if(isset($_REQUEST['Commentaire_Livre'])) 
	$Commentaire_Livre=$_REQUEST['Commentaire_Livre'];
if(isset($_REQUEST['Id_theme'])) 
	$Id_theme=$_REQUEST['Id_theme'];
if(isset($_REQUEST['Id_Editeur'])) 
	$Id_Editeur=$_REQUEST['Id_Editeur'];
if(isset($_REQUEST['Id_Auteur'])) 
	$Id_Auteur=$_REQUEST['Id_Auteur'];
if(isset($_REQUEST['image_livre'])) 
	$image_livre=$_REQUEST['image_livre'];

//Instanciation de l’objet voiture
$inst=new livre($Code_Livre,$Titre_Livre,$Date_Edition_Livre,$Stock_Livre,$Extrait_Livre,$Commentaire_Livre,$Id_theme,$Id_Editeur,$Id_Auteur,$image_livre);

switch($action){
case 'ajout1' : include 'views/livre/ajout1.view.php';
break;

case 'ajout' : $inst->ajout($cnx);
break;

case 'liste': $res=$inst->liste($cnx);
	include 'views/livre/liste.view.php';
	break;
	
	case 'edit1': 
	$res=$inst->listWhereId($cnx);
	include 'views/livre/edit.view.php';
	break;
	
	case 'edit': $inst->edit($cnx);
	break;
	
	case 'delete': $inst->delete($cnx);
	break;
	
}
?>