<form method="post" action="index.php?controller=admin&action=edit" enctype="multipart/form-data">
<h1>Modifieradmin</h1>
<br>id_admin <input type="text" name="id_admin" value="<?php echo $res->id_admin;?>">
<br>login_a <input type="text" name="login_a" value="<?php echo $res->login_a;?>">
<br>pass_a <input type="text" name="pass_a" value="<?php echo $res->pass_a;?>">
<br><input type="submit" value="Modifier admin">
<input type="reset" value="annuler">
</form>
