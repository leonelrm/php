<?php

	require_once("../../model/typemonument/typemonumentmodel.php");
	session_start();
	
   //recuperation de l'id de type monument a chercher
	$id= $_GET['idtypemonument'];

	$typemonument= typemonument_find($id);

	$_SESSION['typemonument'] = $typemonument;
	
	
	
	Header("Location: ../../views/typemonument/frmTypeMonumentSupprimer.php" );
?>