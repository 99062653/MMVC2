<h1>EDIT KLANT</h1>

<form name="diereneditor" method="post" action="<?=URL?>Main/updateKlantSend/<?=$data['id']?>">

		<input hidden type="text" name="table" value="klanten"  required><br>

		<label for="naam">NAAM</label><br>
		<input type="text" name="naam" value="<?=$data["naam"];?>"  required><br>

		<label for="naam">ACHTERNAAM</label><br>
		<input type="text" name="achternaam" value="<?=$data["achternaam"];?>"  required><br>

		<label for="leeftijd">LEEFTIJD</label><br>
		<input type="number" name="leeftijd" value="<?=$data["leeftijd"];?>" required><br>

		<label for="ras">EMAIL</label><br>
		<input type="text" name="email" value="<?=$data["email"];?>" required><br>

		<label for="soort">TELEFOON</label><br>
		<input type="text" name="telefoon" value="<?=$data["telefoon"];?>" required><br>

		<input type="submit" name="submit" value="UPDATE">
</form>

<a style="display: block; margin-top: 15px;" href="<?=URL?>Main/Overzicht/klanten">TERUG</a>