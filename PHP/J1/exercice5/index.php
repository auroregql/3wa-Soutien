<?php

$age = 16;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Condition</title>
</head>
<body>
    <h1>Mineur ou majeur</h1>
        <div>
            <?php  if($age < 18) { ?>
        <?= "Mineur"; ?>
        
       <?php } else { ?>
        <?= "Majeur"; ?>
    <?php } ?>
        </div>   
    </body>
</html>