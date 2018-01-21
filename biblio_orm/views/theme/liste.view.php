<table id="example1" class="table table-bordered table-striped">
 <thead>
<tr>
	<th>Id_theme</th>
	<th>Libelle_theme</th>
	<th>action</th> 
</tr>
</thead>
<tbody>
<?php
foreach($res as $obj){
?>
<tr>
	<td><?php echo $obj->Id_theme;?></td>
	<td><?php echo $obj->Libelle_theme;?></td>
<td><a href="index.php?controller=theme&action=delete&Id_theme=<?php echo $obj->Id_theme;?>" onclick="if(confirm('etes vous sure de supprimer?')) return true; else return false;">supp.</a>
| <a href="index.php?controller=theme&action=edit1&Id_theme=<?php echo $obj->Id_theme;?>">modif.</a></td></tr>
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
