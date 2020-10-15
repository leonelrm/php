<?php


	require_once("../../models/monument/MonumentModel.php");
	session_start();

	//récupération de l'id de monument à chercher
	$id = $_GET['idMonument'];
	$traitement = $_GET['traitement'];
	
	if ( $traitement == 4 ) {
		
		//on passe idMonument en variable de session
		//afin de l'utiliser pour nommer les images
		$_SESSION['idMonument'] = $id;
		$_SESSION['nomMonument'] = $_GET['nomMonument'];
		Header("Location: ../../views/monument/frmUpload.php");	
		
	} else {
		
		//récupération du monument
		$monument = Monument_find( $id );
		
		//on passe $monument en variable de session
		$_SESSION['monument'] = $monument;
		
		if ( $traitement == 1 ) {
			Header("Location: ../../views/monument/frmMonumentVoir.php");
		} else {
			if ( $traitement == 2 ) {
				Header("Location: ../../views/monument/frmMonumentModifier.php");
			} else {
				Header("Location: ../../views/monument/frmMonumentSupprimer.php");			
			}
		}
	}
?>