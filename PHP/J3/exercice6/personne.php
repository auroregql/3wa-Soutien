<?php

class Personne {
    public string $nom;
    public int $age;

    public function __construct(string $nom, int $age) {
        $this->nom = $nom;
        $this->age = $age;
    }

    public function afficherInformations() {
        echo "Nom : " . $this->nom . ", Âge : " . $this->age . " ans";
    }
}

class Employe extends Personne {
    public float $salaire;

    public function __construct(string $nom, int $age, float $salaire) {
        parent::__construct($nom, $age);
        $this->salaire = $salaire;
    }

    public function afficherInformations() {
        parent::afficherInformations();
        echo ", Salaire : " . $this->salaire . " €<br>";
    }
}

$employe = new Employe("Aurore", 24, 2000);
$employe->afficherInformations();

?>