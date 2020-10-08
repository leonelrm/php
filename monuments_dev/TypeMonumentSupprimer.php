<?php

	require_once("chercheTypeMonument.php");
	session_start();

	//recuperation de l'id de type monument a chercher
	$id= $_GET['idtypemonument'];

	$typeMonument= typemonument_find($id);
	$_SESSION['typemonument'] = $typeMonument;
	
	Header("Location: frmTypeMonumentSupprimer.php");

    
   
?>