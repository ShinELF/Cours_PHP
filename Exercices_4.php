<?php

//Exercice 1
$age = 17;

if ($age >= 18) {
    echo 'Majeure', PHP_EOL;
} else {
    echo 'Mineur', PHP_EOL;
};

//Exercice 2
$nombre = 58;

if ($nombre > 0) {
    echo 'Positif', PHP_EOL;
} elseif ($nombre < 0) {
    echo 'Négatif', PHP_EOL;
} else {
    echo 'Nul', PHP_EOL;
};

//Exercice 3
$nombre = 59;

if ($nombre % 2 == 0) {
    echo 'Pair', PHP_EOL;
} else {
    echo 'Impair', PHP_EOL;
};

//Exercice 4
$age = 28;

if ($age >= 18 && $age <= 65) {
    echo 'Vous faites partit des 18/65 ans', PHP_EOL;
} else {
    echo 'Vous ne faites pas partit des 18/65ans', PHP_EOL;
};

//Exercice 5
$password = "1234";
echo $password == "" ? 'Mot de passe invalide': 'Mot de passe valide', PHP_EOL;

//Exercice 6
$nombre = 60;
echo $nombre %3 == "0" && $nombre %5 == 0 ? 'Divisible par 3 et 5': 'Non divisible par 3 et 5', PHP_EOL;

//Exercice 7
$temperature = 23;
if ($temperature >= 15) {
    if ($temperature > 30) {
        echo "Eau chaude", PHP_EOL;
    } else {
        echo "Eau modérée", PHP_EOL;
    }
} else {
    echo "Eau froide", PHP_EOL;
};

//Exercice 8
$nombre = $_GET["nombre"];
if (is_int($nombre)) {
    echo "Le nombre saisi est un entier", PHP_EOL;
} else {
    echo "Erreur: le nombre saisi n'est pas un entier", PHP_EOL;
};

//Exercice 9
$personne = ['nom' => 'toto', 'âge' => '34', 'ville' => 'Montpellier'];
if ($personne["ville"] == '') {
    echo "La clé ville n'existe pas", PHP_EOL;
} else {
    echo "La clé ville existe", PHP_EOL;
};