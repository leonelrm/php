<?php
    require_once("connexion.php");
	$libelle = $_POST['libelle'];
	
	$reqSql = "insert into type_monument values ('','" . $libelle . "')";
	
	$cnx = connect_db();
	
	try{
		$cnx = connect_db();
		$cnx->exec($reqSql);
		echo "Création réussie";
	} catch(PDOException $error){
		$message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
		$_SESSION['message_erreur'] = $message_erreur;
		Header("Location: PageErreur.php" );
    }    
    $cnx = null;
?>