<?php

class Rectangle {
    public float $longueur;
    public float $largeur;

    public function __construct(float $longueur, float $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function calculerAire(): float {
        return $this->longueur * $this->largeur;
    }
}

$monRectangle = new Rectangle(10.5, 5.0);
$aire = $monRectangle->calculerAire();

echo "L'aire du rectangle est de : " . $aire . " cm²";

?>