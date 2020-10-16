<!DOCTYPE html>
<html>
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
	<link rel="stylesheet" href="/css/main.css" />
	<?php
		// session_start();
		// if ( isset($_SESSION['user_ok']) ) {
		// 	if ($_SESSION['user_ok']['type_utilisateur'] != "ADM") {
		// 		header("Location: views/utilisateur/frmLogin.php");				
		// 	} 	
		// } else {
		// 	header("Location: views/utilisateur/frmLogin.php");
		// }

		// Détruit toutes les variables de session
		$_SESSION = array();
		$_SESSION['duree'] = time();
		if(time()>($_SESSION['duree']+1800)){ 
			session_destroy();
		}

	?>

</head>
<body class= "w3-gray" id= "admin">
	<div class="w3-container w3-black">
		<h1 >MONUMENTS</h1>
		<div id="deconnecter">
			<a href="authentification.php"><button type="button" class="btn btn-primary btn-md">Se deconnecter</button></a>
		</div>
	</div>
	<br>
	<div class="w3-container">
		<br>
		<div class="w3-container w3-responsive">
		
		<a href="controllers/typemonument/TypeMonumentListerAccept.php"><button type="button" class="btn btn-primary btn-lg">Type monument</button></a>
		
		<a href="controllers/monument/MonumentListerAccept.php"><button type="button" class="btn btn-primary btn-lg">Monument</button></a>
	
		<a href="controllers/utilisateur/UtilisateurListerAccept.php"><button type="button" class="btn btn-primary btn-lg">Utilisateur</button></a>
	
	</div>
		<br>
		<footer class="w3-brown w3-padding-large">
			<a href="../../administration.php" ><button class="w3-btn w3-aqua w3-round-large w3-hover-green w3-medium"><i class="fa fa-hand-o-left" ></i>&nbsp;&nbsp;Retour </button></a>
		</footer>	
		<br>			
	</div>
</body>
</html>