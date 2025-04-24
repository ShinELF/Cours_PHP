<?php

//Exercice 1
for ($i = 1; $i <= 10; $i++) {
    echo $i, PHP_EOL;
};

//Exercice 2
$somme = 0;
while ($somme < 10) {
    $somme++;
};
echo $somme, PHP_EOL;

//Exercice 3
$a = 0;
do {
    echo ++$a, PHP_EOL;
} while ($a < 5);

//Exercice 4
$fruits = ["pomme", "banane", "orange", "kiwi"];
foreach ($fruits as $value) {
    echo $value, PHP_EOL;
};

//Exercice 5
$personne = ["nom" => "toto", "age" => "34"];
foreach ($personne as $index => $value) {
    echo "Index: $index, Valeur: $value", PHP_EOL;
};

//Exercice 6
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i, PHP_EOL;
};

//Exercice 7
$nombres = [1, 2, 3, 4, 5, 6];
foreach ($nombres as $value) {
    if ($value % 2 == 1) {
        continue;
    }
    echo $value, PHP_EOL;
};

//Exercice 8
for ($i = 10; $i >= 0; $i -= 1) {
    echo $i, PHP_EOL;
}

//Exercice 9
