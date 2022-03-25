<?php
    // classe mére
    class Vehicule {
        // propriété publique
        public $marque;
        public $vitesse;
        
        // fonction publique
        public function accelerer() {
            echo $this->marque. " accélère...\n";
        }
        
        // fonction publique
        public function freiner() {
            echo $this->marque. " a freiné...\n";
        }
    }
    
    // classe fille
    class Voiture extends Vehicule {
        // Pas de code
    }
    
    // classe fille
    class Camion extends Vehicule {
        // Pas de code
    }
?>