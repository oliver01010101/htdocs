<?php

$movies = [
    ['id' => 1, 'cím' => 'Inception', 'rendező' => 'Christopher Nolan', 'dátum' =>
        '2023-05-12'],
    ['id' => 2, 'cím' => 'The Matrix', 'rendező' => 'Lana Wachowski', 'dátum' =>
        '2023-06-01'],
    // stb.
];

$json_file = __DIR__ . '/movies.json';
if (!file_exists($json_file)) {
    file_put_contents($json_file, json_encode($movies, JSON_PRETTY_PRINT));
}