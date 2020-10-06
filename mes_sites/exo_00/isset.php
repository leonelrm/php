<?php

$a=3.14;
$b=settype($a,"int");
        echo "a=".$a."<br>b=".$b;
        //ou autre écriture
        echo "<br>a=$a b=$b";
        
        $nom="Ndombe";
        $prenom="Mirna";
        echo"<br>Je m'appelle" ." ".$nom ." ".$prenom;
      
        $a=2;
        $b=&$a; //LE & reference la variable donc si on change sa valeur elle change aussi dans b
        echo "<br>a=$a b=$b";
        $a=10;
        echo "<br>a=$a b=$b<br>";

        //ISSET() permet de savoir si une variable est déclaré donc retourn vrai ou faut donc 1 OU RIEN
        // UNSET() détruit la variable
        //EMPTY() de permet de voir si la variable est vide donc affiche 1 SINON 0
        $a=1;
        echo isset($a);
        unset($a) ;
        echo isset($a)."<br>unset<br>";//N'affiche rien car la variable n'exixte plus
      
        $a=1;
        $b=2;
        echo $a+$b;

        $a=1;
        $b="10 merveilles";
        echo $a + $b."<br>";

        $a=1;
        $b=2;
        $a+=$b;
        echo "a=$a b=$b <br>";


?>