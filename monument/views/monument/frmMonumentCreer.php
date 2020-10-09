<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
  require_once('monument/model/typemonument/typemonumentmodel.php')
  $listeTypeMonument = $_SESSION['listeTypeMonument'];
  session_start();
  
?>
</head>
<body style='background-color: gray; text-align: center;'>
<h1>MONUMENTS</h1>


  <form action="../../controller/typemonument/TypeMonumentCreeraccept.php" method="post">
    <label for="nom_monument">Nom Monument</label>
    <input type="text" id="id_libelle" name="nom_monument"  placeholder="Entrez  un Monument" autofocus>
    <br>
    <br>
    <label for="arr_monument">Arrodissement&nbsp;</label>
    <input type="text" id="id_libelle" name="arr_monument"  placeholder="Entrez  un Monument" autofocus>
    <br>
    <br>
    <label for="adr_monument">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adresse</label>
    <input type="text" id="id_libelle" name="adr_monument"  placeholder="Entrez  un Monument" autofocus>
    <br>
    <br>
    <label for="site_monument">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site Web</label>
    <input type="text" id="id_libelle" name="site_monument"  placeholder="Entrez  un Monument" autofocus>
    <br>
    <br>
    <select name="id_type_monument"> 
    <?php foreach($listeTypeMonument as $ligne) {?> 
    <?php echo $ligne?>
    <a href="../../controller/typrtypemonument/MonumentListerAccept.php"></a> 
    <option value=""><?php echo $ligne?></option>    
    </select>
    <br>
    <br>
    <button type="submit" class="btn btn-primary">Valider</button>
  </form>
  <br>
  <br>
  <button type="submit" class="btn btn-primary"><a href="ListeTypeMonument.php"> Retour</a></button>
</body>
</html>