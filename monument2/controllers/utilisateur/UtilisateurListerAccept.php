<?php
	
	require_once("../../models/utilisateur/utilisateurModel.php");
	session_start();
	
	//$_SESSION['listeUtilisateur'] = utilisateur_findAll();
	$_SESSION['Utilisateur'] = user_findByEmail($_SESSION['user_ok']['email_utilisateur']);
	
	Header("Location: ../../views/utilisateur/ListerUtilisateur.php");
	
?>