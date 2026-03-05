<?php

try {

    $host = "localhost";
    $dbname = "solidb";
    $username = "root";
    $password = "";

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    file_put_contents('logs/errors.log', $e->getMessage(), FILE_APPEND);

    die("Erreur de connexion à la base de données.");
}