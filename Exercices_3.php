<?php

//Exercice 1
$a = 8;
$b = 4;
$operation = '*';

if ($operation == '*') {
    $c = $a*$b;
    echo "$a $operation $b = $c", PHP_EOL;
} elseif ($operation == '+') {
    $c = $a+$b;
    echo "$a $operation $b = $c", PHP_EOL;
} elseif ($operation == '-') {
    $c = $a-$b;
    echo "$a $operation $b = $c", PHP_EOL;
} else {
    $c = $a/$b;
    echo "$a $operation $b = $c", PHP_EOL;
}

//Exercice 2
$result = 5 + 3 * 2;
echo $result, PHP_EOL;
$result = (5 + 3)* 2;
echo $result;

//Exercice 3
$x = 10;
var_dump($x > 5);
var_dump($x < 5);
var_dump($x == 10);
var_dump($x != 8);
var_dump($x >= 10);
var_dump($x <= 9);

//Exercice 4
$isAdmin = true;
$isLoggedIn = false;
var_dump($isAdmin && $isLoggedIn);
var_dump($isAdmin || $isLoggedIn);
var_dump($isAdmin xor $isLoggedIn);

//Exercice 5
$score = 15;
echo $score >=10 ? 'Réussi' : 'Echoué', PHP_EOL;

//Exercice 6
$n = 4;
echo ($n += 3), PHP_EOL;
echo ($n *= 2), PHP_EOL;
echo ($n -= 1), PHP_EOL;
echo ($n %= 5), PHP_EOL;

//Exercice 7
$prenom = "Alice";
$nom = "Durand";
$fullName = $prenom . ' ' . $nom;
echo $fullName, PHP_EOL;

//Exercice 8
$fichier = fopen('test', 'r');

@$fichier = fopen('test', 'r');
