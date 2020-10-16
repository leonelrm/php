<!DOCTYPE HTML>
<head>
<meta charset="UTF-8">
	<title>Monuments de Paris</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Ajout de Bootstrap à partir du CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>	

	<!--Ajout de W3.CSS à partir du CDN-->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	

	<!--Pour utiliser les icônes Font Awesome avec Bootstrap 4 -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<!--Fichier CSS de la page-->
    <link rel="stylesheet" href="../../css/main.css" />
	<?php
		session_start();
		require_once("../../models/utilisateur/utlisateurModel.php");
		//$listeMonument = Monument_findAll();
		$Monument = $_SESSION['monument'];
		$nomMonument = $_SESSION['nomMonument'];
		$arrMonument = $_SESSION['arrMonument'];
		$adrMonument = $_SESSION['adrMonument'];
		$siteMonument = $_SESSION['siteMonument'];
		$dateCreation = $_SESSION['dateCreation'];
		$idTypeMonument = $_SESSION['idTypeMonument'];
		
		
	?>
</head>
<html>  
<body>
<div class="w3-container w3-black">

		<h1 >MONUMENT</h1>
	</div>
	<br>
	
	<div class="w3-row">
		<div class="w3-quarter w3-container">
		&nbsp;
		</div>
		<div class="w3-half w3-light-grey w3-border w3-card-4">
			<div class="w3-container w3-blue">
				<h2>Modification d'un monument </h2>
			</div>
			<br><br>
			<form class="w3-container" action="../../controllers/monument/MonumentModifierAccept.php" method="post">
				<p class="w3-text-red"><?php echo $_SESSION['msg_erreur'];?></p>
				<br>
				<label>Nom Monument</label>
				<input class="w3-input w3-text-blue" type="text" name="nomMonument"value="<?php echo $Monument['Nom_Monument']; ?>" autofocus>
				<label>Arrondissement</label>
				<input class="w3-input w3-text-blue" type="text" name="arrMonument"value="<?php echo $Monument['Arrondissement_Monument']; ?>" autofocus>
				<label>Addresse</label>
				<input class="w3-input w3-text-blue" type="text" name="adrMonument"value="<?php echo $Monument['Adresse_Monument']; ?>" autofocus>
				<label>Site Web</label>
				<input class="w3-input w3-text-blue" type="text" name="siteMonument"value="<?php echo $Monument['Site_Web_Monument']; ?>" autofocus>
				<label>Date de Creation</label>
				<input class="w3-input w3-text-blue" type="text" name="dateCreation"value="<?php echo $Monument['date_creation']; ?>" autofocus>
				<label>Type Monument</label>
				<input class="w3-input w3-text-blue" type="text" name="idTypeMonument"value="<?php echo $Monument['ID_TYPE_Monument']; ?>" autofocus>
				<input type="hidden" name="idMonument" value="<?php echo $Monument['ID_Monument']; ?>" >
				<br><br>
				<button type="submit" class="w3-btn w3-teal w3-round-large w3-hover-green w3-medium"><i class="fa fa-check" ></i>&nbsp;&nbsp; Modifier</button>
				<br><br>
			</form>	
		<footer class="w3-brown w3-padding-large w3-right-align">
			<a href="../../controllers/monument/MonumentListerAccept.php" ><button class="w3-btn w3-aqua w3-round-large w3-hover-green w3-medium"><i class="fa fa-hand-o-left" ></i>&nbsp;&nbsp;Retour </button></a>
		</footer>				
		</div>
		<div class="w3-quarter w3-container">
		&nbsp;
		</div>
	</div> 		
</body>
</html>