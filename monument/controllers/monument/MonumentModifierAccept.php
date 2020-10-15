<?php
	session_start();
    if(isset($_SESSION['user_ok']) ){
        if($_SESSION['user_ok']['type_utilisateur'] != "ADM" ){
            	
		require_once("../../models/typemonument/typemonumentmodel.php");
		$libelle = trim(ucfirst($_POST['libelle']));
		$idTypeMonument= $_POST['idTypeMonument'];
			
		$_SESSION['libelle'] = $libelle;
		$_SESSION['msg_erreur'] = "";

		if( !empty($libelle)) {
			typeMonument_Update($idTypeMonument,$libelle);	
			if($_SESSION['msg_erreur'] == ""){	
				Header("Location: ../../controllers/typemonument/TypeMonumentListerAccept.php");
			}else{
				Header("Location: ../../views/typemonument/frmTypeMonumentModifier.php");	
			}
		} else {
			$_SESSION['msg_erreur'] = 'Libellé non renseigné';
			Header("Location: ../../views/typemonument/frmTypeMonumentModifier.php");
		}

        }else{
            header("Location: /monument/authentification.php");
        }
    }else{
        header("Location:  /monument/authentification.php");
    }
	require_once("../../models/typemonument/typemonumentmodel.php");
	$libelle = trim(ucfirst($_POST['libelle']));
	$idTypeMonument= $_POST['idTypeMonument'];
		
	$_SESSION['libelle'] = $libelle;
	$_SESSION['msg_erreur'] = "";

	if( !empty($libelle)) {
		typeMonument_Update($idTypeMonument,$libelle);	
		if($_SESSION['msg_erreur'] == ""){	
			Header("Location: ../../controllers/typemonument/TypeMonumentListerAccept.php");
		}else{
			Header("Location: ../../views/typemonument/frmTypeMonumentModifier.php");	
		}
	} else {
		$_SESSION['msg_erreur'] = 'Libellé non renseigné';
		Header("Location: ../../views/typemonument/frmTypeMonumentModifier.php");
	}
	
	
?>