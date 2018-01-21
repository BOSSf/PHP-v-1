<table id="example1" class="table table-bordered table-striped">
 <thead>
<tr>
	<th>Matricule_Abonne</th>
	<th>Nom_Abonne</th>
	<th>Prenom_Abonne</th>
	<th>Adresse_Abonne</th>
	<th>Numero_tel_Abonne</th>
	<th>Date_Naissance_Abonne</th>
	<th>Etat_Abonne</th>
	<th>Type_Abonne</th>
	<th>action</th> 
</tr>
</thead>
<tbody>
<?php
foreach($res as $obj){
?>
<tr>
	<td><?php echo $obj->Matricule_Abonne;?></td>
	<td><?php echo $obj->Nom_Abonne;?></td>
	<td><?php echo $obj->Prenom_Abonne;?></td>
	<td><?php echo $obj->Adresse_Abonne;?></td>
	<td><?php echo $obj->Numero_tel_Abonne;?></td>
	<td><?php echo $obj->Date_Naissance_Abonne;?></td>
	<td><?php echo $obj->Etat_Abonne;?></td>
	<td><?php echo $obj->Type_Abonne;?></td>
<td><a href="index.php?controller=abonne&action=delete&Matricule_Abonne=<?php echo $obj->Matricule_Abonne;?>" onclick="if(confirm('etes vous sure de supprimer?')) return true; else return false;">supp.</a>
| <a href="index.php?controller=abonne&action=edit1&Matricule_Abonne=<?php echo $obj->Matricule_Abonne;?>">modif.</a></td></tr>
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
