<?php

	require_once("../../models/connexion.php");
	
	function utilisateur_Find( $id ) {
	
		$vUserId = $id;
		
		// preparation de la requête sql 
		$reqSql = "select * from utilisateur where ID_UTILISATEUR = :vUserId";

		//initialisation de $monumenttrouve
		$utilisateurtrouve = array();

		try{
			//établit la connexion à la bdd
			$cnx = connect_db();
			
			//préparation à l'exécution de la requete
			$stmt=$cnx->prepare($reqSql);
							
			// bind parameters
			$stmt->bindParam(':vUserId', $vUserId, PDO::PARAM_INT);
			
			//exécution
			$stmt->execute();
			$utilisateurtrouve = $stmt->fetch();
			
			//fermeture du curseur
			$stmt->closeCursor();

		} catch(PDOException $error){
			$message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
			$_SESSION['message_erreur'] = $message_erreur;
			Header("Location: ../../controllers/utilisateur/utilisateurListerAccept.php" );
		}
		
		//fermer la connexion
		$cnx = null;	
		return $utilisateurtrouve;
	}

	function utilisateur_Insert( $email, $mdp, $userType  ) {
		
		// sécurisation des données
		$vEmail = filter_var($email, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$vMdp = filter_var($mdp, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$vUserType = filter_var($userType, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$vUserId = '';

		// prepare requête sql 
		$reqSql = "insert into utilisateur values (:vUserId, :vEmail," .
					" :vMdp, :vUser_type )";

		try{
			$cnx = connect_db();
			$stmt=$cnx->prepare($reqSql);
							
			// bind parameters
			$stmt->bindParam(':vUserId', $vUserId, PDO::PARAM_INT);
			$stmt->bindParam(':vEmail', $vEmail, PDO::PARAM_STR);
			$stmt->bindParam(':vMdp', $vMdp, PDO::PARAM_STR);
			$stmt->bindParam(':vUser_type', $vUserType, PDO::PARAM_STR);
			
			
			
			//exécution
			$stmt->execute();

			//fermeture du curseur
			$stmt->closeCursor();
			
		} catch(PDOException $error){
			$_SESSION['msg_erreur'] = $error->getMessage();
		}
		
		//fermer la connexion
		$cnx = null;			
	}
	
	function utilisateur_Update( $id, $email, $mdp, $userType ) {
		
		$vUserId = $id;
	
		// sécurisation des données
		$stmt->bindParam(':vEmail', $vEmail, PDO::PARAM_STR);
		$stmt->bindParam(':vMdp', $vMdp, PDO::PARAM_STR);
		$stmt->bindParam(':vUser_type', $vUserType, PDO::PARAM_STR);
		
		// prepare requête sql 
		$reqSql = 	"update utilisater set EMAIL_UTILIZATEUR  = :vEmail, " .
				  	"mdp_utilisateur = ::vMdp, " .
					"type_utilisateur = :vUserType " .
				  	" where ID_UTILISATEUR  = :vUserId";

		try{
			$cnx = connect_db();
			$stmt=$cnx->prepare($reqSql);
							
			// bind parameters
			$stmt->bindParam(':vUserId', $vUserId, PDO::PARAM_INT);
			$stmt->bindParam(':vEmail', $vEmail, PDO::PARAM_STR);
			$stmt->bindParam(':vMdp', $vMdp, PDO::PARAM_STR);
			$stmt->bindParam(':vUserType', $vUserType, PDO::PARAM_STR);
			
			//exécution
			$stmt->execute();

			//fermeture du curseur
			$stmt->closeCursor();

		} catch(PDOException $error){
			$_SESSION['msg_erreur'] = $error->getMessage();
		}
		
		//fermer la connexion
		$cnx = null;		
	}
	
	function utilisateur_Delete( $id ) {

		$vUserId = $id;

		// prepare requête sql 
		$reqSql = "delete from utilisateur " .
				  " where ID_UTILISATEUR  = :vUserId";

		try{
			$cnx = connect_db();
			$stmt=$cnx->prepare($reqSql);
							
			// bind parameters
			$stmt->bindParam(':vUserId', $vUserId, PDO::PARAM_INT);
			
			//exécution
			$stmt->execute();

			//fermeture du curseur
			$stmt->closeCursor();

		} catch(PDOException $error){
			$_SESSION['msg_erreur'] = $error->getMessage();
		}
		
		//fermer la connexion
		$cnx = null;			
	}
	
	function utilisateur_findAll(){

		//preparation de la requete d'extraction de tous les enregistrements
		$reqSql = "select * from utilisateur";

		//connexion  la base de données
		$cnx = connect_db();
	
		$listeUtilisateur = array();
		
		try{
			$cnx = connect_db();
			$stmt=$cnx->prepare($reqSql);
		
			//exécution
			$stmt->execute();
		
			$listeUtilisateur = $stmt->fetchAll();

			//fermeture du curseur
			$stmt->closeCursor();
		
		} catch(PDOException $error){
			//$message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
			//$_SESSION['message_erreur'] = $message_erreur;
			//Header("Location: PageErreur.php" );
			$_SESSION['msg_erreur'] = $error->getMessage();
		}
	
		//fermer la connexion
		$cnx = null;	
		return $listeUtilisateur;		
	}	

	function user_search( $email,$mdp ) {
			
		$vEmail = $email;
		$vMdp = $mdp;
		
		// preparation de la requête sql 
		$reqSql = "select * from utilisateur where EMAIL_UTILIZATEUR = :vEmail AND mdp_utilisateur = :vMdp";

		//initialisation de $monumenttrouve
		$utilisateurtrouve = array();

		try{
			//établit la connexion à la bdd
			$cnx = connect_db();
			
			//préparation à l'exécution de la requete
			$stmt=$cnx->prepare($reqSql);
							
			// bind parameters
		;
			$stmt->bindParam(':vEmail', $vEmail, PDO::PARAM_STR);
			$stmt->bindParam(':vMdp', $vMdp, PDO::PARAM_STR);
			//exécution
			$stmt->execute();
			$utilisateurtrouve = $stmt->fetch();
			
			//fermeture du curseur
			$stmt->closeCursor();

		} catch(PDOException $error){
			$message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
			$_SESSION['message_erreur'] = $message_erreur;
			Header("Location: ../../controllers/utilisateur/utilisateurListerAccept.php" );
		}
		
		//fermer la connexion
		$cnx = null;	
		return $utilisateurtrouve;
		
	}
	function user_findByEmail( $email ) {
			
		$vEmail = $email;
	
		
		// preparation de la requête sql 
		$reqSql = "select * from utilisateur where EMAIL_UTILIZATEUR = :vEmail";

		//initialisation de $monumenttrouve
		$utilisateurtrouve = array();

		try{
			//établit la connexion à la bdd
			$cnx = connect_db();
			
			//préparation à l'exécution de la requete
			$stmt=$cnx->prepare($reqSql);
							
			// bind parameters
		;
			$stmt->bindParam(':vEmail', $vEmail, PDO::PARAM_STR);
			
			//exécution
			$stmt->execute();
			$utilisateurtrouve = $stmt->fetchAll();
			
			//fermeture du curseur
			$stmt->closeCursor();

		} catch(PDOException $error){
			$message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
			$_SESSION['message_erreur'] = $message_erreur;
			Header("Location: ../../controllers/utilisateur/utilisateurListerAccept.php" );
		}
		
		//fermer la connexion
		$cnx = null;	
		return $utilisateurtrouve;
	}
?>