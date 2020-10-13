<?php
	
	require_once("../../models/typemonument/typemonumentModel.php");
	session_start();
	
	$_SESSION['listeMonument'] = typeMonument_findAll();
	
	Header("Location: ../../views/typemonument/ListerMonument.php");
	
?>