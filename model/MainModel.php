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

	function getDieren(){
		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("SELECT * FROM manegedieren ORDER BY id ASC");
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

	function getDier($id){
		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("SELECT * FROM manegedieren WHERE id = :id");
		$stmt->bindParam(":id", $id);
		$stmt->execute();
		$result = $stmt->fetch();

		return $result;
	}

	function updateDier($id, $naam, $leeftijd, $ras, $soort) {
		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("UPDATE manegedieren SET naam = :naam, leeftijd = :leeftijd, ras = :ras, soort = :soort WHERE id = :id");
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":naam", $naam);
		$stmt->bindParam(":leeftijd", $leeftijd);
		$stmt->bindParam(":ras", $ras);
		$stmt->bindParam(":soort", $soort);
		$stmt->execute();
	}

	function deleteDier($id) {
		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("DELETE FROM manegedieren WHERE id= :id");
		$stmt->bindParam(":id", $id);
		$stmt->execute();
	}

	function createDier($naam, $leeftijd, $ras, $soort) {
		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("INSERT INTO manegedieren SET naam = :naam, leeftijd = :leeftijd, ras = :ras, soort = :soort");
		$stmt->bindParam(":naam", $naam);
		$stmt->bindParam(":leeftijd", $leeftijd);
		$stmt->bindParam(":ras", $ras);
		$stmt->bindParam(":soort", $soort);
		$stmt->execute();
	}