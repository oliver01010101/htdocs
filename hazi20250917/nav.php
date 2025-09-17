<?php
$menu_items = ["Home", "Products", "About", "Contact"];


?>

<ul>
    <?php foreach($menu_items as $menu_item): ?>
        <li>
            <a <?= "href= #". $menu_item ."" ?>> <?=  $menu_item ?></a>
        </li>
    <?php endforeach; ?>
</ul>
