<?php

$fruits = ["Apple", "Banana", "Orange", "Mango", "pear"];

echo "<h3>for php</h3>";
echo "<ul>";
    for ($i = 0; $i < count($fruits); $i++) {
        echo "<li>";
            echo htmlspecialchars($fruits[$i]);
        echo "</li>";
    }
echo "</ul>";


echo "<h3>foreach php</h3>";
echo "<ul>";
foreach ($fruits as $fruit) {
    echo "<li>";
    echo htmlspecialchars($fruit);
    echo "</li>";
}
echo "</ul>";


?>

<h3>for html-php</h3>
<ul>
    <?php for ($i = 0; $i < count($fruits); $i++): ?>
        <li>
            <?= $fruits[$i] ?>
        </li>
    <?php endfor; ?>
</ul>


<h3>for html-php</h3>
<ul>
    <?php foreach ($fruits as $fruit): ?>
        <li>
            <?= $fruit ?>
        </li>
    <?php endforeach; ?>
</ul>
