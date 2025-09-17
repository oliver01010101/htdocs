<?php
$timetable = [
    "Hétfő" => ["Matematika","Matematika", "Magyar", "Történelem", "Történelem"],
    "Kedd" => ["Backend", "Backend", "Backend", "Backend", "Backend", "Backend"],
    "Szerda" => ["Magyar", "Magyar","Magyar", "Történelem", "Matematika"],
    "Csütörtök" => ["Backend", "Backend", "Backend", "Backend", "Backend", "Backend"],
    "Péntek" => ["Biológia", "Pénzügyi ismeretek", "Munkavégyi ismeretek", "Földrajz","Angol", "Osztályfőnöki"]
];

$subjects = array_values($timetable);
foreach ($subjects as $key => $value) {
    $maxSubjects = count($subjects[$key]);

}
?>

<style>
    table,td,th {
        border: 1px solid #999;
        border-collapse: collapse;
        padding: 4px;
        text-align: center;
    }
</style>

<table>
    <tr>
        <th></th>
        <?php foreach ($timetable as $key => $value): ?>
            <th><?= $key ?></th>
        <?php endforeach; ?>
    </tr>

    <?php for($j = 0; $j < $maxSubjects; $j++): ?>
        <tr>
            <th><?= $j + 1 ?></th>
            <?php foreach($subjects as $daySubjects): ?>
                <td>
                    <?= isset($daySubjects[$j]) ? $daySubjects[$j] : '' ?>
                </td>
            <?php endforeach; ?>
        </tr>
    <?php endfor; ?>
</table>