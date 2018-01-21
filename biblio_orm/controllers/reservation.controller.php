<?php
include "models/reservation.class.php";

//initialisation des attributs de l’objet voiture
$Numero_Reservation='';
$Date_Reservation='';
$Etat='';
$Matricule_Abonne='';
$Code_Livre='';

//récuperation des valeurs des attributs de l’objet voiture
if(isset($_REQUEST['Numero_Reservation'])) 
	$Numero_Reservation=$_REQUEST['Numero_Reservation'];
if(isset($_REQUEST['Date_Reservation'])) 
	$Date_Reservation=$_REQUEST['Date_Reservation'];
if(isset($_REQUEST['Etat'])) 
	$Etat=$_REQUEST['Etat'];
if(isset($_REQUEST['Matricule_Abonne'])) 
	$Matricule_Abonne=$_REQUEST['Matricule_Abonne'];
if(isset($_REQUEST['Code_Livre'])) 
	$Code_Livre=$_REQUEST['Code_Livre'];

//Instanciation de l’objet voiture
$inst=new reservation($Numero_Reservation,$Date_Reservation,$Etat,$Matricule_Abonne,$Code_Livre);

switch($action){
case 'ajout1' :
include 'views/reservation/ajout1.view.php';
break;

case 'ajout' : $inst->ajout($cnx);
break;

case 'liste': $res=$inst->liste($cnx);
	include 'views/reservation/liste.view.php';
	break;
	
	case 'edit1': 
	$res=$inst->listWhereId($cnx);
	include 'views/reservation/edit.view.php';
	break;
	
	case 'edit': $inst->edit($cnx);
	break;
	
	case 'delete': $inst->delete($cnx);
	break;



}
?>