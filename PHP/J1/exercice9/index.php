<?php

$courses = [
    "Pommes" => 3,
    "Lait" => 1,
    "Pain" => 2
];

function afficherCourses($courses) {
    echo "<ul>";
    foreach ($courses as $article => $quantite) {
        echo "<li>$article : $quantite</li>";
    }
    echo "</ul>";
}

function ajouterCourse(&$courses, $article, $quantite) {

    if (isset($courses[$article])) {
        $courses[$article] += $quantite;
    } else {
        $courses[$article] = $quantite;
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste de courses</title>
</head>
<body>

<h1>Liste de courses</h1>

<h2>Liste initiale :</h2>
<?php afficherCourses($courses); ?>

<?php ajouterCourse($courses, "Banane", 4); ?>

<h2>Liste mise à jour :</h2>
<?php afficherCourses($courses); ?>

</body>
</html>
