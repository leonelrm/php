<?php
	
	require_once("../../models/monument/MonumentModel.php");
	session_start();
	
	$_SESSION['listeMonument'] = Monument_findAll();
	
	Header("Location: ../../views/monument/ListerMonument.php");
	
?>