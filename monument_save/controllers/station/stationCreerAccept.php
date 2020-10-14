<?php

	require_once("../../models/monument/MonumentModel.php");
	session_start();
	
	$nomMonument = trim(ucfirst($_POST['nomMonument']));
	$arrMonument = trim($_POST['arrMonument']);
	$adrMonument = trim(ucfirst($_POST['adrMonument']));
	$siteMonument = trim($_POST['siteMonument']);
	$dateCreation = trim($_POST['dateCreation']);
	$idTypeMonument = trim(ucfirst($_POST['idTypeMonument']));
	echo $idTypeMonument;
	// $_SESSION['nomMonument'] = $nomMonument;
	// $_SESSION['arrMonument'] = $arrMonument;
	// $_SESSION['adrMonument'] = $adrMonument;
	// $_SESSION['siteMonument'] = $siteMonument;
	// $_SESSION['dateCreation'] = $dateCreation;
	// $_SESSION['idTypeMonument'] = $idTypeMonument;
	 $_SESSION['msg_erreur'] = "";

	// //controle si libelle est vide
	 if(!empty($nomMonument) || (!empty($arrMonument) || (!empty($adrMonument) || (!empty($siteMonument) || (!empty($dateCreation) || (!empty($idTypeMonument)) {
	 	monument_Insert($nomMonument, $arrMonument, $adrMonument, $siteMonument, $dateCreation, $idTypeMonument);		
	 	Header("Location: ../../views/monument/frmMonumentCreer.php")
	 } else {
	 	$_SESSION['msg_erreur'] = 'Libellé non renseigné';
	 	Header("Location: ../../views/monument/frmMonumentCreer.php");
	 }
?>