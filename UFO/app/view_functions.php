<?php
function generate_menu_new($pages, $active_page){
    $cr = "<nav class='navbar navbar-expand-lg navbar-light bg-light'>";
    $cr .= "<ul class='list-group'>";
    foreach ($pages as $k => $v) {
        $cr .= '<li class="list-group-item"><a ' . ($k === $active_page ? 'class="active"' : '') . ' href="?page=' . $k . '">' . $v["title"] . '</a></li>';
    }
    $cr .= "</ul>";
    $cr .= "</nav>";
}


function generate_menu($pages, $active_page){
    echo "<nav class='navbar navbar-expand-lg navbar-light bg-light'>";
    echo "<ul class='list-group'>";
    foreach ($pages as $k => $v) {
        if ($k == $active_page) {
            echo '<li><a class="active list-group-item" href="?page=' . $k . '">' . $v["title"] . '</a></li>';
        } else{
            echo '<li><a class="list-group-item" href="?page=' . $k . '">' . $v["title"] . '</a></li>';
        }
    }
    echo "</ul>";
    echo "</nav>";
}
?>