
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

 $nom="Rosales";
 $prenom="leonel";
 echo"<br>Je m'appelle" ." ".$nom ." ".$prenom;
 echo "<br>";
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

 echo isset($a)."<br>unset<br>"; //N'affiche rien car la variable n'exixte plus

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

 define("nom","toto");

// pour afficher:
 echo nom; 

echo "<br>";

 define("nom","toto");
 echo nom;

echo "<br>";
echo "<br>";
echo "<br>";

echo "//tables<br>";
echo "<br>";

$fruits= array();
$fruits[0]= ("pomme");
$fruits[1]= ("orange");
$fruits[]= ("banane");
echo $fruits[2]."<br>" ;
$fruits[2]="raisin";

//afficher table

print_r($fruits);
echo "<br>";

var_dump($fruits);
echo "<br>";

echo sizeof($fruits);
echo "<br>";

echo is_array($fruits);
echo "<br>";

echo end($fruits);
echo "<br>";

echo prev($fruits);
echo "<br>";

echo current($fruits);
echo "<br>";

echo next($fruits);
echo "<br>";

sort($fruits);
print_r($fruits)."<br>";
echo "<br>";

echo each($fruits);
echo "<br>";

echo key($fruits);
echo "<br>";
echo "<br>";


echo"//tableaux associtif<br>";
echo "<br>";

 // 'cle' => valeur
	$calorie=array();
	$calorie["pomme"]=300;
	$calorie["banane"]=130;
	print_r($calorie["pomme"])."<br>";
echo "<br>";
echo "<br>";



//echo "variables predefinie<br>"
// $_globals
echo "<br>";
echo "<br>";

//$_SERVER

print_r($_SERVER);
echo "<br>";
echo "<br>";


print_r($_SERVER[SERVER_NAME]);
echo "<br>";
echo "<br>";

//$_GET

//S_POST

//$_COOKKIE

//$_FILES

//$_SESSION

//FUNCTION CARACTERES

//strlen();
$phrase="je vous aime tous";
echo strlen($phrase)."<br>";

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
echo "<br>";
echo "<br>";

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
echo "<br>";
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

/*switch plussier if
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
//}*/
echo "<br>";
echo "<br>";

$phrase="je vous aime";

$i=1;
while($i<=strlen($phrase)){

$car= substr($phrase,$i-1,1);

if($car != " "){

echo "le  $i  caractere est: ", strtoupper($car);
echo "<br>";
}
$i++;
}
echo "<br>";
echo "<br>";


//do{
//bloc de commandes
//}while(condition)
/*
$word="je vous aime";

$x=1;
do{

$car= substr($word,$x-1,1);

if($car != " "){

echo "le  $x  caractere est: ", strtoupper($car);
echo "<br>";

} else{
echo "le caractere $x  est un espace<br>";
}
$x++;
}while($x<=strlen($word))
*/
echo "<br>";
echo "<br>";

//for(initialization;condition;pas){
//}

for($a=1; $a<=10; $a++){
    echo "$a<br>";
}

//foreach(expression_array as $valeur){
//conditions
//}


 //tables
echo "<br>";

 $fruits= array();
 $fruits[0]= ("pomme");
 $fruits[1]= ("orange");
 $fruits[]= ("banane");
 echo $fruits[2]."<br>" ;
 $fruits[2]="raisin";

foreach($fruits as $unfruit){
echo "<br>$unfruit";
}
echo "<br>";
echo "<br>";

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

