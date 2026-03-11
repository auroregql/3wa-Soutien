<?php
abstract class Forme {
    abstract public function calculerAire(): float;
}

class Cercle extends Forme {
    public float $rayon;

    public function __construct(float $rayon) {
        $this->rayon = $rayon;
    }

    public function calculerAire(): float {
        return pi() * pow($this->rayon, 2);
    }
}

class Triangle extends Forme {
    public float $base;
    public float $hauteur;

    public function __construct(float $base, float $hauteur) {
        $this->base = $base;
        $this->hauteur = $hauteur;
    }

    public function calculerAire(): float {
        return ($this->base * $this->hauteur) / 2;
    }
}

$monCercle = new Cercle(5);
echo "Aire du cercle : " . round($monCercle->calculerAire(), 2) . " cm²<br>";

$monTriangle = new Triangle(10, 5);
echo "Aire du triangle : " . $monTriangle->calculerAire() . " cm²";

?>