<table>	
	<tr>
		<th>ID</th>
		<th>NAAM</th>
		<th>LEEFTIJD</th>
		<th>RAS</th>
		<th>SOORT</th>
		<th style="background-color: black;"></th>
		<th style="background-color: black; font-size: 50p; text-align: center;"><a style="color: white;" href="<?=URL?>Main/createDierPage">CREATE</a></th>
	</tr>
	<?php foreach($data as $key => $value) {  ?>
	<tr>
		<td><?=$value["id"]?></td>
		<td><?=$value["naam"]?></td>
		<td><?=$value["leeftijd"]?></td>
		<td><?=$value["ras"]?></td>
		<td><?=$value["soort"]?></td>
		<td><a href="<?=URL?>Main/updateDierPage/<?= $value["id"];?>">EDIT</a></td>
		<td><a style="color: red;" href="<?=URL?>Main/deleteDierPage/<?= $value["id"];?>">DELETE</a></td>
	</tr>
	<?php }

	?>
</table>
<a href="<?=URL?>Main/index">TERUG</a>