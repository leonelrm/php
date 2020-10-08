<?php
    require_once("connexion.php");
     
    function typemonument_find($id){
        $vId = $id;

        // prepare requête sql 
        $reqsql = "Select * from type_monument where ID_TYPE_Monument= :vId";
        
        $ListeTypeMonumenttrouve = array();
     
        try{
        //etablir connexion a la bbd
         $cnx = connect_db();

         //preparation a la excetion de la requete
         $stmt=$cnx->prepare($reqsql);
                         
         // bind parameters on envoi de donnes
         $stmt->bindParam(':vId', $vId, PDO::PARAM_INT);
                 
         //exécution
         //$cnx= query(reqsql);
         $stmt->execute();
         $typemonumenttrouve = $stmt->fetch();
         
         //fermeture du curseur
         $stmt->closeCursor();
         
                  
     } catch(PDOException $error){
         $message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
         $_SESSION['message_erreur'] = $message_erreur;
         //Header("Location: page_erreur.php" );
     }
     $cnx = null;
     //print_r($typemonumenttrouve);
     return $typemonumenttrouve;
    }
?>