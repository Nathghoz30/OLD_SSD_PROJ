 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Recherche</title>
	<style>
		table{width:100%;border-collapse:collapse}
		table tr,table th,table td{border:1px solid black;}
		table tr td{text-align:center;padding:1em;}
	</style>
</head>
<body bgcolor="lightblue">
	<a href="http://localhost/INFO-TAIEB/badminton/index.php">Retour à l'acceuil<a><br><br><br>
	<?php include('RechercheConfirm.php');?>
	<form method='post'>
		<input type='text.upper' placeholder='recherche' name="recherche_valeur"/>
		<input type='submit' value="Rechercher"/>
	</form>
	<br><br>
	<table>
		<thead>
			<tr><th>Nom</th><th>Prenom</th><th>Adresse</th><th>Ville</th><th>CP</th><th>Niveau</th><th>Forfait</th><th>Matricule</th></tr>
		</thead>
		<tbody>
			<?php
				$sql='select * from adherent';
				$params=[];
				if(isset($_POST['recherche_valeur'])){
					$sql.=' where nomAdh like :nom';
					$params[':nom']="%".addcslashes($_POST['recherche_valeur'],'_')."%";
				}
				$resultats=$connect->prepare($sql);
				$resultats->execute($params);
				if($resultats->rowCount()>0){
					while($d=$resultats->fetch(PDO::FETCH_ASSOC)){
					?>
						<tr><td><?=$d['nomAdh']?></td><td><?=$d['prenomAdh']?></td><td><?=$d['adresseAdh']?></td><td><?=$d['villeAdh']?></td><td><?=$d['cpAdh']?></td><td><?=$d['niveauAdh']?></td><td><?=$d['typeAdh']?></td><td><?=$d['matriculeAdh']?></td></tr>
					<?php
					}
					$resultats->closeCursor();
				}
				else echo '<tr><td colspan=4>aucun résultat trouvé</td></tr>'.
				$connect=null;
			?>
		</tbody>
	</table>
</body>
</html>