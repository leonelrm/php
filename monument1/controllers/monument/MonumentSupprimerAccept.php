<?php

require_once("../../models/monument/monumentmodel.php");
session_start();
$nomMonument = trim(ucfirst($_POST['nomMonument']));
$idMonument= $_POST['idMonument'];
	
Monument_Delete($idMonument,$nomMonument);	
	if($_SESSION['msg_erreur'] == ""){	
		Header("Location: ../../controllers/monument/MonumentListerAccept.php");
	}else{
		Header("Location: ../../views/monument/frmMonumentSupprimer.php");	
	}

?>