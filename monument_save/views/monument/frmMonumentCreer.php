<!DOCTYPE HTML>
<head>
	<?php
		session_start();
	?>
</head>
<html>  
<body>

	<form action="../../controllers/typemonument/TypeMonumentCreerAccept.php" method="post">
		
		Nom monument: <input type="text" name="nom_monument" autofocus><br>
		Arrondissement: <input type="text" name="arr_monument" autofocus><br>
		<button type="submit" >Valider</button>
		
	</form>

</body>
</html>