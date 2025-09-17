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