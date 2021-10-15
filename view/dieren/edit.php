<h1>EDIT PAARD/PONY</h1>

<form name="diereneditor" method="post" action="<?=URL?>Main/updateDierSend/<?=$data['id']?>">

		<label for="naam">NAAM</label><br>
		<input type="text" name="naam" value="<?=$data["diernaam"];?>"  required><br>

		<label for="leeftijd">LEEFTIJD</label><br>
		<input type="number" name="leeftijd" value="<?=$data["leeftijd"];?>" required><br>

		<label for="ras">RAS</label><br>
		<input type="text" name="ras" value="<?=$data["ras"];?>" required><br>

		<label for="soort">SOORT</label><br>
		<select name="soort">
			<?php if($data["soort"] == 'paard') { ?>
				<option value="paard">PAARD</option>
			<?php }else { ?>
				<option value="pony">PONY</option>
				<?php } ?>
		</select> <br>

		<label for="schofthoogte">SCHOFTHOOGTE</label><br>
		<select name="schofthoogte">
		<?php if($data["schofthoogte"] == 1) { ?>
				<option value="TRUE">JA</option>
			<?php }else { ?>
				<option value="FALSE">NEE</option>
				<?php } ?>
		</select> <br>

		<label for="img">IMG</label><br>
		<input type="text" name="img" value="<?=$data["img"];?>"><br>

		<input type="submit" name="submit" value="UPDATE">
</form>
<br>
<a style="display: block; margin-top: 15px;" href="<?=URL?>Main/Overzicht/manegedieren">TERUG</a>