<?php
include "fonctions.class.php";
class abonne extends fonctions{
//initialisation des attributs de l’objet voiture
private $Matricule_Abonne;
private $Nom_Abonne;
private $Prenom_Abonne;
private $Adresse_Abonne;
private $Numero_tel_Abonne;
private $Date_Naissance_Abonne;
private $Etat_Abonne;
private $Type_Abonne;

//constructeur
public function __construct($Matricule_Abonne,$Nom_Abonne,$Prenom_Abonne,$Adresse_Abonne,$Numero_tel_Abonne,$Date_Naissance_Abonne,$Etat_Abonne,$Type_Abonne)
{
	$this->Matricule_Abonne=$Matricule_Abonne;
	$this->Nom_Abonne=$Nom_Abonne;
	$this->Prenom_Abonne=$Prenom_Abonne;
	$this->Adresse_Abonne=$Adresse_Abonne;
	$this->Numero_tel_Abonne=$Numero_tel_Abonne;
	$this->Date_Naissance_Abonne=$Date_Naissance_Abonne;
	$this->Etat_Abonne=$Etat_Abonne;
	$this->Type_Abonne=$Type_Abonne;
}

//methode d'ajout
public function ajout($cnx){
$cnx->exec("insert into abonne(Matricule_Abonne,Nom_Abonne,Prenom_Abonne,Adresse_Abonne,Numero_tel_Abonne,Date_Naissance_Abonne,Etat_Abonne,Type_Abonne) values( '".$this->Matricule_Abonne."', '".$this->Nom_Abonne."', '".$this->Prenom_Abonne."', '".$this->Adresse_Abonne."', '".$this->Numero_tel_Abonne."', '".$this->Date_Naissance_Abonne."', '".$this->Etat_Abonne."', '".$this->Type_Abonne."')");
$this->redirect("index.php?controller=abonne&action=liste");
}

//methode de selection
public function liste($cnx){
$resultat =$cnx->query("select * from abonne")->fetchAll(PDO::FETCH_OBJ);
return $resultat;
}
//methode de selection whre id 
public function listWhereId($cnx){
$resultat =$cnx->query("select * from abonne where Matricule_Abonne='".$this->Matricule_Abonne."'")->fetch(PDO::FETCH_OBJ);
	 
return $resultat;
}
//methode de edit
public function edit($cnx){
$cnx->exec("update abonne set Nom_Abonne= '".$this->Nom_Abonne."',Prenom_Abonne= '".$this->Prenom_Abonne."',Adresse_Abonne= '".$this->Adresse_Abonne."',Numero_tel_Abonne= '".$this->Numero_tel_Abonne."',Date_Naissance_Abonne= '".$this->Date_Naissance_Abonne."',Etat_Abonne= '".$this->Etat_Abonne."',Type_Abonne= '".$this->Type_Abonne."' where Matricule_Abonne='".$this->Matricule_Abonne."'");
$this->redirect("index.php?controller=abonne&action=liste");

}
//methode de delete
public function delete($cnx){
$cnx->exec("delete from abonne where Matricule_Abonne='".$this->Matricule_Abonne."'");
$this->redirect("index.php?controller=abonne&action=liste");

}
}

?>