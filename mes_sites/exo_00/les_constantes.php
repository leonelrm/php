<?php

//Les Constantes on la definit :
       
/* define("nom","toto");

pour afficher:
echo nom; */

define("nom","toto");
echo nom;

exit("<br>Fin d'exécution");
echo"Affaire à suivre (n'apparaitra pas car il y a exit avan)";



$phrase="je vous aime";

$i=1;
do{
$car= substr($phrase,$i-1,1);
if($car != " "){

echo "le  $i  caractere est: ", strtoupper($car);
echo "<br>";
}else{
echo "le caractere $i  est un espace<br>";
}
$i++;
}while($i<=strlen($phrase))




?>

