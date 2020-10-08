<?php

	require_once("../model/type_monument/typeMonumentModel.php");
	session_start();
	
	$libelle = trim(ucfirst($_POST['libelle']));
	
	//controle si libelle vide

	typeMonument_Insert($libelle);
	
	Header("Location: ListeTypeMonument.php" );
?>