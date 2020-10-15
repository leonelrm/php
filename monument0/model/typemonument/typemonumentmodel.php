<?php
require_once("../../model/connexion.php");

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

function typeMonument_Insert($libelle) {

    // sécurisation des données
	$vLibelle = filter_var($libelle, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$vTypeMonumentId = '';
	echo $vLibelle . "<br>";

	// prepare requête sql 
	$reqSql = "insert into type_monument values (:vTypeMonumentId, :vLibelle)";

	try{
		$cnx = connect_db();
		$stmt=$cnx->prepare($reqSql);
						
		// bind parameters
		$stmt->bindParam(':vTypeMonumentId', $vTypeMonumentId, PDO::PARAM_INT);
		$stmt->bindParam(':vLibelle', $vLibelle, PDO::PARAM_STR);
		
		//exécution
		$stmt->execute();

		//fermeture du curseur
		$stmt->closeCursor();

		echo "Création réussie";
		
	} catch(PDOException $error){
		$message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
		$_SESSION['message_erreur'] = $message_erreur;
		Header("Location: page_erreur.php" );
	}
	$cnx = null;
	Header("Location: ListeTypeMonument.php" );
}  

function typeMonument_Update($id,$libelle) {
	
	$vTypeMonumentId = $id;
    // sécurisation des données
	$vLibelle = filter_var($libelle, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

	echo $vLibelle . "<br>";

	// prepare requête sql 
	$reqSql = "UPDATE  type_monument SET Libelle_TYPE_Monument= :vLibelle WHERE ID_TYPE_Monument = :vTypeMonumentId";

	try{
		$cnx = connect_db();
		$stmt=$cnx->prepare($reqSql);
						
		// bind parameters
		$stmt->bindParam(':vTypeMonumentId', $vTypeMonumentId, PDO::PARAM_INT);
		$stmt->bindParam(':vLibelle', $vLibelle, PDO::PARAM_STR);
		
		//exécution
		$stmt->execute();

		//fermeture du curseur
		$stmt->closeCursor();

		echo "Création réussie";
		
	} catch(PDOException $error){
		$message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
		$_SESSION['message_erreur'] = $message_erreur;
		Header("Location: page_erreur.php" );
	}
	$cnx = null;
	
}

function typeMonument_Delete($id) {

    $vTypeMonumentId = $id;
	
	// prepare requête sql 
	$reqSql = "DELETE FROM  type_monument WHERE ID_TYPE_Monument = :vTypeMonumentId";

	try{
		$cnx = connect_db();
		$stmt=$cnx->prepare($reqSql);
						
		// bind parameters
		$stmt->bindParam(':vTypeMonumentId', $vTypeMonumentId, PDO::PARAM_INT);
		//$stmt->bindParam(':vLibelle', $vLibelle, PDO::PARAM_STR);
		
		//exécution
		$stmt->execute();

		//fermeture du curseur
		$stmt->closeCursor();

		echo "Création réussie";
		
	} catch(PDOException $error){
		$message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
		$_SESSION['message_erreur'] = $message_erreur;
		Header("Location: page_erreur.php" );
	}
	$cnx = null;
	
}

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