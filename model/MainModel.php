<?php
	function checkConnection(){
	    try{ 
    		$conn = openDatabaseConnection(); 
	       	$stmt = $conn->prepare("SHOW TABLES");
       		$stmt->execute();
       		$stmt->fetchAll();
       		
	    }catch(Exception $e){
			return false;
	    }

	    return true;
	}

	function getAll($table){
		$conn = openDatabaseConnection(); 
		if($table == 'reserveringen') {
			$stmt = $conn->prepare("SELECT * FROM $table WHERE deleted = 0 ORDER BY datum");
		}else {
			$stmt = $conn->prepare("SELECT * FROM $table WHERE deleted = 0");
		}
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

	function getItem($id, $table){
		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("SELECT * FROM $table WHERE id = :id AND deleted = 0");
		$stmt->bindParam(":id", $id);
		$stmt->execute();
		$result = $stmt->fetch();

		return $result;
	}

	function deleteItem($table, $id) {
		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("UPDATE $table SET deleted = 1 WHERE id= :id");
		$stmt->bindParam(":id", $id);
		$stmt->execute();
	}

	function updateDier($id, $naam, $leeftijd, $ras, $soort, $schofthoogte, $img) {
		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("UPDATE manegedieren SET diernaam = :naam, leeftijd = :leeftijd, ras = :ras, soort = :soort, schofthoogte = :schofthoogte, img = :img WHERE id = :id");
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":naam", $naam);
		$stmt->bindParam(":leeftijd", $leeftijd);
		$stmt->bindParam(":ras", $ras);
		$stmt->bindParam(":soort", $soort);
		$stmt->bindParam(":schofthoogte", $schofthoogte);
		$stmt->bindParam(":img", $img);
		$stmt->execute();
	}

	function updateKlant($id, $table, $naam, $achternaam, $leeftijd, $email, $telefoon, $adres) {
		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("UPDATE klanten SET klantnaam = :naam, achternaam = :achternaam, leeftijd = :leeftijd, email = :email, telefoon = :telefoon, adres = :adres WHERE id = :id");
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":naam", $naam);
		$stmt->bindParam(":achternaam", $achternaam);
		$stmt->bindParam(":leeftijd", $leeftijd);
		$stmt->bindParam(":email", $email);
		$stmt->bindParam(":telefoon", $telefoon);
		$stmt->bindParam(":adres", $adres);
		$stmt->execute();
	}

	function updateReservering($id, $datum, $start, $eind, $paard, $klant) {
		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("UPDATE reserveringen SET datum = :datum, starttijd = :start, uren = :eind, paard = :paard, klant = :klant WHERE id = :id");
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":datum", $datum);
		$stmt->bindParam(":start", $start);
		$stmt->bindParam(":eind", $eind);
		$stmt->bindParam(":paard", $paard);
		$stmt->bindParam(":klant", $klant);
		$stmt->execute();
	}

	function createDier($naam, $leeftijd, $ras, $soort, $schofthoogte, $img) {
		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("INSERT INTO manegedieren SET diernaam = :naam, leeftijd = :leeftijd, ras = :ras, soort = :soort, schofthoogte = :schofthoogte, img = :img");
		$stmt->bindParam(":naam", $naam);
		$stmt->bindParam(":leeftijd", $leeftijd);
		$stmt->bindParam(":ras", $ras);
		$stmt->bindParam(":soort", $soort);
		$stmt->bindParam(":schofthoogte", $schofthoogte);
		$stmt->bindParam(":img", $img);
		$stmt->execute();
	}

	function createKlant($naam, $achternaam, $leeftijd, $email, $telefoon, $adres) {
		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("INSERT INTO klanten SET klantnaam = :naam, achternaam = :achternaam, leeftijd = :leeftijd, email = :email, telefoon = :telefoon, adres = :adres");
		$stmt->bindParam(":naam", $naam);
		$stmt->bindParam(":achternaam", $achternaam);
		$stmt->bindParam(":leeftijd", $leeftijd);
		$stmt->bindParam(":email", $email);
		$stmt->bindParam(":telefoon", $telefoon);
		$stmt->bindParam(":adres", $adres);
		$stmt->execute();
	}

	function createReservering($datum, $start, $eind, $paard, $klant) {
		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("INSERT INTO reserveringen SET datum = :datum, starttijd = :start, uren = :eind, paard = :paard, klant = :klant");
		$stmt->bindParam(":datum", $datum);
		$stmt->bindParam(":start", $start);
		$stmt->bindParam(":eind", $eind);
		$stmt->bindParam(":paard", $paard);
		$stmt->bindParam(":klant", $klant);
		$stmt->execute();
	}