<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
  session_start();
  
?>
</head>
<body style='background-color: gray; text-align: center;'>
<h1>TYPE MONUMENTS</h1>


  <form action="TypeMonumentCreeraccept.php" method="post">
    <label for="libelle">Libelle</label>
    <input type="text" id="id_libelle" name="libelle"  placeholder="Entrez  un Monument" autofocus>
    <br>
    <br>
    <button type="submit" class="btn btn-primary">Valider</button>
  </form>
  <br>
  <br>
  <button type="submit" class="btn btn-primary"><a href="ListeTypeMonument.php"> Retour</a></button>
</body>
</html>