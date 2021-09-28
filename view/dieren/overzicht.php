<?php 
	require(ROOT . "model/MainModel.php");
	if($data['connection']){
		echo '<h1>DIERENOVERZICHT</h1>';
	}else{
		echo '<h1>DB CONNECTION FAILED!</h1>';
	}