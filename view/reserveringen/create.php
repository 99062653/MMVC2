<h1>CREATE RESERVERING</h1>

<form name="diereneditor" method="post" action="<?=URL?>Main/createReserveringSend">

		<label for="datum">DATUM</label><br>
		<input type="date" name="datum"  required><br>

		<label for="start">START</label><br>
		<input type="time" name="start" required><br>

		<label for="einde">AANTAL UREN</label><br>
		<input type="numer" name="einde" maxlength="1" required><br>
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

		<input type="submit" name="submit" value="CREATE">
</form>
<br>
<a style="display: block; margin-top: 15px;" href="<?=URL?>Main/Overzicht/reserveringen">TERUG</a>