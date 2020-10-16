<?php
    session_start();
    
    
    $_SESSION['panier']['idMonument']= $idMonument;
    $_SESSION['panier']['dateCreation']= $dateCreation;   
    $_SESSION['panier']['nomMonument']= $nomMonument;

    header("Location: ../../views/monument/indexListerMonument.php")
	
?>