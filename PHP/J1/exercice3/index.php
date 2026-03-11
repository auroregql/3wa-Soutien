<?php

$dictionnaire = ["Bonjour" => "Hello",
                 "Au revoir" => "Goodbye",
                 "Merci" => "Thank you",
];

$dictionnaire["S'il vous plait"] = "Please";

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau associatif</title>
</head>
<body>
    <h1>Mon Dico</h1>
        <ul>
            <?= $Bonjour = $dictionnaire["Bonjour"]; ?><br>
            <?php foreach ($dictionnaire as $traductions) {
                echo "<li>$traductions</li>";
            } ?><br>
        </ul>
    </body>
</html>