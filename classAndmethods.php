<?php
class Voiture {
     // Attributs
     private $vitesse;
     private $model;
     // Constructeur de la classe
     function __construct($model) {
          $this->model = $model;
     }
     // Methods
     public function accelerer() {
          // ajoute 10 miles par heure à la vitesse actuelle
          $vitesse = $vitesse + 10;
     }
  
     public function freiner() {
          // déduire 10 miles par heure à la vitesse actuelle    
          $vitesse = $vitesse - 10;
     }
}
?>