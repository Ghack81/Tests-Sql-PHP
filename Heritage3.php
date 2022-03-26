<?php
    // classe mére
    class Vehicule {
        // propriété protégé
        protected $marque;
        
        // fonction publique
        public function accelerer() {
            echo $this->marque. " accélère...\n";
        }
        
        // fonction publique
        public function freiner() {
            echo $this->marque. " a freiné...\n";
        }
    
        // fonction publique pour modifier la propriété marque
        public function setMarque($marque)
        {
            $this->marque = $marque;
        }
    }
    
    // classe fille
    class Voiture extends Vehicule {
  // méthode de la classe fille  
        public function conduire() {
            echo "Marque : " . $this->marque . "\n";
            echo "Bonne conduite...\n";
        }
    
    }
    $voiture = new Voiture();// Erreur sur l'objet !

    $voiture->setMarque("Audi");
    // appeler la méthode de la classe voiture
    $voiture->conduire();
  
    // appeler les méthodes de la classe véhicule
    $voiture->accelerer();
    $voiture->freiner();
?>