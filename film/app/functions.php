<?php
/**
 * összes filmvetítés betöltése JSON filebol
 * @return array - filmvetitések tömbje
 */
function get_all_movies() : array
{
    $json_file = __DIR__ . '/movies.json';
    $json_contents = file_get_contents($json_file);
    $movies = json_decode($json_contents, true);

    if ($movies === null) {
        return [];
    }
    return $movies;
}

/**
 * filmek szűrése év szerint
 * @param int $year - keresett év
 * @return array - szürt filmvetítések tömbje
 */
function filter_movies_by_year(int $year) : array
{
    $all_movies = get_all_movies();
    $filtered_movies = [];

    foreach ($all_movies as $movie) {
        $movie_year = date(strtotime($movie['dátum']));
        if ($movie_year == $year) {
            $filtered_movies[] = $movie;
        }
    }
    return $filtered_movies;
}