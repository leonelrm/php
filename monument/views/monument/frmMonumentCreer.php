<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
  //require_once('../../model/typemonument/typemonumentmodel.php');
  session_start();
  $listeTypeMonument = $_SESSION['listeTypeMonument'];
  
?>
</head>
<body style='background-color: gray; text-align: center;'>
<h1>MONUMENTS</h1>


  <form action="../../controller/monument/MonumentCreeraccept.php" method="post">
    <label for="nomMonument">Nom du Monument :</label>
    <input type="text" id="id_libelle" name="nomMonument"  placeholder="Entrez  le Nom du Monument" autofocus>
    <br>
    <br>
    <label for="arrMonument">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arrodissement :</label>
    <input type="text" id="id_libelle" name="arrMonument"  placeholder="Entrez  arrodissement" autofocus>
    <br>
    <br>
    <label for="adrMonument">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adresse :</label>
    <input type="text" id="id_libelle" name="adrMonument"  placeholder="Entrez  l'adresse" autofocus>
    <br>
    <br>
    <label for="siteMonument">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site Web :</label>
    <input type="text" id="id_libelle" name="siteMonument"  placeholder="Entrez  le Site Web" autofocus>
    <br>
    <br>
    <option> </option>
    <label>Type Monument</label>
    <select name="idTypeMonument"> 
    <option></option>
    <?php foreach($listeTypeMonument as $ligne) {?> 
    
    <option value=""><?php echo $ligne['Libelle_TYPE_Monument'];?></option>    
    <?php
    }
    ?>
    </select>
    <br>
    <br>
    <button type="submit" class="btn btn-primary">Valider</button>
  </form>
  <br>
  <br>
  <button type="submit" class="btn btn-primary"><a href="ListeMonument.php"> Retour</a></button>
</body>
</html>