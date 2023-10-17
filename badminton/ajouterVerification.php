<body bgcolor="lightblue"></body>
<a href="index.php"> Accueil </a><br><br>


<?php

$nom = htmlspecialchars($_POST["nomAdh"]);
$prenom = htmlspecialchars($_POST["prenomAdh"]);
$adresse = htmlspecialchars($_POST["adresseAdh"]);
$ville = htmlspecialchars($_POST["villeAdh"]);
$cp = htmlspecialchars($_POST["cpAdh"]);
$niveau = htmlspecialchars($_POST["niveauAdh"]);
$type = htmlspecialchars($_POST["typeAdh"]);

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=badminton;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$numType = 1;

if ($type == 'Double') {
    $numType = 2;
} elseif ($type == 'Famille') {
    $numType = 3;
}
         
$sql = "INSERT INTO adherent (matriculeAdh, nomAdh, prenomAdh, adresseAdh, villeAdh, cpAdh, niveauAdh, typeAdh, numType) VALUES (NULL, :nom, :prenom, :adresse, :ville, :cp, :niveau, :typeAdh, :numType)";
$data = [
    'nom' => $nom,
    'prenom' => $prenom,
    'adresse' => $adresse,
    'ville' => $ville,
    'cp' => $cp,
    'niveau' => $niveau,
    'typeAdh' => $type,
    'numType' => $numType
];

$req = $bdd->prepare($sql);
$req->execute($data);

echo "<h4>L'adherent a bien ete ajouter.</h4>";
?>

