<!DOCTYPE html>
<html>
<head>
	<title>Ajout adhérent</title>
    <meta charset="utf-8">
    
</head>
<body bgcolor="lightblue">
    <a href="http://localhost/INFO-TAIEB/badminton/index.php">Retour à l'acceuil<a><br><br>
    <form method="post" action="ajouterVerification.php">
    <h1>Rentrez les champs suivants pour ajouter un adhérent</h1><br>
    

    Entrez nom du nouvel adherent <input type="text" name="nomAdh"><br><br>
    Entrez prenom du nouvel adherent <input type="text" name="prenomAdh"><br><br>
    Entrez l'adresse du nouvel adherent <input type="text" name="adresseAdh"><br><br>
    Entrez ville du nouvel adherent <input type="text" name="villeAdh"><br><br>
    Entrez le code postal du nouvel adherent <input type="text" name="cpAdh"><br><br>

    Choisissez votre niveau:
    <select name="niveauAdh">
        <option>Débutant</option>
        <option>Confirme</option>
        <option>Expert</option>
    </select><br><br>

    Choisissez votre forfait (type):
    <select name="typeAdh">
        <option>Simple</option>
        <option>Double</option>
        <option>Famille</option>
    </select><br><br>
    <input type="reset" value="Annuler">
    <input type="submit" value="Ajouter un adherent">
    </form>

</body>
</html>