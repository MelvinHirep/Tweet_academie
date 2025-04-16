<?php

$user = "melvin06";
$password = "Termi1515*";

try {
    $db = new PDO("mysql:host=localhost;dbname=twitter", $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);    
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>

