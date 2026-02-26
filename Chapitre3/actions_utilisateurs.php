<?php
require 'connexion.php';

try { 
    $stmt = $pdo->prepare("INSERT INTO Utilisateur (nom, email) VALUES (:nom, :email)"); // hna bhal kanqolo wjdli had tableau  , u aneatik values mn baed
    $stmt->execute([ // kaneatiw values f array
        'nom' => 'Safa',
        'email' => 'ehsafaa7@gmail.com'
    ]);
    echo "Utilisateur ajouté avec succès.";
} catch (PDOException $e) { // ida wqae ghalat f try , catch kietina exception w yhuta f variable $e
    echo "Erreur : " . $e->getMessage();
}
$stmt = $pdo->prepare("UPDATE Utilisateur SET email = :email WHERE id = :id"); // hna bhal kanqolo update had tableau w 3tina condition bash n3rfou achno nbdlou
$stmt->execute([ // kaneatiw values f array
    'email' => 'ehsafaa5@gmail.com',
    'id' => 3
]);
echo "Utilisateur mis à jour.";
$stmt = $pdo->prepare("DELETE FROM Utilisateur WHERE id = :id"); // hna  kanqolo delete had tableau w 3tina condition bash n3rfu achnu nhaydu
$stmt->execute(['id' => 3]);
echo "Utilisateur supprimé.";
echo $stmt->rowCount() . " ligne(s) affectée(s)."; // Hna kanshufu uash dik operation t executat
