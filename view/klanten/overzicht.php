<table>	
	<tr>
		<th>ID</th>
		<th>NAAM</th>
		<th>ACHTERNAAM</th>
		<th>LEEFTIJD</th>
		<th>EMAIL</th>
		<th>TELEFOON</th>
		<th>ADRES</th>
		<th style="background-color: black;"></th>
		<th style="background-color: black; font-size: 50p; text-align: center;"><a style="color: white;" href="<?=URL?>Main/createPage/klanten">CREATE</a></th>
	</tr>
	<?php foreach($data as $key => $value) {  ?>
	<tr>
		<td><?=$value["id"]?></td>
		<td><?=$value["klantnaam"]?></td>
		<td><?=$value["achternaam"]?></td>
		<td><?=$value["leeftijd"]?></td>
		<td><?=$value["email"]?></td>
		<td><?=$value["telefoon"]?></td>
		<td><?=$value["adres"]?></td>
		<td><a href="<?=URL?>Main/updatePage/klanten/<?= $value["id"];?>">EDIT</a></td>
		<td><a style="color: red;" href="<?=URL?>Main/deletePage/klanten/<?= $value["id"];?>">DELETE</a></td>
	</tr>
	<?php }

	?>
</table>
<br>
<a href="<?=URL?>Main/index">TERUG</a>