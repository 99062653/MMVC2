<?php
require(ROOT . "model/MainModel.php");


function index()
{
	$connection = checkConnection();
    render('main/index', ['connection' => $connection]);
}

function dierenoverzicht()
{
	$connection = checkConnection();
    render('pages/dierenoverzicht', ['connection' => $connection]);
}