<?php

echo "<h3>while</h3>";

$i = 1;
while($i <= 10){
    echo $i . "";
    $i++;
}

echo "<h3>do-while</h3>";
$j = 1;
do {
    echo $j . " ";
    $j++;
} while($j <= 10);

echo "<h3>for</h3>";

for($k = 1; $k <= 10; $k++){
    echo $k . " ";

}

echo "<h3>foreach</h3>";
$students = ["Ármin", "Csongor", "Márton", "András"];
foreach($students as $student){
    echo $student . "<br>";
}
echo "<h3>foreach (asszociativ tömb)</h3>";

/*
    0 => Ármin
    1 => Csongor
    2

    name => Ármin
    age => 21
    class => 13
*/

$student = [
    "név" => "Kata",
    "életkor" => 30,
    "osztály" => "2/14"
];

foreach($students as $key => $value){
    echo "key: $value<br>";
}
?>