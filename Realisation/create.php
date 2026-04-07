<?php
include 'database.php';
include 'article.php';

$db = (new database())->getConnection();
$article = new article($db);

if ($_POST) {
    $article->title = $_POST['title'];
    $article->content = $_POST['content'];

    if ($article->create()) {
        header("Location: index.php");
        exit();
    }
}               
?>

<form method="POST">
    <input type="text" name="title">
    <textarea name="content"></textarea>
    <button type="submit">Ajouter</button>
</form>