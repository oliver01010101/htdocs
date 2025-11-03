<?php
    declare(strict_types = 1);

    function generateMenu($pages, $active_page){
        echo '<ul class="nav nav-pills nav-justified">';
        foreach ($pages as $page_key => $page) {
            if ($active_page === $page_key) {
                echo '<li class="nav-item"><a class="nav-link active" href="?page='. $page_key .'">'. $page["title"] .'</a></li>';
            } else {
                echo '<li class="nav-item"><a class="nav-link" href="?page='. $page_key .'">'. $page["title"] .'</a></li>';
            }
        }
        echo "</ul>";
    }

    function render_book_row(array $book):string {
        $row = '<tr>';

        foreach ($book as $key => $value) {
            if ($key === "id") {
                $row = $row . '<th scope="row">'. $value .'</th>';
            } else {
                $row = $row . '<td>'. $value .'</td>';
            }
        }
        $row = $row . '</tr>';

        return $row;
    }
?>