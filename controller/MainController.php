<?php
require(ROOT . "model/MainModel.php");


function index()
{
	$connection = checkConnection();
    render('index', ['connection' => $connection]);
}

function dierenoverzicht($table)
{   
    $dieren = getAll($table);
    render('dieren/overzicht', $dieren);
}

function klantenoverzicht($table)
{   
    $klanten = getAll($table);
    render('klanten/overzicht', $klanten);
}

function updateDierPage($id) {

    $table = "manegedieren";
    $dier = getItem($id, $table);
    render('dieren/edit', $dier);
}

function updateKlantPage($id) {

    $table = "klanten";
    $klant = getItem($id, $table);
    render('klanten/edit', $klant);
}

function deleteDierPage($id) {

    $table = "manegedieren";
    $dier = getItem($id, $table);
    render('dieren/delete', $dier);
}

function deleteKlantPage($id) {

    $table = "klanten";
    $klant = getItem($id, $table);
    render('klanten/delete', $klant);
}

function createDierPage() {

    render('dieren/create');
}

function createKlantPage() {

    render('klanten/create');
}

function updateDierSend($id) {
    
    if ( isset( $_POST['submit'] ) ) {
        $naam = $_REQUEST['naam'];
        $leeftijd = $_REQUEST['leeftijd'];
        $ras = $_REQUEST['ras'];
        $soort = $_REQUEST['soort'];
        $img = $_REQUEST['img'];

        updateDier($id, $naam, $leeftijd, $ras, $soort, $img);
    } else {
        echo 'ERROR!';
    }

    $dieren = getAll('manegedieren');
    render('dieren/overzicht', $dieren);
}

function updateKlantSend($id) {
    
    if ( isset( $_POST['submit'] ) ) {
        $table = $_REQUEST['table'];
        $naam = $_REQUEST['naam'];
        $achternaam = $_REQUEST['achternaam'];
        $leeftijd = $_REQUEST['leeftijd'];
        $email = $_REQUEST['email'];
        $telefoon = $_REQUEST['telefoon'];

        updateKlant($id, $table, $naam, $achternaam, $leeftijd, $email, $telefoon);
    } else {
        echo 'ERROR!';
    }

    $klanten = getAll('klanten');
    render('klanten/overzicht', $klanten);
}

function deleteDierSend($id) {

    deleteDier($id);

    $dieren = getAll('manegedieren');
    render('dieren/overzicht', $dieren);
}

function deleteKlantSend($id) {

    deleteKlant($id);

    $klanten = getAll('klanten');
    render('klanten/overzicht', $klanten);
}

function createDierSend() {
    
    if ( isset( $_POST['submit'] ) ) {
        $naam = $_REQUEST['naam'];
        $leeftijd = $_REQUEST['leeftijd'];
        $ras = $_REQUEST['ras'];
        $soort = $_REQUEST['soort'];
        $img = $_REQUEST['img'];

        createDier($naam, $leeftijd, $ras, $soort, $img);
    } else {
        echo 'ERROR!';
    }

    $dieren = getAll('manegedieren');
    render('dieren/overzicht', $dieren);
}

function createKlantSend() {
    
    if ( isset( $_POST['submit'] ) ) {
        $naam = $_REQUEST['naam'];
        $achternaam = $_REQUEST['achternaam'];
        $leeftijd = $_REQUEST['leeftijd'];
        $email = $_REQUEST['email'];
        $telefoon = $_REQUEST['telefoon'];

        createKlant($naam, $achternaam, $leeftijd, $email, $telefoon);
    } else {
        echo 'ERROR!';
    }

    $klanten = getAll('klanten');
    render('klanten/overzicht', $klanten);
}