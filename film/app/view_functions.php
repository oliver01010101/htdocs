<?php

function render_movie_row(array $movie) : string
{
    $date = date('Y. m. d.' ,strtotime($movie['dátum']));

    $html = '<tr>';
    $html .= '<td>' . htmlspecialchars($movie['id']) . '</td>';
    $html .= '<td>' . htmlspecialchars($movie['cím']) . '</td>';
    $html .= '<td>' . htmlspecialchars($movie['rendező']) . '</td>';
    $html .= '<td>' . $date . '</td>';
    $html .= '<tr>';

    return $html;
}