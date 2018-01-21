<form method="post" action="index.php?controller=auteur&action=edit" enctype="multipart/form-data">
<h1>Modifierauteur</h1>
<br>ID_Auteur <input type="text" name="ID_Auteur" value="<?php echo $res->ID_Auteur;?>">
<br>Nom_Auteur <input type="text" name="Nom_Auteur" value="<?php echo $res->Nom_Auteur;?>">
<br>Prenom_Auteur <input type="text" name="Prenom_Auteur" value="<?php echo $res->Prenom_Auteur;?>">
<br><input type="submit" value="Modifier auteur">
<input type="reset" value="annuler">
</form>
