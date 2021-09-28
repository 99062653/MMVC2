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
	}