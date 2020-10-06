<?php

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


?>
