<?php 
	if($data['connection']){
		echo '<h1>WELKOM OP DE MANEGE!</h1>';
		echo '<a href="<?=URL?>Main/dierenoverzicht">DIEREN</a>';
	}else{
		echo '<h1>DB CONNECTION FAILED!</h1>';
	}