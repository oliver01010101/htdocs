<?php
$students = [
    ["nev" => "Kiss Kata", "allapot" => "hianyzik"],
    ["nev" => "Nagy Peter", "allapot" => "hianyzik"],
    ["nev" => "Varga Oliver", "allapot" => "jelen"],
    ["nev" => "Andonko Zsolt", "allapot" => "jelen"],
    ["nev" => "El-Nabultsy Csongor Alan", "allapot" => ""],
];
?>

<ul>
    <?php foreach ($students as $key => $value): ?>
        <li>
            <?= htmlspecialchars($value['nev']) . ' | ' . htmlspecialchars($value['allapot']) . ': '; ?>
            <?php if($value['allapot'] === "hianyzik"): ?>❌<?php elseif($value['allapot'] === "jelen"): ?>✅<?php else: ?><p>Nincs adat</p><?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>