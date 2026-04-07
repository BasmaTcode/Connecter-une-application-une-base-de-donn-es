<?php
include 'database.php';
include 'Article.php';

$db = (new database())->getConnection();
$article = new Article($db);


if (isset($_GET['id'])) {
 

    $article->id = htmlspecialchars(strip_tags($_GET['id']));

    
    if ($article->delete()) {
        echo "Article supprimé";
    } else {
        echo "Erreur suppression";
    }
}
?>  