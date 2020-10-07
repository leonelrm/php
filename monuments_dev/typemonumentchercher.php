<?php

	require_once("connexion.php");
	session_start();
    
    
    $id= $_GET['id'];
    $vId= $id;

    // prepare requête sql 
	$reqSql = "select * from type_monument where ID_TYPE_monument :vId";
    
    
   	try{
		$cnx = connect_db();
		$stmt=$cnx->prepare($reqSql);
						
		// bind parameters
		$stmt->bindParam(':vId', $vId, PDO::PARAM_INT);
				
        //exécution
        $cnx= query(reqsql);
		$stmt->execute();
        $typemonumenttrouve = stmt-> fetch();
		//fermeture du curseur
        $stmt->closeCursor();
        
        

		
	} catch(PDOException $error){
		$message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
		$_SESSION['message_erreur'] = $message_erreur;
		Header("Location: page_erreur.php" );
	}
    $cnx = null;
    print_r('typemonumenttrouve');
?>