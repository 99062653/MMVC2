<h1>CREATE PAARD/PONY</h1>

<form name="diereneditor" method="post" action="<?=URL?>Main/createDierSend">

		<label for="naam">NAAM</label><br>
		<input type="text" name="naam" placeholder="NAAM"  required><br>

		<label for="leeftijd">LEEFTIJD</label><br>
		<input type="number" name="leeftijd" placeholder="LEEFTIJD"  required><br>

		<label for="ras">RAS</label><br>
		<input type="text" name="ras" placeholder="RAS" required><br>

		<label for="soort">SOORT</label><br>
		<select name="soort" required>
			<option value="paard">PAARD</option>
			<option value="pony">PONY</option>
		</select> <br>

		<label for="schofthoogte">SCHOFTHOOGTE</label><br>
		<select name="schofthoogte">
			<option value="JA">JA</option>
			<option value="NEE">NEE</option>
		</select> <br>

		<label for="img">IMG</label><br>
		<input type="text" name="img" placeholder="IMAGE LINK"><br>

		<input type="submit" name="submit" value="CREATE">
</form>
<br>
<a style="display: block; margin-top: 15px;" href="<?=URL?>Main/Overzicht/manegedieren">TERUG</a>