!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon premier site</title>

</head>

<body>
    <!--  On insert la balise php dans le body
echo pour afficher du text
exit pour arrêter le script
declaration de la variable avec un $devant le variable ex $var=1;
php est un langage non typé on peux donc forcer le type avec settype (entier int, string,...
settype renvoi une réponse booléen 0 OU 1 si ça bien été executé -->

<?php
echo "Bienvenue sur mon site"."\n".
"message inseré par echo <br>";

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


//tables
	$fruits= array();
	$fruits[0]= ("pomme");
	$fruits[1]= ("orange");
	$fruits[]= ("banane");
	echo $fruits[2]."<br>" ;
	$fruits[2]="raisin";

//afficher table
        print_r($fruits)."<br>";
echo "<br>";
	var_dump($fruits)."<br>";
echo "<br>";
	echo sizeof($fruits)."<br>";
echo "<br>";
	echo is_array($fruits)."<br>";

	echo end($fruits)."<br>";
	
	echo prev($fruits)."<br>";
	
	echo current($fruits)."<br>";
	
	echo next($fruits)."<br>";
	
	sort($fruits);
	print_r($fruits)."<br>";
echo "<br>";
	//echo each($fruits)."<br>";
	
	//echo key($fruits);
//tableaux associtif
 // 'cle' => valeur
	$calorie=array();
	$calorie["pomme"]=300;
	$calorie["banane"]=130;
	print_r($calorie["pomme"])."<br>";
echo "<br>";
//variables predefinie
//$_globals;


//$_SERVER
print_r($_SERVER);
echo "<br>";
echo "<br>";



print_r($_SERVER[SERVER_NAME]);
echo "<br>";

//$_GET

//S_POST

//$_COOKKIE

//$_FILES

//$_SESSION

//FUNCTION CARACTERES

//strlen();
//$phrase="je vous aime tous";
//echo strlen($phrase)."<br>";

//strtoupper()

echo strtoupper($phrase)."<br>";

//strtolower

echo strtolower($phrase)."<br>";

//ucfirst()

echo ucfirst($phrase)."<br>";

//ucword()

echo ucwords($phrase)."<br>";

//strstr()

echo strstr($phrase,"aime")."<br>";

//strpos()
echo strpos($phrase,"aime")."<br>";

//substr()

echo substr($phrase,5,6)."<br>";
echo substr($phrase,5)."<br>";

//explode(separateur,chaine,limit) coupe une chaine en segment

print_r(explode(" ",$phrase))."<br>";

//date
$ladate="01/10/2020";
echo "<br>";
echo "le jour est ", substr($ladate,0,2)."<br>";
echo "le mois est ", substr($ladate,3,2)."<br>";
echo "l'année est ", substr($ladate,6,4)."<br>";

$ndate=explode("/",$ladate);
print_r($ndate);
echo "<br>le jour est ", $ndate["0"];
echo "<br>le jour est ", $ndate["1"];
echo "<br>le jour est ", $ndate["2"];
echo "<br>";
//if(condition){
// bloc de commandes
//} else{
// bloc de commandes
//}

$age=25;
if($age<15){
	echo "Pas de sortie";
}else{
	echo "attention";
};

//switch plussier if
switch(condition){
	case valeur_1 :
	block de commandes
	break;
	case valeur_n :
	block de comandes
	default:
	block de commandes
	}

//while
//while(condition){
//block de commandes
//}

/*$phrase="je vous aime";

$i=1;
while($i<=strlen($phrase)){

$car= substr($phrase,$i-1,1);

if($car != " "){

echo "le  $i  caractere est: ", strtoupper($car);
echo "<br>";
}
$i++;
}
*/

/*do{
bloc de commandes
}while(condition)

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


/*for(initialization;condition;pas){
}

for($i=1; $i<=10; $i++){
echo $i;
}

foreach(expression_array as $valeur){
conditions
}
*/

 //tables
        $fruits= array();
        $fruits[0]= ("pomme");
        $fruits[1]= ("orange");
        $fruits[]= ("banane");
        echo $fruits[2]."<br>" ;
        $fruits[2]="raisin";

foreach($fruits as $unfruit){
echo "<br>$unfruit";
}

//foreach(foreach(expression_array as $key=$valeur){
//bloc d'instruction
//}

//tableaux associtif
 // 'cle' => valeur
        $calorie=array();
        $calorie["pomme"]=300;
        $calorie["banane"]=130;
        print_r($calorie["pomme"])."<br>";
echo "<br>";

foreach($calorie as $key=>$uncalorie){
echo "<br>$key $uncalorie";
}



//foreach($_SERVER as $key=>$total){
//echo "<br>$key $total";
//}

$navigateur=$_SERVER["HTTP_USER_AGENT"];
ECHO "<br>$navigateur";

if(strpos($navigateur,"Firefox")){
echo "<br>mon navigateur est Mozilla Firefox";
}else if(strpos($navigateur,"Chrom")) {
echo "<br>mon navigateur est Google Chrome";
}else{
echo "<br>Navigateur non identifie";
}


//function
// nom_function(arg1,.....arg_n){
//bloc de commandes
//return resultat;
//}

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