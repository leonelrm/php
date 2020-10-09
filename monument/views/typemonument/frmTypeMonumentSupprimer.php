<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
  session_start();
  $typemonument = $_SESSION['typemonument'];
  print_r($typemonument);
?>
</head>
<body style='background-color: gray; text-align: center;'>
<h1>SUPPRIMER </h1>


  <form action="../../controller/typemonument/TypeMonumentSupprimerAccept.php" method="post">    
    <input type="hidden" name="idTypeMonument"  value="<?php echo $typemonument['ID_TYPE_Monument'];?>">    
    <label for="libelle">Libelle</label>
    <input type="text" id="id_libelle" name="libelle" value="<?php echo $typemonument['Libelle_TYPE_Monument'];?>" disabled>
    <br>
    <br>
    <button type="submit" class="btn btn-primary">Supprimer</button>
    <br>
    <br>
  </form>
  <a href="../../views/typemonument/ListeTypeMonument.php"><button>Retour</button></a>
</body>
</html>