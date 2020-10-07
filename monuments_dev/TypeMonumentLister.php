<?php
    require_once("connexion.php");

    function typeMonument_findAll() {
        $reqsql = "Select * from type_monument";
        //connexion a la base de donnes
        $cnx = connect_db();

        $ListeTypeMonument = array();
        
        try{
            $cnx = connect_db();
            $stmt=$cnx->prepare($reqsql);
                            
            //exécution
            $cnx->query($reqsql);
            $stmt->execute();

            $ListeTypeMonument = $stmt->fetchAll();

            //fermeture du curseur
            $stmt->closeCursor();

            //echo "Création réussie";
            
        } catch(PDOException $error){
            $message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
            $_SESSION['message_erreur'] = $message_erreur;
            Header("Location: page_erreur.php" );
        }
        //fermer la connexion
        $cnx = null;
        return $ListeTypeMonument;
    }    
    // print_r($ListeTypeMonument);
    // echo "<br>";

    // foreach($ListeTypeMonument as $rows){
    //     print_r("$rows");
    // }
?>