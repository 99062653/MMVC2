<table>	
	<tr>
		<th>NAAM</th>
		<th>LEEFTIJD</th>
		<th>RAS</th>
		<th>SOORT</th>
	</tr>
	<?php foreach($data as $key => $value) {  ?>
	<tr>
		<td><?=$value["naam"]?></td>
		<td><?=$value["leeftijd"]?></td>
		<td><?=$value["ras"]?></td>
		<td><?=$value["soort"]?></td>
		<td><a href="<?=URL?>Main/editDier/<?= $value["id"];?>">EDIT</a></td>
	</tr>
	<?php }

	?>
</table>
<a href="<?=URL?>Main/index">TERUG</a>