<?php
include "fonctions.class.php";
class admin extends fonctions{
//initialisation des attributs de l’objet voiture
private $id_admin;
private $login_a;
private $pass_a;

//constructeur
public function __construct($id_admin,$login_a,$pass_a)
{
	$this->id_admin=$id_admin;
	$this->login_a=$login_a;
	$this->pass_a=$pass_a;
}

//methode d'ajout
public function ajout($cnx){
$cnx->exec("insert into admin(id_admin,login_a,pass_a) values( '".$this->id_admin."', '".$this->login_a."', '".$this->pass_a."')");
$this->redirect("index.php?controller=admin&action=liste");
}

//methode de selection
public function liste($cnx){
$resultat =$cnx->query("select * from admin")->fetchAll(PDO::FETCH_OBJ);
return $resultat;
}
//methode de selection whre id 
public function listWhereId($cnx){
$resultat =$cnx->query("select * from admin where id_admin='".$this->id_admin."'")->fetch(PDO::FETCH_OBJ);
	 
return $resultat;
}
//methode de edit
public function edit($cnx){
$cnx->exec("update admin set login_a= '".$this->login_a."',pass_a= '".$this->pass_a."' where id_admin='".$this->id_admin."'");
$this->redirect("index.php?controller=admin&action=liste");

}
//methode de delete
public function delete($cnx){
$cnx->exec("delete from admin where id_admin='".$this->id_admin."'");
$this->redirect("index.php?controller=admin&action=liste");

}
}

?>