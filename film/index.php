<?php
require_once 'app/data.php';
require_once 'app/functions.php';
require_once 'app/view_functions.php';

$page = $_GET['page'] ?? 'home';

include 'view/partials/header.template.php';

switch ($page) {
    case 'events':
        $filter_year = $_GET["year"] ?? null;
        $movies = [];
        $page_title = 'Összes filmvetítés';
        if ($filter_year) {
            $movies = filter_movies_by_year($filter_year);
            $page = 'Filmvetítés - ' . $filter_year;
        }
        else{
            $movies = get_all_movies();
        }
        include 'view/pages/events.template.php';
        break;
    case 'create':
        include 'view/pages/create.template.php';
        break;
    case 'home':
        include 'view/pages/home.template.php';
        break;
}

include 'view/partials/footer.template.php';