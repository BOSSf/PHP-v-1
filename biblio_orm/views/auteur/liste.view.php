<table id="example1" class="table table-bordered table-striped">
 <thead>
<tr>
	<th>ID_Auteur</th>
	<th>Nom_Auteur</th>
	<th>Prenom_Auteur</th>
	<th>action</th> 
</tr>
</thead>
<tbody>
<?php
foreach($res as $obj){
?>
<tr>
	<td><?php echo $obj->ID_Auteur;?></td>
	<td><?php echo $obj->Nom_Auteur;?></td>
	<td><?php echo $obj->Prenom_Auteur;?></td>
<td><a href="index.php?controller=auteur&action=delete&ID_Auteur=<?php echo $obj->ID_Auteur;?>" onclick="if(confirm('etes vous sure de supprimer?')) return true; else return false;">supp.</a>
| <a href="index.php?controller=auteur&action=edit1&ID_Auteur=<?php echo $obj->ID_Auteur;?>">modif.</a></td></tr>
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
