<?php
/*
    count($arr) - elenek száma
    array_push($arr, $new_item) - elem hozzáadása
        $arr[]
    array_pop($arr) - utolsó elem kivétele
    array_keys($arr) - tömb kulcsainak listája
    array_values($arr) - tömb értékeinek listája
    sort(), rsort() - rendezés (érték)
    asort(), ksort() - asszociatív tömböt rendez a-érték szerint, k-kulcs szerint
 */

$numbers = [4, 8, 16, 32, 64];
print_r($numbers);

echo PHP_EOL;

echo "count() ::" - count($numbers);

echo PHP_EOL. PHP_EOL;

$number = array_pop($numbers);

echo "array_pop() :: popped number ::" . $number;

echo PHP_EOL . PHP_EOL;

print_r($numbers);

rsort($numbers);

print_r($numbers);

echo "<hr>";
echo "<hr>";

$student = [
    'name' => 'Péter',
    'age' => 17,
];

print_r($student);
echo PHP_EOL . PHP_EOL;

print_r(array_keys($student));
echo PHP_EOL . PHP_EOL;

print_r(array_values($student));
echo PHP_EOL . PHP_EOL;



?>