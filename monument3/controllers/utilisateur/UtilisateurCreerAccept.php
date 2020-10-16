<?php

	require_once("../../models/utilisateur/UtilisateurModel.php");
	session_start();
	
	//récupération des données postées (inputs du formulaire)
	$email = trim(($_POST['email']));
	$mdp = trim($_POST['mdp']);
	$user_type = trim($_POST['user_type']);

	//on remet les données en variable de session au cas où
	//il y a erreur de saisie de retourner au formulaire avec
	//ces données
	$_SESSION['email'] = $email;
	$_SESSION['mdp'] = $mdp;
	$_SESSION['user_type'] = $user_type;
	
	$_SESSION['msg_erreur'] = "";
	
	//controle avant insertion
	if ( empty($email) ) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Email non renseigné<br>";
	} else {
		if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
			$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Email invalide<br>";
		}
	}
	if ( empty($mdp) ) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Mot de passe non renseigné<br>";
	} 

	if ( empty($_SESSION['msg_erreur']) ) {
		
		utilisateur_Insert( $email, password_hash($mdp, PASSWORD_DEFAULT), $user_type );	

	} 
	Header("Location: ../../views/utilisateur/frmUtilisateurCreer.php");				
	
?>