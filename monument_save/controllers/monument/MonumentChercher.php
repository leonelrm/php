<?php

	require_once("../../models/monument/monumentModel.php");
	session_start();

	//recuperation de l'id de type monument a chercher
	$id= $_GET['idMonument'];
	$traitement = $_GET['traitement'];

	//recuperation de type monument
	$monument= monument_find($id);

	//on passe $typemonument en variable de session
	$_SESSION['monument'] = $monument;

	if($traitement == 1){
		Header('Location: ../../views/monument/frmMonumentVoir.php');
	} else{
		if($traitement == 2){
			Header('Location: ../../views/monument/frmMonumentModifier.php');	
		}else{
			Header('Location: ../../views/monument/frmMonumentSupprimer.php');							
		}
	}
	
	

    
   
?>