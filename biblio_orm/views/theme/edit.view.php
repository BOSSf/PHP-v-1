<form method="post" action="index.php?controller=theme&action=edit" enctype="multipart/form-data">
<h1>Modifiertheme</h1>
<br>Id_theme <input type="text" name="Id_theme" value="<?php echo $res->Id_theme;?>">
<br>Libelle_theme <input type="text" name="Libelle_theme" value="<?php echo $res->Libelle_theme;?>">
<br><input type="submit" value="Modifier theme">
<input type="reset" value="annuler">
</form>
