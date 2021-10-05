<table>	
	<tr>
		<th>ID</th>
		<th>DATUM</th>
		<th>START</th>
		<th>EINDE</th>
		<th>PAARD</th>
		<th>KLANT</th>
		<th style="background-color: black;"></th>
		<th style="background-color: black; font-size: 50p; text-align: center;"><a style="color: white;" href="<?=URL?>Main/createPage/reserveringen">CREATE</a></th>
	</tr>
	<?php foreach($data as $key => $value) {  ?>
	<tr>
		<td><?=$value["id"]?></td>
		<td><?=$value["datum"]?></td>
		<td><?=$value["start-tijd"]?></td>
		<td><?=$value["eind-tijd"]?></td>
		<td><?=$value["paard"]?></td>
		<td><?=$value["klant"]?></td>
		<td><a href="<?=URL?>Main/updateReserveringPage/<?= $value["id"];?>">EDIT</a></td>
		<td><a style="color: red;" href="<?=URL?>Main/deletePage/reserveringen/<?= $value["id"];?>">DELETE</a></td>
	</tr>
	<?php }

	?>
</table>
<a href="<?=URL?>Main/index">TERUG</a>