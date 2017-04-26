<?php
// Fehlerausgabe
$fehler= "";
$dimensionError = "Bitte alle Felder ausfüllen!";
$mengeError = "Bitte Menge angeben!";

// Auswahl Variablen
$auswahl_dimension = $_GET['auswahl_dimension'];
$auswahl_menge = $_GET['auswahl_menge'];

// Mengevariablen
$amount1 = $_GET['amount1'];
$amount2 = $_GET['amount2'];
$amount3 = $_GET['amount3'];
$sorte = $_GET['sorte'];
$menge = $_GET['menge'];

if(isset($auswahl_dimension)){
    require_once("dimension.php");
}
if(isset($auswahl_menge)){
    require_once("menge.php");
}


?>

