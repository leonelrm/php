<?php

	require_once("../../model/typemonument/monumentmodel.php");
	session_start();
	
	$NomMonument = trim(ucfirst($_POST['nom_monument']));
	$ArrMonument = trim($_POST['arr_monument']);
	$AdrMonument = trim($_POST['adr_monument']);
	$SiteWebMonument = trim($_POST['siteweb_monument']);
	$TypeMonument = trim($_POST['type_monument']);
	
	//controle si libelle vide

	typeMonument_Insert($libelle);
	
	Header("Location:../../controller/typemonument/MonumentListerAccept.php");
?>