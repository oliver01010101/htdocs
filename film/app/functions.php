<?php


/**
 * Összes filmvetítés betöltése JSON fájlból
 * @return array - filmvetítések tömbje
 */
function get_all_movies() :array
{
    $json_file = __DIR__ . '/movies.json';

    $json_content = file_get_contents($json_file);
    $movies = json_decode($json_content, true);

    if ($movies === null) {
        return [];
    }
    return $movies;
}

/**
 * Filmek szűrése év szerint
 * @param int $year - a keresett év
 * @return array - szűrt filmvetítések tömbje
 */
function filter_movies_by_year(int $year) :array
{
    $all_movies = get_all_movies();
    $filtered_movies = [];

    foreach ($all_movies as $movie) {
        $movie_year = date('Y', strtotime($movie['dátum']));
        // explode('-',$movie['dátum'])[0]

        if ($movie_year == $year) {
            $filtered_movies[] = $movie;
        }
    }

    return $filtered_movies;
}