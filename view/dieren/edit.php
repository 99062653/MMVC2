<h1>EDIT PAARD/PONY</h1>

<form name="diereneditor" method="post" action="<?=URL?>Main/updateDierSend/<?=$id;?>">
		<input type="hidden" name="id" value="<?=$id;?>">

		<label for="naam">NAAM</label><br>
		<input type="text" name="naam" value="<?=$data["naam"];?>"  required><br>

		<label for="leeftijd">LEEFTIJD</label><br>
		<input type="number" name="leeftijd" value="<?=$data["leeftijd"];?>" required><br>

		<label for="ras">RAS</label><br>
		<input type="text" name="ras" value="<?=$data["ras"];?>" required><br>

		<label for="soort">SOORT</label><br>
		<input type="text" name="soort" value="<?=$data["soort"];?>" required><br>

		<input type="submit" value="UPDATE">
</form>

<a style="display: block; margin-top: 15px;" href="<?=URL?>Main/dierenoverzicht">TERUG</a>