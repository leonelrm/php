<!DOCTYPE HTML>
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
    <link rel="stylesheet" href="../../css/main.css" />
	<?php
		session_start();
		if(isset($_SESSION['user_ok']) ){
			if($_SESSION['user_ok']['type_utilisateur'] != "ADM" ){
				header("Location: ../views/utilisateur/frmlogin.php");
			}else{
				header("Location: ../views/utilisateur/frmlogin.php");
			}
		}
		
		$_SESSION['msg_erreur'] = "";		
		$listeUtilisateur = $_SESSION['listeUtilisateur'];
		
	?>
</head>
<body>
	<div class="w3-container w3-black">
		<h1 >UTILISATEURS</h1>
	</div>
	<br>
	<div class="w3-container">
		<header class="w3-container w3-sand">
			<h3 class="titre">Liste de Utilisateurs </h3>
		</header>
		<br>
		<div class="w3-container w3-responsive">
			<table class="w3-table w3-striped w3-border w3-hoverable w3-small">
				<thead>
					<tr class="w3-dark-grey">
						<th>Photo</th>
						<th>Email Utilisateur</th>
						<th>Type Utilisateur</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						if ( sizeof($listeUtilisateur) > 0 ) {
							foreach ($listeUtilisateur as $utilisateur )  {?>	
					<tr>
						<td><img id="img_upload" src="../../images/utilisateur/utilisateur_<?php echo $utilisateur['ID_UTILISATEUR ']; ?>.png"alt="photo" ></td>
						<td class="w3-text-black"><?php echo $utilisateur['EMAIL_UTILIZATEUR'];?></td>
						<td class="w3-text-black"><?php echo $utilisateur['type_utilisateur'];?></td>
						<td><a href="../../controllers/utilisateur/utilisateurChercher.php?idulilisateur=<?php echo $utilisateur['ID_UTILISATEUR'] ?>&traitement=1"><button class="w3-btn w3-blue w3-round-large w3-hover-green w3-small"><i class="fa fa-eye" ></i>&nbsp;&nbsp;Voir</button></a>&nbsp;&nbsp;
						<a href="../../controllers/utilisateur/utilisateurChercher.php?idutilisateur=<?php echo $utilisateur['ID_UTILISATEUR'] ?>&traitement=2"><button class="w3-btn w3-yellow w3-round-large w3-hover-green w3-small"><i class="fa fa-pencil-square-o" ></i>&nbsp;&nbsp;Modifier</button></a>&nbsp;&nbsp;
						<a href="../../controllers/utilisateur/utilisateurChercher.php?idutilisateur=<?php echo $utilisateur['ID_UTILISATEUR'] ?>&traitement=3"><button class="w3-btn w3-red w3-round-large w3-hover-green w3-small"><i class="fa fa-trash" ></i>&nbsp;&nbsp;Supprimer</button></a>
						<a href="../../controllers/utilisateur/utilisateurChercher.php?idutilisateur=<?php echo $utilisateur['ID_UTILISATEUR'] ?>&traitement=4"><button class="w3-btn w3-orange w3-round-large w3-hover-green w3-small"><i class="fas fa-cloud-download-alt"></i> </i>&nbsp;&nbsp;Telecharger Image</button></a></td>
					</tr>
					<?php
						} } else { ?>
							<tr>
								<td></td>
								<td><label class="w3-text-red">La liste est vide. Aucun Utilisateur saisi</label></td>
								<td></td>
							</tr>
					<?php
						}
					?>
				</tbody>
			</table>				
		</div>
		<br>
		<footer class="w3-brown w3-padding-large">
			<a href="frmUtilisateurCreer.php" >&nbsp;&nbsp;<button class="w3-btn w3-teal w3-round-large w3-hover-green w3-medium"><i class="fa fa-plus-circle" ></i>&nbsp;&nbsp;Créer</button></a>
			&nbsp;&nbsp;<a href="../../administration.php" ><button class="w3-btn w3-aqua w3-round-large w3-hover-green w3-medium"><i class="fa fa-hand-o-left" ></i>&nbsp;&nbsp;Retour </button></a>
		</footer>	
		<br>			
	</div>
</body>
</html>