<?php
	session_start();
    if(isset($_SESSION['user_ok']) ){
        if($_SESSION['user_ok']['type_utilisateur'] != "ADM" ){
            header("Location: views/utilisateur/frmlogin.php");
        }else{
            header("Location: views/utilisateur/frmlogin.php");
        }
    }
	require_once("../../models/utilisateur/utilisateurModel.php");
	
	
	//récupération des données postées (inputs du formulaire)
	$email = trim($_POST['email']);
	$mdp = trim($_POST['mdp']);
	$userType = trim($_POST['userType']);
	
	//on remet les données en variable de session au cas où
	//il y a erreur de saisie de retourner au formulaire avec
	//ces données
	$_SESSION['email'] = $email;
	$_SESSION['mdp'] = $mdp;
	$_SESSION['userType'] = $userType;
	
	
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
				utilisateur_insert($email, password_hash($mdp, PASSWORD_DEFAULT), $userType );
	}
	
	Header("Location: ../../views/utilisateur/frmUtilisateurCreer.php");				
	
?>