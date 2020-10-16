<?php
    session_start();
    
    $idMonument = $_GET['idMonument'];
    $dateCreation = $_GET['dateCreation'];
    $nomMonument = $_GET['nomMonument'];

    compterArticles(){
   if (isset($_SESSION['panier']))
   return count($_SESSION['panier']['idMonument']);
   else
   return 0;
    }
    $taille = sizeof($_SESSION['panier']);
    
    $_SESSION['panier'][$taille]['idMonument']= $idMonument;
    $_SESSION['panier'][$taille]['dateCreation']= $dateCreation;   
    $_SESSION['panier'][$taille]['nomMonument']= $nomMonument;

    header("Location: ../../views/monument/indexListerMonument.php")
	
?>