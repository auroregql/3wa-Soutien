<?php

$nombre = 4;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Boucle for</title>
</head>
<body>
    <h1>Multiplication</h1>
        <div>
            <?php for($i = 0; $i <= 10; $i++) { ?>
            <?= "$nombre x $i = " . ($nombre * $i) ?><br>
        <?php } ?>
        </div>   
    </body>
</html>