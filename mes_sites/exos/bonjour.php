<html>
<body>


<?php 
if(isset($_GET['nom']) && issset($_GET['prenom'])){
    echo "Bienvenue". " " .$_GET['nom'] . " ". $_GET['prenom'];
}else{
    echo "Vous devez envoye Nom et Prenom";
}
echo "<br>";



if(isset($_GET['nom'],$_GET['prenom'])){
    $vnom=$_GET['nom']; 
    $vprenom=$_GET['prenom'];
    echo "Bienvenue $vnom $vprenom";
    echo "<br>";
}else{
    echo "Vous devez envoye Nom et Prenom";
}

//header("location:adresse de la page")



?>
</body>
</html>