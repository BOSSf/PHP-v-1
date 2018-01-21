<table id="example1" class="table table-bordered table-striped">
 <thead>
<tr>
	<th>Id_Editeur</th>
	<th>Nom_Editeur</th>
	<th>action</th> 
</tr>
</thead>
<tbody>
<?php
foreach($res as $obj){
?>
<tr>
	<td><?php echo $obj->Id_Editeur;?></td>
	<td><?php echo $obj->Nom_Editeur;?></td>
<td><a href="index.php?controller=editeur&action=delete&Id_Editeur=<?php echo $obj->Id_Editeur;?>" onclick="if(confirm('etes vous sure de supprimer?')) return true; else return false;">supp.</a>
| <a href="index.php?controller=editeur&action=edit1&Id_Editeur=<?php echo $obj->Id_Editeur;?>">modif.</a></td></tr>
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
