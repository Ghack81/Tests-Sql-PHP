<?php
//crée une nouvelle voiture Renault
$renault = new Voiture("Renault");
//crée une nouvelle voiture Peugeot
$peugeot = new Voiture("Peugeot");
    
//appelle la méthode d'accélération sur Renault
$renault->accelerer();

//appelle la méthode d'accélération sur Peugeot
$peugeot->accelerer();

//maintenant freiner la voiture Renault
$renault->freiner();

?>