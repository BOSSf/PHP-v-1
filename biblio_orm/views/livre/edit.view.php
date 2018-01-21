<form method="post" action="index.php?controller=livre&action=edit" enctype="multipart/form-data">
<h1>Modifierlivre</h1>
<br>Code_Livre <input type="text" name="Code_Livre" value="<?php echo $res->Code_Livre;?>">
<br>Titre_Livre <input type="text" name="Titre_Livre" value="<?php echo $res->Titre_Livre;?>">
<br>Date_Edition_Livre <input type="text" name="Date_Edition_Livre" value="<?php echo $res->Date_Edition_Livre;?>">
<br>Stock_Livre <input type="text" name="Stock_Livre" value="<?php echo $res->Stock_Livre;?>">
<br>Extrait_Livre <input type="text" name="Extrait_Livre" value="<?php echo $res->Extrait_Livre;?>">
<br>Commentaire_Livre <input type="text" name="Commentaire_Livre" value="<?php echo $res->Commentaire_Livre;?>">
<br>Id_theme <input type="text" name="Id_theme" value="<?php echo $res->Id_theme;?>">
<br>Id_Editeur <input type="text" name="Id_Editeur" value="<?php echo $res->Id_Editeur;?>">
<br>Id_Auteur <input type="text" name="Id_Auteur" value="<?php echo $res->Id_Auteur;?>">
<br>image_livre <input type="text" name="image_livre" value="<?php echo $res->image_livre;?>">
<br><input type="submit" value="Modifier livre">
<input type="reset" value="annuler">
</form>
