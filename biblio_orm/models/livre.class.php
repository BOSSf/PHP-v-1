<?php
include "fonctions.class.php";
class livre extends fonctions{
//initialisation des attributs de l’objet voiture
private $Code_Livre;
private $Titre_Livre;
private $Date_Edition_Livre;
private $Stock_Livre;
private $Extrait_Livre;
private $Commentaire_Livre;
private $Id_theme;
private $Id_Editeur;
private $Id_Auteur;
private $image_livre;

//constructeur
public function __construct($Code_Livre,$Titre_Livre,$Date_Edition_Livre,$Stock_Livre,$Extrait_Livre,$Commentaire_Livre,$Id_theme,$Id_Editeur,$Id_Auteur,$image_livre)
{
	$this->Code_Livre=$Code_Livre;
	$this->Titre_Livre=$Titre_Livre;
	$this->Date_Edition_Livre=$Date_Edition_Livre;
	$this->Stock_Livre=$Stock_Livre;
	$this->Extrait_Livre=$Extrait_Livre;
	$this->Commentaire_Livre=$Commentaire_Livre;
	$this->Id_theme=$Id_theme;
	$this->Id_Editeur=$Id_Editeur;
	$this->Id_Auteur=$Id_Auteur;
	$this->image_livre=$image_livre;
}

//methode d'ajout
public function ajout($cnx){
$cnx->exec("insert into livre(Code_Livre,Titre_Livre,Date_Edition_Livre,Stock_Livre,Extrait_Livre,Commentaire_Livre,Id_theme,Id_Editeur,Id_Auteur,image_livre) values( '".$this->Code_Livre."', '".$this->Titre_Livre."', '".$this->Date_Edition_Livre."', '".$this->Stock_Livre."', '".$this->Extrait_Livre."', '".$this->Commentaire_Livre."', '".$this->Id_theme."', '".$this->Id_Editeur."', '".$this->Id_Auteur."', '".$this->image_livre."')");
$this->redirect("index.php?controller=livre&action=liste");
}

//methode de selection
public function liste($cnx){
$resultat =$cnx->query("select * from livre")->fetchAll(PDO::FETCH_OBJ);
return $resultat;
}
//methode de selection whre id 
public function listWhereId($cnx){
$resultat =$cnx->query("select * from livre where Code_Livre='".$this->Code_Livre."'")->fetch(PDO::FETCH_OBJ);
	 
return $resultat;
}
//methode de edit
public function edit($cnx){
$cnx->exec("update livre set Titre_Livre= '".$this->Titre_Livre."',Date_Edition_Livre= '".$this->Date_Edition_Livre."',Stock_Livre= '".$this->Stock_Livre."',Extrait_Livre= '".$this->Extrait_Livre."',Commentaire_Livre= '".$this->Commentaire_Livre."',Id_theme= '".$this->Id_theme."',Id_Editeur= '".$this->Id_Editeur."',Id_Auteur= '".$this->Id_Auteur."',image_livre= '".$this->image_livre."' where Code_Livre='".$this->Code_Livre."'");
$this->redirect("index.php?controller=livre&action=liste");

}
//methode de delete
public function delete($cnx){
$cnx->exec("delete from livre where Code_Livre='".$this->Code_Livre."'");
$this->redirect("index.php?controller=livre&action=liste");

}
}

?>