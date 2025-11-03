<?php
/*
function stats_count($array):int
{
    $db = 0;
    for ($i = 0; $i < count($array); $i++) {
        $db++;
    }
    return $db;
}
function stats_avg_age($array):int{
    $avg_age = 0;
    foreach ($array as $key) {
        $avg_age += $key["reporter"]["age"];
    }

    return $avg_age / count($array);
}
function stats_day_of_sighting($array): array {
    $day_of_sighting = [];
    foreach ($array as $key) {
        if (isset($key["datetime"])) {
            $new_date = strtotime($key["datetime"]);
            if ($new_date !== false) {
                $day_of_sighting[] = date("Y-m-d H:i:s", $new_date);
            }
        }
    }
    return $day_of_sighting;
}
*/
function filter_by_name($array, $query) {
    $new_array = [];
    foreach ($array as $k => $v) {
        if(str_contains($v["reporter"]["name"], $query)) {
            $new_array[] = $v;
        }
    }
    return $new_array;
}