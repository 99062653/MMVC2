<h1>EDIT RESERVERING</h1>

<form name="diereneditor" method="post" action="<?=URL?>Main/updateReserveringSend/<?=$data['id']?>">

		<label for="datum">DATUM</label><br>
		<input type="date" name="datum" value="<?=$data["datum"];?>"  required><br>

		<label for="start">START</label><br>
		<input type="time" name="start" value="<?=$data["starttijd"];?>" required><br>

		<label for="einde">AANTAL UREN</label><br>
		<input type="numer" name="einde" maxlength="1" value="<?=$data["uren"];?>" required><br>

		<label for="paard">PAARD</label><br>
		<select name="paard" required>
			<?php foreach($data['manegedieren'] as $key => $value) {  ?>
				<option value="<?= $value["diernaam"]?>"><?= $value["diernaam"]?></option>
			<?php } ?>
		</select> <br>

		<label for="klant">KLANT</label><br>
		<select name="klant" required>
			<?php foreach($data['klanten'] as $key => $value) {  ?>
				<option value="<?= $value["klantnaam"]?>"><?= $value["klantnaam"]?></option>
			<?php } ?>
		</select> <br><br>

		<input type="submit" name="submit" value="UPDATE">
</form>
<br>
<a style="display: block; margin-top: 15px;" href="<?=URL?>Main/Overzicht/reserveringen">TERUG</a>