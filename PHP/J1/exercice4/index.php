<?php

$a = 16;

$b = 8;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Addition et soustraction</title>
</head>
<body>
    <h1>Calculs</h1>
        <article>
            <h2>Addition</h2>
            
            <?php function addition ($a, $b) {
                 return $a + $b;
            } ?>
            
            <?= addition($a, $b) ?> <br>
        </article>   
        <article>
            <h2>Soustraction</h2>
            <?php function soustraction ($a, $b) {
                return $a - $b;
            } ?>
            
            <?= soustraction($a, $b) ?><br>
        </article>
    </body>
</html>