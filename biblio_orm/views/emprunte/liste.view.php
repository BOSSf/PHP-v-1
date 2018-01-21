<table id="example1" class="table table-bordered table-striped">
 <thead>
<tr>
	<th>Numero_Emprunt</th>
	<th>Date_Emprunt</th>
	<th>Date_Retour</th>
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
	<td><?php echo $obj->Numero_Emprunt;?></td>
	<td><?php echo $obj->Date_Emprunt;?></td>
	<td><?php echo $obj->Date_Retour;?></td>
	<td><?php echo $obj->Matricule_Abonne;?></td>
	<td><?php echo $obj->Code_Livre;?></td>
<td><a href="index.php?controller=emprunte&action=delete&Numero_Emprunt=<?php echo $obj->Numero_Emprunt;?>" onclick="if(confirm('etes vous sure de supprimer?')) return true; else return false;">supp.</a>
| <a href="index.php?controller=emprunte&action=edit1&Numero_Emprunt=<?php echo $obj->Numero_Emprunt;?>">modif.</a></td></tr>
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
