<?php

$article = "J'ai un chat qui s'appelle Mini, c'est un européen tabby marbré. Et j'ai un hamster qui s'appelle Tofu et c'est un syrien crème.";

$nbCaracteres = strlen($article);

$nbWords = str_word_count($article);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de mots</title>
</head>
<body>
    <h1>Mon article</h1>
        <article>
            <?= $article ?><br>
            <?= "Cet article contient $nbCaracteres caractères et $nbWords mots" ?>
        </article>
    </body>
</html>
