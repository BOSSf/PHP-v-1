<?php   if(!isset($_SESSION))
{
    session_start();
}
?>

<form method="post" action="index.php?controller=reservation&action=ajout" enctype="multipart/form-data">
 <label>Date_Reservation </label>:<input type="text" name="Date_Reservation" value = <?php $datetime = date("Y-m-d ");
 echo $datetime;?> >
<br>
 <label>Etat </label>:<input type="text" name="Etat" value="disponible">
<br>
 <label>Matricule_Abonne </label>:<input type="text" name="Matricule_Abonne"  ><br>
 <label>Code_Livre </label>:<input type="text" name="Code_Livre" value="<?php
    if(isset($_REQUEST['Code_Livre'])){
        echo $_REQUEST['Code_Livre'];}
    else
    { echo 'error';
    }
   ?>">
<br>
<input type="submit" value="ajouter"></form>
