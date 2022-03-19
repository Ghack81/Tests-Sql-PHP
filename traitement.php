<!DOCTYPE html>
<html>
    <head>
        <title>Traitement des données récoltés</title>
        
    </head>
    <body>
        <?php
		//Step 1
   // Vérifier si le formulaire est soumis 
   if ( isset( $_POST['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
        $nom = $_POST['nom']; 
        $telephone = $_POST["telephone"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        $sexe = $_POST["sexe"];
        $comments = $_POST["comments"];
		//Step 2
     // afficher le résultat
     echo '<h3>Informations récupérées en utilisant POST</h3>'; 
     echo 'Nom : ' . $nom . ' Age : ' . $age . ' Adresse : ' . $adresse . ' Téléphone' . $telephone . ' Email' . $email . ' sexe ' . $sexe . ' comments '. $comments ; 
     exit;
	 //Step 3
	 //Insertion des données dans une BDD et afficher
  }
  // Ajouter la partie pour les fonctions SQL
?>
    </body>
</html>