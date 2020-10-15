<?php

    if ( isset($_FILES['photo']['tmp_name']) ) {
        $retour = copy($_FILES['photo']['tmp_name'], $_FILES['photo']['name'] );
        if($retour) {
            echo '<p>La photo a bien été envoyée.</p>';
            echo '<img src="' . $_FILES['photo']['name'] . '">';
        }
    }
?>