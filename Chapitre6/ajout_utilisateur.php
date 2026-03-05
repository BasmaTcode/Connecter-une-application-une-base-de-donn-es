<?php
require 'connexion.php';

$nom = htmlspecialchars(trim($_POST['nom'])); // variable feh les donees li majin mn form + trim nhaydu les espaces + html... kirjae aye code html l text eadi
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL); // variable feh les donees li majin mn form + filter_var bash nshufu email uash valide

if (!$email) {
    die("Email invalide !"); // ida kan email mashi sehih kiwqaf script kaml
}
$stmt = $pdo->prepare("INSERT INTO Utilisateur (nom, email) VALUES (:nom, :email)"); // hna knwjdu l requete
$stmt->execute([
    'nom' => $nom,
    'email' => $email
]);
echo "Utilisateur ajouté avec succès.";
try {
} catch (PDOException $e) {
    file_put_contents('logs/errors.log', $e->getMessage(), FILE_APPEND); // hna kanhutu message dl erreur f file ismu "errors.log" , bash maybanush les details l users
    echo "Une erreur est survenue. Contactez l’administrateur."; // ida wqae ghalat kayban had message l user
}
