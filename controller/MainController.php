<?php
require(ROOT . "model/MainModel.php");


function index()
{
	$connection = checkConnection();
    render('index', ['connection' => $connection]);
}

function dierenoverzicht()
{   
    $dieren = getDieren();
    render('dieren/overzicht', $dieren);
}

function editDier($id) {

    $dier = getDier($id);
    render('dieren/edit', $dier);
}

function updateDierSend($id) {

    $data = getDier($id);
    updateDier($data);
    render('dieren/edit');
}