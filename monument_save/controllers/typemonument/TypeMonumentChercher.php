<?php

	require_once("../../models/typemonument/typemonumentModel.php");
	session_start();

	//recuperation de l'id de type monument a chercher
	$id= $_GET['idtypemonument'];
	$traitement = $_GET['traitement'];

	//recuperation de type monument
	$typemonument= typemonument_find($id);

	//on passe $typemonument en variable de session
	$_SESSION['typemonument'] = $typemonument;

	if($traitement == 1){
		Header('Location: ../../views/typemonument/frmTypeMonumentVoir.php');
	} else{
		if($traitement == 2){
			Header('Location: ../../views/typemonument/frmTypeMonumentModifier.php');	
		}else{
			Header('Location: ../../views/typemonument/frmTypeMonumentSupprimer.php');							
		}
	}
	
	

    
   
?>