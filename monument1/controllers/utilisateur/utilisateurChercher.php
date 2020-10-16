<?php
	session_start();
    if(isset($_SESSION['user_ok']) ){
        if($_SESSION['user_ok']['type_utilisateur'] != "ADM" ){
            header("Location: ../../utilisateur/frmlogin.php");
        }else{
            header("Location: ../../utilisateur/frmlogin.php");
        }
    }

	require_once("../../models/utilisateur/utilisateurModel.php");
	
	//récupération de l'id de monument à chercher
	$id = $_GET['idutilisateur'];
	$traitement = $_GET['traitement'];
	
	if ( $traitement == 4 ) {
		
		//on passe idMonument en variable de session
		//afin de l'utiliser pour nommer les images
		$_SESSION['idutilisateur'] = $id;
		$_SESSION['email'] = $_GET['email'];
		Header("Location: ../../views/monument/frmUpload.php");	
		
	} else {
		
		//récupération du monument
		$utilisateur = utilisateur_find( $id );
		
		//on passe $monument en variable de session
		$_SESSION['utilisateur'] = $utilisateur;
		
		if ( $traitement == 1 ) {
			Header("Location: ../../views/utilisateur/frmUtilisateurVoir.php");
		} else {
			if ( $traitement == 2 ) {
				Header("Location: ../../views/utilisateur/frmUtilisateurModifier.php");
			} else {
				Header("Location: ../../views/utilisateur/frmUtilisateurSupprimer.php");			
			}
		}
	}
?>