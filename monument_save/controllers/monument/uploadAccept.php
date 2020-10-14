<?php
    session_start();
    function convert(){
        $ext = strstr($_FILES['photo']['name'],".");   
        $png = ".png";
        if($ext !== "png"){
            $ext = $png; 
        }return $ext;
    }
    
    $ext_png = convert();
    
    $destination = "../../images/monument/monument_".$_SESSION['idMonument'].$ext_png;
    if ( isset($_FILES['photo']['tmp_name']) ) {
        $retour = copy($_FILES['photo']['tmp_name'], $destination);
        if($retour) {
            echo '<p>La photo a bien été envoyée.</p>';
            echo '<img src="' . $_FILES['photo']['name'] . '">';
        }
    }
?>