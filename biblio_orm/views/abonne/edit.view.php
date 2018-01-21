<form method="post" action="index.php?controller=abonne&action=edit" enctype="multipart/form-data">
<h1>Modifierabonne</h1>
<br>Matricule_Abonne <input type="text" name="Matricule_Abonne" value="<?php echo $res->Matricule_Abonne;?>">
<br>Nom_Abonne <input type="text" name="Nom_Abonne" value="<?php echo $res->Nom_Abonne;?>">
<br>Prenom_Abonne <input type="text" name="Prenom_Abonne" value="<?php echo $res->Prenom_Abonne;?>">
<br>Adresse_Abonne <input type="text" name="Adresse_Abonne" value="<?php echo $res->Adresse_Abonne;?>">
<br>Numero_tel_Abonne <input type="text" name="Numero_tel_Abonne" value="<?php echo $res->Numero_tel_Abonne;?>">
<br>Date_Naissance_Abonne <input type="text" name="Date_Naissance_Abonne" value="<?php echo $res->Date_Naissance_Abonne;?>">
<br>Etat_Abonne <input type="text" name="Etat_Abonne" value="<?php echo $res->Etat_Abonne;?>">
<br>Type_Abonne <input type="text" name="Type_Abonne" value="<?php echo $res->Type_Abonne;?>">
<br><input type="submit" value="Modifier abonne">
<input type="reset" value="annuler">
</form>
