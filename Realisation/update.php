<?php
include 'database.php';
include 'article.php';

$db = (new database())->getConnection();
$article = new article($db);

if (isset($_GET['id'])) {
    $article->id = htmlspecialchars(strip_tags($_GET['id']));
}


if ($_POST) {
    $article->title = htmlspecialchars(strip_tags($_POST['title']));
    $article->content = htmlspecialchars(strip_tags($_POST['content']));

    if ($article->update()) {
        echo "Article modifié";
    } else {
        echo "Erreur";
    }
}
?>  