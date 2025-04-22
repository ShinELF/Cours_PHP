<?php

//Exercice 1
$chaine = "Bonjour";
$entier = 10;
$booleen = true;
echo gettype($chaine), PHP_EOL;
echo gettype($entier), PHP_EOL;
echo gettype($booleen), PHP_EOL;

//Exercice 2
$a = "10";
$b = 5;
$result = $a + $b;
echo $result, PHP_EOL;
//La chaine de caractère "10" est considérée comme un entier pour le calcul
var_dump($result);

//Exercice 3
$var = "123";
$var2 = (int) $var;
var_dump($var);
var_dump($var2);
$var3 = 7.8;
$var4 = (string) $var3;
var_dump($var3);
var_dump($var4);

//Exercice 4
$value = 0;
echo is_int($value), PHP_EOL;
echo empty($value), PHP_EOL;
$value = null;
echo is_int($value), PHP_EOL;
echo empty($value), PHP_EOL;
$value = "";
echo is_int($value), PHP_EOL;
echo empty($value), PHP_EOL;
$value = false;
echo is_int($value), PHP_EOL;
echo empty($value), PHP_EOL;
$value = [];
echo is_int($value), PHP_EOL;
echo empty($value), PHP_EOL;

//Exercice 5
$age = "35";
var_dump($age);
echo settype($age, "integer");
var_dump($age);

//Exercice 6
var_dump("0" == false);
var_dump("0" === false);
//== fait une comparaison simple, === fait une comparaison strict ("0" est une chaine de caractère et donc n'est pas vide)

//Exercice 7
$array = [83, 89.3, true, "test", null];

foreach($array as $element ) {
    var_dump($element);
};