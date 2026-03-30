<?php
require 'database.php';
require 'article.php';

$database = new database(); // hna kancreyew objet dial database
$db = $database->getConnection(); // hna kanst3mlo methode getConnection bash njibou connexion dial database u n7toha f variable $db

$article = new article($db); // hna kancreyew objet dial article u kan3tiwh connexion dial database bash y9der ykhdm b database

if ($_POST) { // hna kancheckiw ila kayn chi data jaya mn formulaire bash n3rfou ila kayn chi submit wla la
    $article->title = $_POST['title']; // hna kan3tiw title dial article lvalue jaya mn formulaire
    $article->content = $_POST['content'];

    if ($article->create()) { // hna kanshufu ida kan tcrea article kitlaena article ajoute sinon kitlae erreur
        echo "Article ajouté !";
    } else {
        echo "Erreur";
    }
}
?>

<form method="POST">
    <input type="text" name="title" placeholder="Title"><br>
    <textarea name="content"></textarea><br>
    <button type="submit">Ajouter</button>
</form>