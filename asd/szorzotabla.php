<style>
    table,td,th {
        border: 1px solid #999;
        border-collapse: collapse;
        padding: 4px;
        text-align: center;
    }
</style>


<?php
$size = 10;
echo "<table>";
    echo "<tr>";
        echo "<th>&times; </th>";
        for($j = 1; $j <= $size; $j++){
            echo "<th>$j</th>";
        }
    echo "</tr>";
    for($row = 1; $row <= $size; $row++){
        echo "<tr>";

            echo "<th>$row</th>";
            for($col = 1; $col <= $size; $col++){
                echo "<td>" . ($row * $col) . "</td>";
            }

        echo "</tr>";
    }



echo "</table>";
?>

<hr>

<table>
    <tr>
        <th>&times;</th>
        <?php for($j = 1; $j <= $size; $j++): ?>
            <th>
                <?= $j ?>
            </th>
        <?php endfor; ?>
    </tr>
    <?php for($row = 1; $row <= $size; $row++): ?>
        <tr>
            <th> <?= $row ?> </th>

            <?php for($col = 1; $col <= $size; $col++): ?>
                <td>
                    <?= $row * $col; ?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>

</table>
