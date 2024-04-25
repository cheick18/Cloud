<?php

$host = 'wague-serveur.mysql.database.azure.com';
$username = 'cheickne';
$password = 'Cafenoir12';
$database = 'gestion';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Assurez-vous d'utiliser le bon objet de connexion ($conn)


?>

