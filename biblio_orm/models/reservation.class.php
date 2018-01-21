<?php
include "fonctions.class.php";
class reservation extends fonctions{
//initialisation des attributs de l’objet voiture
private $Numero_Reservation;
private $Date_Reservation;
private $Etat;
private $Matricule_Abonne;
private $Code_Livre;

//constructeur
public function __construct($Numero_Reservation,$Date_Reservation,$Etat,$Matricule_Abonne,$Code_Livre)
{
	$this->Numero_Reservation=$Numero_Reservation;
	$this->Date_Reservation=$Date_Reservation;
	$this->Etat=$Etat;
	$this->Matricule_Abonne=$Matricule_Abonne;
	$this->Code_Livre=$Code_Livre;
}

//methode d'ajout
public function ajout($cnx){
$cnx->exec("insert into reservation(Numero_Reservation,Date_Reservation,Etat,Matricule_Abonne,Code_Livre) values( '".$this->Numero_Reservation."', '".$this->Date_Reservation."', '".$this->Etat."', '".$this->Matricule_Abonne."', '".$this->Code_Livre."')");
$this->redirect("index.php?controller=reservation&action=liste");
}

//methode de selection
public function liste($cnx){
$resultat =$cnx->query("select * from reservation")->fetchAll(PDO::FETCH_OBJ);
return $resultat;
}
//methode de selection whre id 
public function listWhereId($cnx){
$resultat =$cnx->query("select * from reservation where Numero_Reservation='".$this->Numero_Reservation."'")->fetch(PDO::FETCH_OBJ);
	 
return $resultat;
}
//methode de edit
public function edit($cnx){
$cnx->exec("update reservation set Date_Reservation= '".$this->Date_Reservation."',Etat= '".$this->Etat."',Matricule_Abonne= '".$this->Matricule_Abonne."',Code_Livre= '".$this->Code_Livre."' where Numero_Reservation='".$this->Numero_Reservation."'");
$this->redirect("index.php?controller=reservation&action=liste");

}
//methode de delete
public function delete($cnx){
$cnx->exec("delete from reservation where Numero_Reservation='".$this->Numero_Reservation."'");
$this->redirect("index.php?controller=reservation&action=liste");

}
}

?>