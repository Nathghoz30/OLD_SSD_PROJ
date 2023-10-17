<!DOCTYPE html>
<html>
<head>
	<title>Gestion adhérents</title>
	<meta charset="utf-8">
	<style>
		table, th, td {
			border: 1px solid black;
		}
	</style>
</head>

<body bgcolor="lightblue">
	<a href="http://localhost/INFO-TAIEB/badminton/index.php">Retour à l'acceuil<a><br><br><br>
	<table style="width:100%">
		<thead>
		<tr>
			<td><h4>Action</h4></td>
			<td><h4>Nom de l'adherent</h4></td>
			<td><h4>Prenom de l'adherent</h4></td>
			<td><h4>Niveau de l'adherent</h4></td>
		</tr>
		</thead>
		<?php
			$con = mysqli_connect("localhost","root","","badminton");
		  	$req = "SELECT * FROM `adherent` ORDER BY adherent.nomAdh ASC";
		  	$resultat = mysqli_query($con,$req);

		  //echo "test".mysqli_error($con);
		while ($val = mysqli_fetch_assoc($resultat))
		{
			// print_r($val);
			echo "<tr>
					<td> <a href='infoAdh.php?matriculeAdh=".$val["matriculeAdh"]."'>Détails</a> <a href='modifAdh.php?matriculeAdh=".$val["matriculeAdh"]."'>Modifier</a> <a href='supprAdh.php?matriculeAdh=".$val["matriculeAdh"]."'>Supprimer</a> </td>
					<td>".$val['nomAdh']."</td>
					<td>".$val['prenomAdh']."</td>
					<td>".$val['niveauAdh']."</td>
				  <tr>";

		}
		?>
	</table>



</body>
</html>
