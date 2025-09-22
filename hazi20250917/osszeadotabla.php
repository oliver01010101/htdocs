<style>
    table,td,th {
        border: 1px solid #c1c1c1;
        border-collapse: collapse;
        padding: 8px;
        text-align: center;
    }
</style>

<?php
$size = 10;
?>
<table>
    <tr>
        <th>+</th>
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
                    <?= $row + $col; ?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>

</table>
