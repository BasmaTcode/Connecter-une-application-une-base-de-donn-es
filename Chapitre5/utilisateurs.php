<?php
require 'connexion.php';

$stmt = $pdo->prepare("INSERT INTO Utilisateur (nom, email) VALUES (:nom, :email)");
$stmt->execute([
    'nom' => 'Basma',
    'email' => 'basma22trid@gmail.com'
]);
echo "Utilisateur ajouté.";

$nom = 'Wissal';
$email = 'wissal55@gmail.com';
$stmt = $pdo->prepare("INSERT INTO Utilisateur (nom, email) VALUES (:nom, :email)");
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':email', $email);
$stmt->execute();

$stmt = $pdo->prepare("SELECT * FROM Utilisateur WHERE email = :email");
$stmt->execute(['email' => 'wissal@gmail.com']);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
echo "Nom : " . $user['nom'];

$stmt = $pdo->prepare("SELECT * FROM Utilisateur WHERE id = ?");
$stmt->execute([1]);
