<?php
include "fonctions.class.php";
class auteur extends fonctions{
//initialisation des attributs de l’objet voiture
private $ID_Auteur;
private $Nom_Auteur;
private $Prenom_Auteur;

//constructeur
public function __construct($ID_Auteur,$Nom_Auteur,$Prenom_Auteur)
{
	$this->ID_Auteur=$ID_Auteur;
	$this->Nom_Auteur=$Nom_Auteur;
	$this->Prenom_Auteur=$Prenom_Auteur;
}

//methode d'ajout
public function ajout($cnx){
$cnx->exec("insert into auteur(ID_Auteur,Nom_Auteur,Prenom_Auteur) values( '".$this->ID_Auteur."', '".$this->Nom_Auteur."', '".$this->Prenom_Auteur."')");
$this->redirect("index.php?controller=auteur&action=liste");
}

//methode de selection
public function liste($cnx){
$resultat =$cnx->query("select * from auteur")->fetchAll(PDO::FETCH_OBJ);
return $resultat;
}
//methode de selection whre id 
public function listWhereId($cnx){
$resultat =$cnx->query("select * from auteur where ID_Auteur='".$this->ID_Auteur."'")->fetch(PDO::FETCH_OBJ);
	 
return $resultat;
}
//methode de edit
public function edit($cnx){
$cnx->exec("update auteur set Nom_Auteur= '".$this->Nom_Auteur."',Prenom_Auteur= '".$this->Prenom_Auteur."' where ID_Auteur='".$this->ID_Auteur."'");
$this->redirect("index.php?controller=auteur&action=liste");

}
//methode de delete
public function delete($cnx){
$cnx->exec("delete from auteur where ID_Auteur='".$this->ID_Auteur."'");
$this->redirect("index.php?controller=auteur&action=liste");

}
}

?>