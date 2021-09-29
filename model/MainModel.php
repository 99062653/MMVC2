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

	function updateDier() {
		
		$id = 2;
		$naam = "niggaracer";
		$leeftijd = 69;
		$ras = "bitch";
		$soort = "cumwhore";

		$conn = openDatabaseConnection(); 
	    $stmt = $conn->prepare("UPDATE manegedieren SET naam = :naam, leeftijd = :leeftijd, ras = :ras, soort = :soort WHERE id = :id");
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":naam", $naam);
		$stmt->bindParam(":leeftijd", $leeftijd);
		$stmt->bindParam(":ras", $ras);
		$stmt->bindParam(":soort", $soort);
		$stmt->execute();
	}