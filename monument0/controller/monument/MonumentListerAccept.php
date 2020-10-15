<?php
    require_once("../../model/typemonument/typemonumentmodel.php");
    session_start();

    $_SESSION['listeTypeMonument'] = typemonument_findAll();

    Header('Location: ../../views/monument/ListeMonument.php');

?>