<?php

require_once("../../models/typemonument/typemonumentmodel.php");
session_start();
$libelle = trim(ucfirst($_POST['libelle']));
$idTypeMonument= $_POST['idTypeMonument'];
	
typeMonument_Delete($idTypeMonument,$libelle);	
	if($_SESSION['msg_erreur'] == ""){	
		Header("Location: ../../controllers/typemonument/TypeMonumentListerAccept.php");
	}else{
		Header("Location: ../../views/typemonument/frmTypeMonumentSupprimer.php");	
	}

?>