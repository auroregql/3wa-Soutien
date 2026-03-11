<?php
class Animal {
    public string $nom;

    public function __construct(string $nom) {
        $this->nom = $nom;
    }

    public function emettreSon() {
        echo "Un son générique d'animal<br>";
    }
}
class Chien extends Animal {
    public function emettreSon() {
        echo "Woof !<br>";
    }
}

class Chat extends Animal {
    public function emettreSon() {
        echo "Miaou !<br>";
    }
}

$monChien = new Chien("Jazzy");
echo $monChien->nom . " dit : ";
$monChien->emettreSon();

$monChat = new Chat("Mini");
echo $monChat->nom . " dit : ";
$monChat->emettreSon();
?>