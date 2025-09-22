<?php

$numbers = [1, 2, 3, 4, 5];

echo $numbers[2];
echo "<br>";
echo "<br>";
$tomb = [
    "cim" => "példakönyv",
    "szerző" => "Andorko Zsolt",
    "év" => 67,

];

echo $tomb["cim"];
echo "<br>";
echo "<br>";

$konyv = [
    "1234567891234" => ["cim" => "példakönyv1", "szerző" => "Andorko Zsolt", "év" => 67],
    "5473592371233" => ["cim" => "911", "szerző" => "Nyomorek Csongor", "év" => 2001],
    "6767676767676" => ["cim" => "példakönyv3", "szerző" => "Vicc Elek", "év" => 1234],
];

echo $konyv["5473592371233"]["szerző"] . ": " . "(" . $konyv["5473592371233"]["év"] . ")";
?>
