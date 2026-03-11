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

$individu = new Personne("Aurore", 24);
$individu->afficherInformations();

?>