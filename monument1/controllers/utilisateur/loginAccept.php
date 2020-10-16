<?php

	session_start();
    
require_once("../../models/utilisateur/utilisateurModel.php");
session_start();
	//récupération des données postées (inputs du formulaire)
	$email = trim($_POST['email']);
	$mdp = trim($_POST['mdp']);
	
	
	//on remet les données en variable de session au cas où
	//il y a erreur de saisie de retourner au formulaire avec
	//ces données
	$_SESSION['email'] = $email;
	$_SESSION['mdp'] = $mdp;

	
	
	$_SESSION['msg_erreur'] = "";
	
	//controle avant insertion
	if ( empty($email) ) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Email non renseigné<br>";
	}else{
		if(!filter_var($email, FILTER_VALIDATE_EMAIL) ){
			$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Email Invalide<br>";	
		}
	}
	if ( empty($mdp) ) {
		$_SESSION['msg_erreur'] = $_SESSION['msg_erreur'] . "Password non renseigné<br>";
	}
	if ( empty($_SESSION['msg_erreur']) ) {
		$utilisateur = user_finByEmail($email );
		$mdpCrypte = $utilisateur['mdp_utilisateur'];
		if(password_verify($mdp,$mdpCrypte)) {
			$_SESSION['user_ok'] = $utilisateur;
            Header("Location: ../../administration.php");
		}else{
			$_SESSION['msg_erreur'] = "access refuse<br>";
            Header("Location: ../../views/utilisateur/frmLogin.php");
		}else{
				
		}
		
		
		//$utilisateur = user_search($email, $mdp );		
        //if($utilisateur != null ){
        //    $_SESSION['user_ok'] = $utilisateur;
        //    Header("Location: ../../administration.php");
        //}else{
        //    $_SESSION['msg_erreur'] = "access refuse<br>";
        //   Header("Location: ../../views/utilisateur/frmLogin.php");
        //}
	}
	
			
	
?>