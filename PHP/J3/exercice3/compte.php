<?php

class CompteBancaire {
    private float $solde;

   public function __construct(float $soldeInitial) {
        $this->solde = $soldeInitial;
    }

    public function deposer(float $montant) {
        if ($montant > 0) {
            $this->solde += $montant;
            echo "Dépôt de $montant € effectué.<br>";
        }
    }
    
    public function retirer(float $montant) {
        if ($montant <= $this->solde) {
            $this->solde -= $montant;
            echo "Retrait de $montant € effectué.<br>";
        } else {
            echo "Erreur : Solde insuffisant pour retirer $montant € !<br>";
        }
    }
    
    public function afficherSolde() {
        echo "Solde actuel : " . $this->solde . " €<br>";
    }
}

$monCompte = new CompteBancaire(100.0);

$monCompte->afficherSolde();
$monCompte->deposer(20);
$monCompte->retirer(40);
$monCompte->retirer(10);
$monCompte->afficherSolde();

?>