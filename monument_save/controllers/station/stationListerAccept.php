<?php
	
	require_once("../../models/station/StationModel.php");
	session_start();
	
	$_SESSION['listeStation'] = Monument_findAll();
	
	Header("Location: ../../views/station/ListerStation.php");
	
?>