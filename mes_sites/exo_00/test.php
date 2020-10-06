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









?>




    <!-- Caractères échappés
Séquence	Signification
\n	Fin de ligne (LF ou 0x0A (10) en ASCII)
\r	Retour à la ligne (CR ou 0x0D (13) en ASCII)
\t	Tabulation horizontale (HT or 0x09 (9) en ASCII)
\v	Tabulation verticale (VT ou 0x0B (11) en ASCII) (à partir de PHP 5.2.5)
\e	échappement (ESC or 0x1B (27) en ASCII) (à partir de PHP 5.4.4)
\f	Saut de page (FF ou 0x0C (12) en ASCII) (à partir de PHP 5.2.5)
\\	Antislash
\$	Signe dollar
\"	Guillemet double
\[0-7]{1,3}	La séquence de caractères correspondant à cette expression rationnelle est un caractère, en notation octale, qui débordera silencieusement pour s'adapter à un octet (e.g. "\400" === "\000")
\x[0-9A-Fa-f]{1,2}	La séquence de caractères correspondant à cette expression rationnelle est un caractère, en notation hexadécimale
\u{[0-9A-Fa-f]+}	La séquence de caractères correspondant à l'expression régulière est un point de code Unicode, qui sera la sortie de la chaîne de caractères représentant le codepoint UTF-8 (ajouté en PHP 7.0.0) -->
</body>

</html>