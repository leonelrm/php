<?php
	    
	session_start();
	require_once("../../models/utilisateur/utilisateurModel.php");
	
	
    $_SESSION['listeUtilisateur'] = utilisateur_findAll();
    //$_SESSION['listeUtilisateur'] = user_findByEmail($_SESSION['user_ok']['emailUtilisateur']);
    
	
	Header("Location: ../../views/utilisateur/ListerUtilisateur.php");
	
?>