<?php

	require_once("connexion.php");
	session_start();
	
    $libelle = trim(ucfirst($_POST['libelle']));
    $vTypeMonumentId = $_POST['idTypeMonument'];
	/*if(empty($libelle)){
        $_SESSION['msg_erreur_saisie'] = "Vous devez saisir une valeur";
        Header("Location: frmTypeMonumentCreer.php" );
        exit;
    }*/
	// sécurisation des données
	$vLibelle = filter_var($libelle, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	//$vTypeMonumentId = '';
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
		
	}
	$cnx = null;
	Header("Location: ListeTypeMonument.php" );
?>