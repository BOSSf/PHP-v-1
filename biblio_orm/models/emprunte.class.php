<?php
include "fonctions.class.php";
class emprunte extends fonctions{
//initialisation des attributs de l’objet voiture
private $Numero_Emprunt;
private $Date_Emprunt;
private $Date_Retour;
private $Matricule_Abonne;
private $Code_Livre;

//constructeur
public function __construct($Numero_Emprunt,$Date_Emprunt,$Date_Retour,$Matricule_Abonne,$Code_Livre)
{
	$this->Numero_Emprunt=$Numero_Emprunt;
	$this->Date_Emprunt=$Date_Emprunt;
	$this->Date_Retour=$Date_Retour;
	$this->Matricule_Abonne=$Matricule_Abonne;
	$this->Code_Livre=$Code_Livre;
}

//methode d'ajout
public function ajout($cnx){
$cnx->exec("insert into emprunte(Numero_Emprunt,Date_Emprunt,Date_Retour,Matricule_Abonne,Code_Livre) values( '".$this->Numero_Emprunt."', '".$this->Date_Emprunt."', '".$this->Date_Retour."', '".$this->Matricule_Abonne."', '".$this->Code_Livre."')");
$this->redirect("index.php?controller=emprunte&action=liste");
}

//methode de selection
public function liste($cnx){
$resultat =$cnx->query("select * from emprunte")->fetchAll(PDO::FETCH_OBJ);
return $resultat;
}
//methode de selection whre id 
public function listWhereId($cnx){
$resultat =$cnx->query("select * from emprunte where Numero_Emprunt='".$this->Numero_Emprunt."'")->fetch(PDO::FETCH_OBJ);
	 
return $resultat;
}
//methode de edit
public function edit($cnx){
$cnx->exec("update emprunte set Date_Emprunt= '".$this->Date_Emprunt."',Date_Retour= '".$this->Date_Retour."',Matricule_Abonne= '".$this->Matricule_Abonne."',Code_Livre= '".$this->Code_Livre."' where Numero_Emprunt='".$this->Numero_Emprunt."'");
$this->redirect("index.php?controller=emprunte&action=liste");

}
//methode de delete
public function delete($cnx){
$cnx->exec("delete from emprunte where Numero_Emprunt='".$this->Numero_Emprunt."'");
$this->redirect("index.php?controller=emprunte&action=liste");

}
}

?>