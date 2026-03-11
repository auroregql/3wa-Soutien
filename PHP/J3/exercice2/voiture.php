<?php

class Voiture {
    public string $marque;
    public string $modele;
    public string $couleur;

    public function __construct(string $marque, string $modele, string $couleur) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->couleur = $couleur;
    }

    public function demarrer() {
        echo "La voiture " . " " . $this->marque. " " . $this->modele . " " . $this->couleur . " " . "démarre";
    }
}

$vehicule = new Voiture("Toyota", "RAV4", "blanche");
$vehicule->demarrer();

?>