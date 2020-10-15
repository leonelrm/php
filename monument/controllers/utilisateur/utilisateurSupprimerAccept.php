<?php
session_start();
if(isset($_SESSION['user_ok']) ){
	if($_SESSION['user_ok']['type_utilisateur'] != "ADM" ){
		header("Location: views/utilisateur/frmlogin.php");
	}else{
		header("Location: views/utilisateur/frmlogin.php");
	}
}
require_once("../../models/monument/monumentmodel.php");

$nomMonument = trim(ucfirst($_POST['nomMonument']));
$idMonument= $_POST['idMonument'];
	
Monument_Delete($idMonument,$nomMonument);	
	if($_SESSION['msg_erreur'] == ""){	
		Header("Location: ../../controllers/monument/MonumentListerAccept.php");
	}else{
		Header("Location: ../../views/monument/frmMonumentSupprimer.php");	
	}

?>