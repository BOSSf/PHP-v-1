<form method="post" action="index.php?controller=editeur&action=edit" enctype="multipart/form-data">
<h1>Modifierediteur</h1>
<br>Id_Editeur <input type="text" name="Id_Editeur" value="<?php echo $res->Id_Editeur;?>">
<br>Nom_Editeur <input type="text" name="Nom_Editeur" value="<?php echo $res->Nom_Editeur;?>">
<br><input type="submit" value="Modifier editeur">
<input type="reset" value="annuler">
</form>
