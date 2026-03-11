<?php

$panier = ["Pomme", "Banane", "Orange"];

$panier [] = "Kiwi";
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Panier d'achat simplifié</title>
</head>
<body>
    <h1>Mon panier</h1>
        <ul>
            <?php foreach ($panier as $produit) {
            echo "<li>$produit</li>";
            } ?><br>
            
        </ul>
    </body>
</html>