<?php

	require_once("../../model/typemonument/typemonumentmodel.php");
	session_start();

	$id= $_POST['idTypeMonument'];
		
	typeMonument_Delete($id);
			
	
	Header("Location: ../../controller/typemonument/TypeMonumentlisterAccept.php" );
?>