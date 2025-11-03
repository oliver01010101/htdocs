<?php
declare(strict_types=1);
function osszead(int $a, int $b): int
{
    return $a + $b;
}

echo osszead(5, (int)"7");

echo "<hr>";


function osztas(int $a, int $b): float|string{
    if ($b == 0){
        return "Hiba: nullával osztás";
    }
    return $a / $b;
}

function query(string $table, string|array$condition = null)
{
    return "";
}

query("alma", "age >= 1");
