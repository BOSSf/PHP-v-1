<?php
include "fonctions.class.php";
class editeur extends fonctions{
//initialisation des attributs de l’objet voiture
private $Id_Editeur;
private $Nom_Editeur;

//constructeur
public function __construct($Id_Editeur,$Nom_Editeur)
{
	$this->Id_Editeur=$Id_Editeur;
	$this->Nom_Editeur=$Nom_Editeur;
}

//methode d'ajout
public function ajout($cnx){
$cnx->exec("insert into editeur(Id_Editeur,Nom_Editeur) values( '".$this->Id_Editeur."', '".$this->Nom_Editeur."')");
$this->redirect("index.php?controller=editeur&action=liste");
}

//methode de selection
public function liste($cnx){
$resultat =$cnx->query("select * from editeur")->fetchAll(PDO::FETCH_OBJ);
return $resultat;
}
//methode de selection whre id 
public function listWhereId($cnx){
$resultat =$cnx->query("select * from editeur where Id_Editeur='".$this->Id_Editeur."'")->fetch(PDO::FETCH_OBJ);
	 
return $resultat;
}
//methode de edit
public function edit($cnx){
$cnx->exec("update editeur set Nom_Editeur= '".$this->Nom_Editeur."' where Id_Editeur='".$this->Id_Editeur."'");
$this->redirect("index.php?controller=editeur&action=liste");

}
//methode de delete
public function delete($cnx){
$cnx->exec("delete from editeur where Id_Editeur='".$this->Id_Editeur."'");
$this->redirect("index.php?controller=editeur&action=liste");

}
}

?>