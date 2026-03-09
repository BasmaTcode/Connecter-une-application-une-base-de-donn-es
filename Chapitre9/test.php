<?php
require 'ArticleEncapsule.php';

$article = new Article();

$article->setTitre("POO en PHP");

$article->setContenu("Introduction à la programmation orientée objet.");

echo $article->afficher();