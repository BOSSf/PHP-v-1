<table id="example1" class="table table-bordered table-striped">
 <thead>
<tr>
	<th>Code_Livre</th>
	<th>Titre_Livre</th>
	<th>Date_Edition_Livre</th>
	<th>Stock_Livre</th>
	<th>Extrait_Livre</th>
	<th>Commentaire_Livre</th>
	<th>Id_theme</th>
	<th>Id_Editeur</th>
	<th>Id_Auteur</th>
	<th>image_livre</th>
	<th>action</th> 
</tr>
</thead>
<tbody>
<?php
foreach($res as $obj){
?>
<tr>
	<td><?php echo $obj->Code_Livre;?></td>
	<td><?php echo $obj->Titre_Livre;?></td>
	<td><?php echo $obj->Date_Edition_Livre;?></td>
	<td><?php echo $obj->Stock_Livre;?></td>
	<td><?php echo $obj->Extrait_Livre;?></td>
	<td><?php echo $obj->Commentaire_Livre;?></td>
	<td><?php echo $obj->Id_theme;?></td>
	<td><?php echo $obj->Id_Editeur;?></td>
	<td><?php echo $obj->Id_Auteur;?></td>
	<td><?php echo $obj->image_livre;?></td>
<td><a href="index.php?controller=livre&action=delete&Code_Livre=<?php echo $obj->Code_Livre;?>" onclick="if(confirm('etes vous sure de supprimer?')) return true; else return false;">supp.</a>
| <a href="index.php?controller=livre&action=edit1&Code_Livre=<?php echo $obj->Code_Livre;?>">modif.</a></td></tr>
<?php 
}
?>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</tbody>
</table>
