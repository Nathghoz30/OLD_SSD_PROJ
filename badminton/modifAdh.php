<!DOCTYPE html>
<html>
<head>
	<title>modifier un adherent</title>
</head>
<body bgcolor="lightblue">
	<a href="http://localhost/INFO-TAIEB/badminton/index.php">Retour à l'acceuil<a><br><br>
	<section>
        <h1>Modification Adhrent : </h1>

				<?php
					$con = mysqli_connect("localhost","root","","badminton");
					$req = "SELECT * FROM adherent WHERE matriculeAdh = ".$_GET["matriculeAdh"];
					$resultat = mysqli_query($con,$req);
					$donnees = mysqli_fetch_assoc($resultat);
				?>

				<form method="post" action="modificationVerification.php?matriculeAdh=<?php echo $donnees["matriculeAdh"]; ?>">

        <!-- Formulaire modification-->

            <p>
                <label> Matricule :</label>
                <input type="text" name ="matriculeAdh" value="<?php echo $donnees["matriculeAdh"]; ?>">
            <p>
            <p>
                <label> Prénom :</label>
                <input type="text" name ="prenomAdh" value="<?php echo $donnees["prenomAdh"]; ?>" required>
            <p>
            <p>
                <label> Nom :</label>
                <input type="text" name ="nomAdh" value="<?php echo $donnees["nomAdh"]; ?>" required>
            <p>
            <p>
                <label> Adresse :</label>
                <input type="text" name ="adresseAdh" value="<?php echo $donnees["adresseAdh"]; ?>" required>
            <p>
            <p>
                <label> Ville :</label>
                <input type="text" name ="villeAdh" value="<?php echo $donnees["villeAdh"]; ?>" required>
            <p>
            <p>
                <label> Code-Postal :</label>
                <input type="number" name ="cpAdh" value="<?php echo $donnees["cpAdh"]; ?>" required>
            <p>
            <p>
                <label> Niveau :</label>
                <select name="niveauAdh">
										<?php
											if ($donnees["niveauAdh"] == "Debutant") {
												echo '<option value="Debutant" selected="selected">Debutant</option>';
											}else {
												echo '<option value="Debutant">Debutant</option>';
											}

											if ($donnees["niveauAdh"] == "Confirme") {
												echo '<option value="Confirme" selected="selected">Confirme</option>';
											}else {
												echo '<option value="Confirme">Confirme</option>';
											}

											if ($donnees["niveauAdh"] == "Expert") {
												echo '<option value="Expert" selected="selected">Expert</option>';
											}else {
												echo '<option value="Expert">Expert</option>';
											}
										?>
                </select>
            <p>
            <p>
                <label> Type (forfait):</label>
                <select name="typeAdh">
									<?php
										if ($donnees["typeAdh"] == "Simple") {
											echo '<option value="Simple" selected="selected">Simple</option>';
										}else {
											echo '<option value="Simple">Simple</option>';
										}

										if ($donnees["typeAdh"] == "Double") {
											echo '<option value="Double" selected="selected">Double</option>';
										}else {
											echo '<option value="Double">Double</option>';
										}

										if ($donnees["typeAdh"] == "Famille") {
											echo '<option value="Famille" selected="selected">Famille</option>';
										}else {
											echo '<option value="Famille">Famille</option>';
										}
									?>
                </select>
            <p>
            <p>
                <input type="submit">
            <p>
        </form>
        <a href="gestionAdh.php"> Retour à la gestion des adherents </a>
    </section>

</body>
</html>
