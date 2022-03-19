<?php
// Fonction PDO pour connexion
// Préparation de la requète sql
// Exécution de/des fonctions
// Fermeture connexion
require("connect.php");
// pour oracle: $dsn="oci:dbname=//serveur:1521/base
// pour sqlite: $dsn="sqlite:/tmp/base.sqlite"
$dsn="mysql:dbname=".BASE.";host=".SERVER;
    try{
      $connexion=new PDO($dsn,USER,PASSWD);
    }
    catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      exit();
    }
$sql="SELECT * from CARNET";
if(!$connexion->query($sql)) echo "Pb d'accès au CARNET";
else{
     foreach ($connexion->query($sql) as $row)
     echo $row['NOM']."né(e) le ".
          $row['Téléphone']."<br/>\n".
          $row['Email']."<br/>\n";
}
?>
?>