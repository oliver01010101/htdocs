<?php
require_once 'app/data.php';

require_once 'app/functions.php';
require_once 'app/view_functions.php';

//$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$page = $_GET['page'] ?? 'home';

include 'view/partials/header.template.php';

switch ($page) {
    case 'events':
        $filter_year = $_GET["year"] ?? null;
        $movies = [];
        $page_title = "Összes filmvetítés";
        if ($filter_year) {
            $movies = filter_movies_by_year($filter_year);
            $page = "Filmvetítések - " . $filter_year;
        }
        else
        {
            $movies = get_all_movies();
        }
        include 'view/pages/events.template.php';
        break;
    case 'create':
        $submitted = false;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $submitted = true;
            $result = $_POST;
        }
        include 'view/pages/create.template.php';
        break;
    case 'home':
    default:
        include 'view/pages/home.template.php';
        break;
}

include 'view/partials/footer.template.php';