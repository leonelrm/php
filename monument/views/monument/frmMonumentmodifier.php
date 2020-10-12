<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
  session_start();
  $typeMonument = $_SESSION['typemonument'];
?>
</head>
<body style='background-color: gray; text-align: center;'>
<h1>MODIFICATION DES TYPES DE MONUMENTS</h1>


  <form action="../../controller/typemonument/TypeMonumentModifierAccept.php" method="post">
    <input type="hidden" name="idTypeMonument"  value="<?php echo $typeMonument['ID_TYPE_Monument'];?>">    
    <label for="libelle">Libelle</label>
    <input type="text" id="id_libelle" name="libelle"  placeholder="Entrez  un Monument" value="<?php echo $typeMonument['Libelle_TYPE_Monument'];?>" autofocus>
    <br>
    <br>
    <button type="submit" class="btn btn-primary">Valider</button>
  </form>

</body>
</html>