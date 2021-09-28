<?php
require(ROOT . "model/MainModel.php");


function index()
{
	$connection = checkConnection();
    render('index', ['connection' => $connection]);
}

function dierenoverzicht()
{
    $dieren = 
    render('dieren/overzicht', $dieren);
}
