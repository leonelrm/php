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
    <label for="nom_monument">Nom du Monument :</label>
    <input type="text" id="id_libelle" name="nom_monument"  placeholder="Entrez  le Nom du Monument" autofocus>
    <br>
    <br>
    <label for="arr_monument">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arrodissement :</label>
    <input type="text" id="id_libelle" name="arr_monument"  placeholder="Entrez  arrodissement" autofocus>
    <br>
    <br>
    <label for="adr_monument">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adresse :</label>
    <input type="text" id="id_libelle" name="adr_monument"  placeholder="Entrez  l'adresse du Monument" autofocus>
    <br>
    <br>
    <label for="site_web_monument">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site Web :</label>
    <input type="text" id="id_libelle" name="site_web_monument"  placeholder="Entrez  le Site Web du Monument" autofocus>
    <br>
    <br>
    <option></option>
    <label for="type-monument">Type Monument :</label>
    <select name="id_type_monument"> 
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