<body bgcolor="lightblue">
<?php

$matricule = htmlspecialchars($_POST["matriculeAdh"]);
$nom = htmlspecialchars($_POST["nomAdh"]);
$prenom = htmlspecialchars($_POST["prenomAdh"]);
$adresse = htmlspecialchars($_POST["adresseAdh"]);
$ville = htmlspecialchars($_POST["villeAdh"]);
$cp = htmlspecialchars($_POST["cpAdh"]);
$niveau = htmlspecialchars($_POST["niveauAdh"]);
$type = htmlspecialchars($_POST["typeAdh"]);

$con = mysqli_connect("localhost","root","","badminton");
$req = "UPDATE adherent SET nomAdh = '".$nom."', prenomAdh = '".$prenom."', adresseAdh = '".$adresse."', villeAdh  = '".$ville."', cpAdh = '".$cp."', niveauAdh = '".$niveau."', typeAdh = '".$type."' WHERE matriculeAdh = ".$_GET["matriculeAdh"];
$resultat = mysqli_query($con, $req);

/*while ($donnees = mysqli_fetch_assoc($resultat))
{
    echo 'Matricule : '.' '.$donnees["matriculeAdh"];
    echo '<br>Nom : '.' '.$donnees["nomAdh"];
    echo '<br>Prenom : '.' '.$donnees["prenomAdh"];
    echo '<br>Adresse : '.' '.$donnees["adresseAdh"];
    echo '<br>Ville : '.' '.$donnees["villeAdh"];
    echo '<br>Code Postal : '.' '.$donnees["cpAdh"];
    echo '<br>Niveau : '.' '.$donnees["niveauAdh"];
    echo '<br>Forfait : '.' '.$donnees["typeAdh"];
}*/

echo "L'adherent a bien ete modifier.";
?>
<br/>
<a href="gestionAdh.php"> Retour à l'accueil </a>
</body>