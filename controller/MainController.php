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

function updateDierPage($id) {

    $dier = getDier($id);
    render('dieren/edit', $dier);
}

function deleteDierPage($id) {

    $dier = getDier($id);
    render('dieren/delete', $dier);
}

function createDierPage() {

    render('dieren/create');
}

function updateDierSend($id) {
    
    if ( isset( $_POST['submit'] ) ) {
        $naam = $_REQUEST['naam'];
        $leeftijd = $_REQUEST['leeftijd'];
        $ras = $_REQUEST['ras'];
        $soort = $_REQUEST['soort'];

        updateDier($id, $naam, $leeftijd, $ras, $soort);
    } else {
        echo 'ERROR!';
    }

    $dieren = getDieren();
    render('dieren/overzicht', $dieren);
}

function deleteDierSend($id) {

    deleteDier($id);

    $dieren = getDieren();
    render('dieren/overzicht', $dieren);
}

function createDierSend() {
    
    if ( isset( $_POST['submit'] ) ) {
        $naam = $_REQUEST['naam'];
        $leeftijd = $_REQUEST['leeftijd'];
        $ras = $_REQUEST['ras'];
        $soort = $_REQUEST['soort'];

        createDier( $naam, $leeftijd, $ras, $soort);
    } else {
        echo 'ERROR!';
    }

    $dieren = getDieren();
    render('dieren/overzicht', $dieren);
}