<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=blogdb', 'root', ''); // Hna anbdaw connexion b base de données

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ida wqae ghalat emlna exception bash nqdro nthakmo feh

    echo "Connexion réussie"; // ida kant connexion najha kitlaena had msg

} catch (PDOException $e) { // ida wqae ghalat f try , catch kietina exception w yhuta f variable $e

    echo "Erreur de connexion : " . $e->getMessage(); // hna kijiblna l message dl ghalat
}
try {
    $pdo->query("SELECT * FROM table_inexistante"); // hna kanhawlu njibu infos mn uahd tableau makaynashi
} catch (PDOException $e) {
    echo "Erreur SQL : " . $e->getMessage(); // ida kan khata2 ayban message dial erreur
}

catch (PDOException $e) {
    file_put_contents('erreurs.log', $e->getMessage(), FILE_APPEND); // hna kanhutu message dl erreur f file ismu "erreurs.log" , bash maybanush les details l users
    echo "Une erreur est survenue. Contactez l'administrateur.";
}
