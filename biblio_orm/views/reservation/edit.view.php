<form method="post" action="index.php?controller=reservation&action=edit" enctype="multipart/form-data">
<h1>Modifierreservation</h1>
<br>Numero_Reservation <input type="text" name="Numero_Reservation" value="<?php echo $res->Numero_Reservation;?>">
<br>Date_Reservation <input type="text" name="Date_Reservation" value="<?php echo $res->Date_Reservation;?>">
<br>Etat <input type="text" name="Etat" value="<?php echo $res->Etat;?>">
<br>Matricule_Abonne <input type="text" name="Matricule_Abonne" value="<?php echo $res->Matricule_Abonne;?>">
<br>Code_Livre <input type="text" name="Code_Livre" value="<?php echo $res->Code_Livre;?>">
<br><input type="submit" value="Modifier reservation">
<input type="reset" value="annuler">
</form>
