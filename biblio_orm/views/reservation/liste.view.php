<table id="example1" class="table table-bordered table-striped">
 <thead>
<tr>
	<th>Numero_Reservation</th>
	<th>Date_Reservation</th>
	<th>Etat</th>
	<th>Matricule_Abonne</th>
	<th>Code_Livre</th>
	<th>action</th> 
</tr>
</thead>
<tbody>
<?php
foreach($res as $obj){
?>
<tr>
	<td><?php echo $obj->Numero_Reservation;?></td>
	<td><?php echo $obj->Date_Reservation;?></td>
	<td><?php echo $obj->Etat;?></td>
	<td><?php echo $obj->Matricule_Abonne;?></td>
	<td><?php echo $obj->Code_Livre;?></td>
<td><a href="index.php?controller=reservation&action=delete&Numero_Reservation=<?php echo $obj->Numero_Reservation;?>" onclick="if(confirm('etes vous sure de supprimer?')) return true; else return false;">supp.</a>
| <a href="index.php?controller=reservation&action=edit1&Numero_Reservation=<?php echo $obj->Numero_Reservation;?>">modif.</a></td></tr>
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
