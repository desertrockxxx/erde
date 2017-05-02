<?php
$servername = "localhost";
$username = "markschuster";
$password = "";
$dbname = "erde";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO tabelle (sorte, liter) 
    VALUES (:sorte, :liter)");
    $stmt->bindParam(':sorte', $sorte_wk);
    $stmt->bindParam(':liter', $liter_wk);

    // insert a row
    $sorte_wk = $_GET['sorte_warenkorb'];
    $liter_wk = $_GET['menge_warenkorb'];
    
    $stmt->execute();

    echo "New records created successfully";
    
    $neuerstellt = true;
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;

if($neuerstellt){
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* Execute a prepared statement by binding PHP variables */
    $sorte = "Tomate";
    $liter = 2;
    $stmt = $conn->prepare('SELECT sorte, liter FROM tabelle
        WHERE sorte = :sorte AND liter = :liter');
    $stmt->bindParam(':sorte', $sorte, PDO::PARAM_STR, 12);
    $stmt->bindParam(':liter', $liter, PDO::PARAM_INT);
    $stmt->execute();
    $conn = null;
    
}


?>