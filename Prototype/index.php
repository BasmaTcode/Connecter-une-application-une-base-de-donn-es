<?php
require 'database.php';
require 'article.php';

$database = new database();
$db = $database->getConnection();

$article = new article($db);

$stmt = $article->read();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['title'] . "<br>";
    echo $row['content'] . "<hr>";
}
?>
<link rel="stylesheet" href="prototype.css">
