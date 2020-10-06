<?php
//copier un fichier
//copy(fichiersource,fichierdest)
//$id= fopen(nomfichier,mode)
//fread($id,longueur)
//fclose($id)

$id=fopen("copie.php","r");
if($id){
    rewind($id);
    while (!feof($id)){
        $ligne= fgets($id);
        echo $ligne;
    }
    fclose($id);
}else{
    echo "<br>impossible d'ovrir le fichier";
}

//include inserer un fichier
//require 
//setlocale  pour travaille en francais

//setlocale

echo date(d/m/Y);





?>
