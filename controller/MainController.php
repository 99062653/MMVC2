<?php
require(ROOT . "model/MainModel.php");


function index()
{
	$connection = checkConnection();
    render('index', ['connection' => $connection]);
}
    
function Overzicht($table) {   

    if ($table == "manegedieren") {
	        $dieren = getAll($table);
            render('dieren/overzicht', $dieren);
        }elseif ($table == "klanten") {
            $klanten = getAll($table);
            render('klanten/overzicht', $klanten);
        }else {
            $reserveringen = getAll($table);
            render('reserveringen/overzicht', $reserveringen);
        }
}

function updatePage($table, $id) {

    if ($table == "manegedieren") {
	        $table = "manegedieren";
            $dier = getItem($id, $table);
            render('dieren/edit', $dier);
        }elseif ($table == "klanten") {
            $table = "klanten";
            $klant = getItem($id, $table);
            render('klanten/edit', $klant);
        }else {
            $table = "reserveringen";
            $reservering = getItem($id, $table);
            render('reserveringen/edit', $reservering);
        }
}

function deletePage($table, $id) {

    if ($table == "manegedieren") {
	        $table = "manegedieren";
            $dier = getItem($id, $table);
            render('dieren/delete', $dier);
        }elseif ($table == "klanten") {
            $table = "klanten";
            $klant = getItem($id, $table);
            render('klanten/delete', $klant);
        }else {
            $table = "reserveringen";
            $reservering = getItem($id, $table);
            render('reservering/delete', $reservering);
        }
}

function createPage($table) {

    if ($table == "manegedieren") {
	    render('dieren/create');
    }elseif ($table == "klanten") {
        render('klanten/create');
    }else {
        render('reserveringen/create');
    }
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

function deleteSend($table, $id) {

    deleteItem($table, $id);

    if($table == "manegedieren") {
        $dieren = getAll('manegedieren');
        render('dieren/overzicht', $dieren);
    } elseif ($table == "klanten") {
        $klanten = getAll('klanten');
        render('klanten/overzicht', $klanten);
	} else {
	  $reserveringen = getAll('reserveringen ');
        render('reserveringen /overzicht', $reserveringen);
    }
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