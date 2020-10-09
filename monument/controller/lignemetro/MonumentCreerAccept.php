<?php

	require_once("../../model/typemonument/typemonumentmodel.php");
	session_start();
	
	$libelle = trim(ucfirst($_POST['libelle']));
	
	//controle si libelle vide

	typeMonument_Insert($libelle);
	
	Header("Location:../../controller/typemonument/TypeMonumentListerAccept.php");
?>