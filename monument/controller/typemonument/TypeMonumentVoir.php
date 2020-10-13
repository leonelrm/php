<?php

	require_once("../../models/typemonument/typemonumentModel.php");
	session_start();

	//recuperation de l'id de type monument a chercher
	$id= $_GET['idtypemonument'];

	$typemonument= typemonument_find($id);
	$_SESSION['typemonument'] = $typemonument;
	
	Header('Location: ../../views/typemonument/frmTypeMonumentVoir.php');

    
   
?>