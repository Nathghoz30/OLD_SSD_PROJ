<!DOCTYPE html>
<html>
<head>
	<title>Info adherent</title>
</head>
<body bgcolor="lightblue">
	<a href="http://localhost/INFO-TAIEB/badminton/index.php">Retour à l'acceuil<a><br><br><br>

	<?php

// connexion à la base de données
$con = mysqli_connect("localhost","root","","badminton");

// suppression de la photo sélectionnée
$req = "SELECT * FROM adherent WHERE matriculeAdh =".$_GET["matriculeAdh"];

//Execution de la requete
$resultat = mysqli_query($con,$req);
while ($donnees = mysqli_fetch_assoc($resultat))
{
    echo 'Matricule : '.' '.$donnees["matriculeAdh"];
    echo '<br>Nom : '.' '.$donnees["nomAdh"];
    echo '<br>Prenom : '.' '.$donnees["prenomAdh"];
    echo '<br>Adresse : '.' '.$donnees["adresseAdh"];
    echo '<br>Ville : '.' '.$donnees["villeAdh"];
    echo '<br>Code Postal : '.' '.$donnees["cpAdh"];
    echo '<br>Niveau : '.' '.$donnees["niveauAdh"];
    echo '<br>Forfait : '.' '.$donnees["typeAdh"];
    
    $numType = 1;
    if ($donnees["typeAdh"] == 'Simple' || $donnees["typeAdh"] == 'Double' || $donnees["typeAdh"] == 'Famille') {
        $type = $donnees["typeAdh"];
    }

    if ($numType == 1) {
        $montant = 25;
    }
    elseif ($numType == 2) {
        $montant = 50;
    }
    elseif ($numType == 3) {
        $montant = 75;
    }
    echo '<br>Montant: €'.' '.$montant;





}



?>

</body>
</html>