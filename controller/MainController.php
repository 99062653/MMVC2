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
            $dier = getItem($id, $table);
            render('dieren/edit', $dier);
        }elseif ($table == "klanten") {
            $klant = getItem($id, $table);
            render('klanten/edit', $klant);
        }else {
            $reservering = getItem($id, "reserveringen");
            $dier = getAll("manegedieren");
            $klant = getAll("klanten");
            render('reserveringen/edit', ['reserveringen' => $reservering, 'manegedieren' => $dier, 'klanten' => $klant]);
            //render('reserveringen/edit', $reservering);
        }
}

function deletePage($table, $id) {

    if ($table == "manegedieren") {
            $dier = getItem($id, $table);
            render('dieren/delete', $dier);
        }elseif ($table == "klanten") {
            $klant = getItem($id, $table);
            render('klanten/delete', $klant);
        }else {
            $table = "reserveringen";
            $reservering = getItem($id, $table);
            render('reserveringen/delete', $reservering);
        }
}

function createPage($table) {

    if ($table == "manegedieren") {
	    render('dieren/create');
    }elseif ($table == "klanten") {
        render('klanten/create');
    }else {
        $dieren = getAll("manegedieren");
        $klanten = getAll("klanten");
        render('reserveringen/create', ['manegedieren' => $dieren, 'klanten' => $klanten]);
    }
}

function updateDierSend($id) {
    
    if ( isset( $_POST['submit'] ) ) {
        $naam = $_REQUEST['naam'];
        $leeftijd = $_REQUEST['leeftijd'];
        $ras = $_REQUEST['ras'];
        $soort = $_REQUEST['soort'];
        $schofthoogte = $_REQUEST['schofthoogte'];
        $img = $_REQUEST['img'];

        updateDier($id, $naam, $leeftijd, $ras, $soort, $schofthoogte, $img);
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
        $adres = $_REQUEST['adres'];

        updateKlant($id, $table, $naam, $achternaam, $leeftijd, $email, $telefoon, $adres);
    } else {
        echo 'ERROR!';
    }

    $klanten = getAll('klanten');
    render('klanten/overzicht', $klanten);
}

function updateReserveringSend($id) {
    
    if ( isset( $_POST['submit'] ) ) {
        //$table = $_REQUEST['table'];
        $datum = $_REQUEST['datum'];
        $start = $_REQUEST['start'];
        $eind = $_REQUEST['einde'];
        $paard = $_REQUEST['paard'];
        $klant = $_REQUEST['klant'];

        updateReservering($id, $datum, $start, $eind, $paard, $klant);
    } else {
        echo 'ERROR!';
    }

    $reserveringen = getAll('reserveringen');
    render('reserveringen/overzicht', $reserveringen);
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
        $schofthoogte = $_REQUEST['schofthoogte'];
        $img = $_REQUEST['img'];

        createDier($naam, $leeftijd, $ras, $soort, $schofthoogte, $img);
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
        $adres = $_REQUEST['adres'];

        createKlant($naam, $achternaam, $leeftijd, $email, $telefoon, $adres);
    } else {
        echo 'ERROR!';
    }

    $klanten = getAll('klanten');
    render('klanten/overzicht', $klanten);
}

function createReserveringSend() {
    
    if ( isset( $_POST['submit'] ) ) {
        $datum = $_REQUEST['datum'];
        $start = $_REQUEST['start'];
        $eind = $_REQUEST['einde'];
        $paard = $_REQUEST['paard'];
        $klant = $_REQUEST['klant'];

        createReservering($datum, $start, $eind, $paard, $klant);
    } else {
        echo 'ERROR!';
    }

    $reserveringen = getAll('reserveringen');
    render('reserveringen/overzicht', $reserveringen);
}