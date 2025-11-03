<?php
function minKetto(int $a, int $b)
{
    if ($a > $b) {
        return $b;
    }else{
        return $a;
    }
}

function betuSzam(string $text)
{
    $char = 0;
    for($i = 0; $i < strlen($text); $i++){
        if($text[$i] !== ' '){
            $char++;
        }
    }
    return $char;
}

function parosE(int $numb)
{
    if ($numb % 2 == 0) {
        return "True";
    } else {
        return "False";
    }

}

function celsiusToFarenheit(float $C) :float|string
{
    return ($C * 9/5) + 32 . "°F";
}

function elsoBetu(string $text)
{
    return $text[0];
}

echo minKetto(3, 8);
echo "<br>";
echo betuSzam("asddsaasd");
echo "<br>";
echo parosE(325243123128);
echo "<br>";
echo celsiusToFarenheit(20.0);
echo "<br>";
echo elsoBetu("Elso karakter");



?>