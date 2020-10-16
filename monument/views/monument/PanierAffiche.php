<?php
	session_start();

	foreach ($_SESSION['panier'] as $lignePanier) {
		echo $lignePanier['dateCreation'] . "\t " . $lignePanier['nomMonument'] . "\t " . $lignePanier['idMonument'] . "<br>";
	}
	
?>