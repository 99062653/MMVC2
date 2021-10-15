<h1>CREATE KLANT</h1>

<form name="diereneditor" method="post" action="<?=URL?>Main/createKlantSend">

		<label for="naam">NAAM</label><br>
		<input type="text" name="naam" placeholder="NAAM"  required><br>

		<label for="naam">ACHTERNAAM</label><br>
		<input type="text" name="achternaam" placeholder="ACHTERNAAM"  required><br>

		<label for="leeftijd">LEEFTIJD</label><br>
		<input type="number" name="leeftijd" placeholder="LEEFTIJD"  required><br>

		<label for="ras">EMAIL</label><br>
		<input type="text" name="email" placeholder="EMAIL" required><br>

		<label for="soort">TELEFOON</label><br>
		<input type="number" name="telefoon" placeholder="TELEFOON" required><br>

		<label for="soort">ADRES</label><br>
		<input type="text" name="adres" placeholder="ADRES" required><br><br>

		<input type="submit" name="submit" value="CREATE">
</form>
<br>
<a style="display: block; margin-top: 15px;" href="<?=URL?>Main/Overzicht/klanten">TERUG</a>