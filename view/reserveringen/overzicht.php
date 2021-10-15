<table>	
	<tr>
		<th>ID</th>
		<th>PRIJS</th>
		<th>DATUM</th>
		<th>START</th>
		<th>AANTAL UREN</th>
		<th>PAARD</th>
		<th>KLANT</th>
		<th style="background-color: black;"></th>
		<th style="background-color: black; font-size: 50p; text-align: center;"><a style="color: white;" href="<?=URL?>Main/createPage/reserveringen">CREATE</a></th>
	</tr>
	<?php foreach($data as $key => $value) {  
		$prijs = $value['uren'] * 55; ?>
	<tr>
		<td><?=$value["id"]?></td>
		<td>&euro;<?=$prijs?></td>
		<td><?=$value["datum"]?></td>
		<td><?=$value["starttijd"]?></td>
		<td><?=$value["uren"]?></td>
		<td><?=$value["paard"]?></td>
		<td><?=$value["klant"]?></td>
		<td><a href="<?=URL?>Main/updatePage/reserveringen/<?= $value["id"];?>">EDIT</a></td>
		<td><a style="color: red;" href="<?=URL?>Main/deletePage/reserveringen/<?= $value["id"];?>">DELETE</a></td>
	</tr>
	<?php }

	?>
</table>
<br>
<a href="<?=URL?>Main/index">TERUG</a>