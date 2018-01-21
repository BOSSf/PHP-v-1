<?php
include "models/emprunte.class.php";
//initialisation des attributs de l’objet voiture
$Numero_Emprunt='';
$Date_Emprunt='';
$Date_Retour='';
$Matricule_Abonne='';
$Code_Livre='';

//récuperation des valeurs des attributs de l’objet voiture
if(isset($_REQUEST['Numero_Emprunt'])) 
	$Numero_Emprunt=$_REQUEST['Numero_Emprunt'];
if(isset($_REQUEST['Date_Emprunt'])) 
	$Date_Emprunt=$_REQUEST['Date_Emprunt'];
if(isset($_REQUEST['Date_Retour'])) 
	$Date_Retour=$_REQUEST['Date_Retour'];
if(isset($_REQUEST['Matricule_Abonne'])) 
	$Matricule_Abonne=$_REQUEST['Matricule_Abonne'];
if(isset($_REQUEST['Code_Livre'])) 
	$Code_Livre=$_REQUEST['Code_Livre'];

//Instanciation de l’objet voiture
$inst=new emprunte($Numero_Emprunt,$Date_Emprunt,$Date_Retour,$Matricule_Abonne,$Code_Livre);

switch($action){
case 'ajout1' : include 'views/emprunte/ajout1.view.php';
break;

case 'ajout' : $inst->ajout($cnx);
break;

case 'liste': $res=$inst->liste($cnx);
	include 'views/emprunte/liste.view.php';
	break;
	
	case 'edit1': 
	$res=$inst->listWhereId($cnx);
	include 'views/emprunte/edit.view.php';
	break;
	
	case 'edit': $inst->edit($cnx);
	break;
	
	case 'delete': $inst->delete($cnx);
	break;
	
}
?>