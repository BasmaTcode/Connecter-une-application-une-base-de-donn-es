<?php
include 'database.php';
include 'article.php';

$db = (new database())->getConnection();
$article = new article($db);

$stmt = $article->read();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['title'] . "<br>";
    echo $row['content'] . "<br>";

    echo "<a href='delete.php?id=" . $row['id'] . "'> Delete </a><br>";
}
?>