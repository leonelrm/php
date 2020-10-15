<?php
	
	session_start();
    if(isset($_SESSION['user_ok']) ){
        if($_SESSION['user_ok']['type_utilisateur'] != "ADM" ){
            require_once("../../models/monument/monumentModel.php");	
			$_SESSION['listeMonument'] = monument_findAll();	
			Header("Location: ../../views/monument/ListerMonument.php");
        }else{
            header("Location: /monument/authentification.php");
        }
    }else{
        header("Location:  /monument/authentification.php");
    }
	
?>