<form method="post" action="index.php?controller=emprunte&action=edit" enctype="multipart/form-data">
<h1>Modifieremprunte</h1>
<br>Numero_Emprunt <input type="text" name="Numero_Emprunt" value="<?php echo $res->Numero_Emprunt;?>">
<br>Date_Emprunt <input type="text" name="Date_Emprunt" value="<?php echo $res->Date_Emprunt;?>">
<br>Date_Retour <input type="text" name="Date_Retour" value="<?php echo $res->Date_Retour;?>">
<br>Matricule_Abonne <input type="text" name="Matricule_Abonne" value="<?php echo $res->Matricule_Abonne;?>">
<br>Code_Livre <input type="text" name="Code_Livre" value="<?php echo $res->Code_Livre;?>">
<br><input type="submit" value="Modifier emprunte">
<input type="reset" value="annuler">
</form>
