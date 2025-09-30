<?php

function divide($a, $b)
{
    return $a / $b ? $b == 0 : "Hiba: nullával osztás";
}

echo divide(10, 2);