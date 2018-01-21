<?php
include "fonctions.class.php";
class theme extends fonctions{
//initialisation des attributs de l’objet voiture
private $Id_theme;
private $Libelle_theme;

//constructeur
public function __construct($Id_theme,$Libelle_theme)
{
	$this->Id_theme=$Id_theme;
	$this->Libelle_theme=$Libelle_theme;
}

//methode d'ajout
public function ajout($cnx){
$cnx->exec("insert into theme(Id_theme,Libelle_theme) values( '".$this->Id_theme."', '".$this->Libelle_theme."')");
$this->redirect("index.php?controller=theme&action=liste");
}

//methode de selection
public function liste($cnx){
$resultat =$cnx->query("select * from theme")->fetchAll(PDO::FETCH_OBJ);
return $resultat;
}
//methode de selection whre id 
public function listWhereId($cnx){
$resultat =$cnx->query("select * from theme where Id_theme='".$this->Id_theme."'")->fetch(PDO::FETCH_OBJ);
	 
return $resultat;
}
//methode de edit
public function edit($cnx){
$cnx->exec("update theme set Libelle_theme= '".$this->Libelle_theme."' where Id_theme='".$this->Id_theme."'");
$this->redirect("index.php?controller=theme&action=liste");

}
//methode de delete
public function delete($cnx){
$cnx->exec("delete from theme where Id_theme='".$this->Id_theme."'");
$this->redirect("index.php?controller=theme&action=liste");

}
}

?>