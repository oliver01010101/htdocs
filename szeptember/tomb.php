<?php
    /*
     Indexelt tömbök - egész szám indexek, 0-tól
     Asszociatív tömbök - kulcsok szövegesek
    több dimenziós tömb
    */

//indexelt tömbök - egész szám indexek 0-tól
$fruits = array();
$fruits = [];
$fruits = ['barack', 'körte', 'szilva'];

print_r($fruits);
echo "<hr>";
var_dump($fruits);
echo "<hr>";

echo $fruits[0];

$fruits[0] = 'KÖRTE';
$fruits[3] = 'BANÁN';

$fruits[8] = 'Ananász';

$fruits[] = "Narancs";

echo "<hr>";
var_dump($fruits);
echo "<hr>";
echo "<hr>";

//Asszociatív tömbök - kulcsok szövegek

$student = [
    "nev" => "Kiss Péter",
    "kor" => 17,
    "osztály" => "12A",
    0 => "kiss Péter",
    1 => 17,
];
print_r($student);
var_dump($student);
echo "<hr>";

echo $student["nev"];

echo "<hr>";
echo "<hr>";

$student_classes = [
    "12A" => ["Anna", "Péter", "Krisztina"],
    "12B" => ["Anita", "Anasztázia", "Emil"],
];

print_r($student_classes);

echo "<hr>";
echo "<hr>";




?>