<?php

	require_once("../../model/typemonument/typemonumentmodel.php");
	session_start();

	$id= $_POST['idTypeMonument'];
	$libelle = trim(ucfirst($_POST['libelle']));	
	
	typeMonument_Update($id, $libelle);
    	
	Header("Location: ../../controller/typemonument/TypeMonumentListerAccept.php");
?>