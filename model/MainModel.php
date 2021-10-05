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
	    $stmt = $conn->prepare("SELECT * FROM $table");
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

	function getItem($id, $table){
		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("SELECT * FROM $table WHERE id = :id");
		$stmt->bindParam(":id", $id);
		$stmt->execute();
		$result = $stmt->fetch();

		return $result;
	}

	function deleteItem($table, $id) {
		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("DELETE FROM $table WHERE id= :id");
		$stmt->bindParam(":id", $id);
		$stmt->execute();
	}

	function updateDier($id, $naam, $leeftijd, $ras, $soort, $img) {
		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("UPDATE manegedieren SET naam = :naam, leeftijd = :leeftijd, ras = :ras, soort = :soort, img = :img WHERE id = :id");
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":naam", $naam);
		$stmt->bindParam(":leeftijd", $leeftijd);
		$stmt->bindParam(":ras", $ras);
		$stmt->bindParam(":soort", $soort);
		$stmt->bindParam(":img", $img);
		$stmt->execute();
	}

	function updateKlant($id, $table, $naam, $achternaam, $leeftijd, $email, $telefoon) {
		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("UPDATE klanten SET naam = :naam, achternaam = :achternaam, leeftijd = :leeftijd, email = :email, telefoon = :telefoon WHERE id = :id");
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":naam", $naam);
		$stmt->bindParam(":achternaam", $achternaam);
		$stmt->bindParam(":leeftijd", $leeftijd);
		$stmt->bindParam(":email", $email);
		$stmt->bindParam(":telefoon", $telefoon);
		$stmt->execute();
	}

	function createDier($naam, $leeftijd, $ras, $soort, $img) {
		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("INSERT INTO manegedieren SET naam = :naam, leeftijd = :leeftijd, ras = :ras, soort = :soort, img = :img");
		$stmt->bindParam(":naam", $naam);
		$stmt->bindParam(":leeftijd", $leeftijd);
		$stmt->bindParam(":ras", $ras);
		$stmt->bindParam(":soort", $soort);
		$stmt->bindParam(":img", $img);
		$stmt->execute();
	}

	function createKlant($naam, $achternaam, $leeftijd, $email, $telefoon) {
		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("INSERT INTO klanten SET naam = :naam, achternaam = :achternaam, leeftijd = :leeftijd, email = :email, telefoon = :telefoon");
		$stmt->bindParam(":naam", $naam);
		$stmt->bindParam(":achternaam", $achternaam);
		$stmt->bindParam(":leeftijd", $leeftijd);
		$stmt->bindParam(":email", $email);
		$stmt->bindParam(":telefoon", $telefoon);
		$stmt->execute();
	}