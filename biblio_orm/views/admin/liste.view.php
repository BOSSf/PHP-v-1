<table id="example1" class="table table-bordered table-striped">
 <thead>
<tr>
	<th>id_admin</th>
	<th>login_a</th>
	<th>pass_a</th>
	<th>action</th> 
</tr>
</thead>
<tbody>
<?php
foreach($res as $obj){
?>
<tr>
	<td><?php echo $obj->id_admin;?></td>
	<td><?php echo $obj->login_a;?></td>
	<td><?php echo $obj->pass_a;?></td>
<td><a href="index.php?controller=admin&action=delete&id_admin=<?php echo $obj->id_admin;?>" onclick="if(confirm('etes vous sure de supprimer?')) return true; else return false;">supp.</a>
| <a href="index.php?controller=admin&action=edit1&id_admin=<?php echo $obj->id_admin;?>">modif.</a></td></tr>
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
