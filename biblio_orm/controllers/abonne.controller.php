<?php
include "models/abonne.class.php";
//initialisation des attributs de l’objet voiture
$Matricule_Abonne='';
$Nom_Abonne='';
$Prenom_Abonne='';
$Adresse_Abonne='';
$Numero_tel_Abonne='';
$Date_Naissance_Abonne='';
$Etat_Abonne='';
$Type_Abonne='';

//récuperation des valeurs des attributs de l’objet voiture
if(isset($_REQUEST['Matricule_Abonne'])) 
	$Matricule_Abonne=$_REQUEST['Matricule_Abonne'];
if(isset($_REQUEST['Nom_Abonne'])) 
	$Nom_Abonne=$_REQUEST['Nom_Abonne'];
if(isset($_REQUEST['Prenom_Abonne'])) 
	$Prenom_Abonne=$_REQUEST['Prenom_Abonne'];
if(isset($_REQUEST['Adresse_Abonne'])) 
	$Adresse_Abonne=$_REQUEST['Adresse_Abonne'];
if(isset($_REQUEST['Numero_tel_Abonne'])) 
	$Numero_tel_Abonne=$_REQUEST['Numero_tel_Abonne'];
if(isset($_REQUEST['Date_Naissance_Abonne'])) 
	$Date_Naissance_Abonne=$_REQUEST['Date_Naissance_Abonne'];
if(isset($_REQUEST['Etat_Abonne'])) 
	$Etat_Abonne=$_REQUEST['Etat_Abonne'];
if(isset($_REQUEST['Type_Abonne'])) 
	$Type_Abonne=$_REQUEST['Type_Abonne'];

//Instanciation de l’objet voiture
$inst=new abonne($Matricule_Abonne,$Nom_Abonne,$Prenom_Abonne,$Adresse_Abonne,$Numero_tel_Abonne,$Date_Naissance_Abonne,$Etat_Abonne,$Type_Abonne);

switch($action){
case 'ajout1' : include 'views/abonne/ajout1.view.php';
break;

case 'ajout' : $inst->ajout($cnx);
break;

case 'liste': $res=$inst->liste($cnx);
	include 'views/abonne/liste.view.php';
	break;
	
	case 'edit1': 
	$res=$inst->listWhereId($cnx);
	include 'views/abonne/edit.view.php';
	break;
	
	case 'edit': $inst->edit($cnx);
	break;
	
	case 'delete': $inst->delete($cnx);
	break;
	
}
?>