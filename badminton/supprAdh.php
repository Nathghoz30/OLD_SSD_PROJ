<!DOCTYPE html>
<html>
<head>
	<title>Supprimer un adherent</title>
</head>
<body bgcolor="lightblue">
	<a href="http://localhost/INFO-TAIEB/badminton/index.php">Retour à l'acceuil<a><br><br><br>

	<?php

// connexion à la base de données
$con = mysqli_connect("localhost","root","","badminton");

// suppression de la photo sélectionnée
$req = "DELETE FROM adherent WHERE matriculeAdh=".$_GET["matriculeAdh"];

//Execution de la requete
$resultat = mysqli_query($con,$req);


echo "L'adherent a bien été supprimée";
?>

</body>
</html>