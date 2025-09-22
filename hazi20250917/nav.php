<?php
$menu_items = ["Home", "Products", "About", "Contact"];


?>

<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;

    }
    li{
        float: left;
    }
    li a {
        display: block;
        color: darkgray;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        border: 1px solid darkgray;
    }
    li a:hover {
        background-color: gray;
    }
    li a.active{
        background: lightgray;
    }
</style>

<header>
    <nav>
        <ul>
            <?php foreach($menu_items as $menu_item): ?>
                <li>
                    <a <?= "href= #". urlencode($menu_item) ."" ?>> <?=  $menu_item ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>

