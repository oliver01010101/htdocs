<?php
$submitted = false;
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $submitted = true;
    $result = $_POST;
}
?>
<h1>
    <i>circle</i>
    új filmvetítés felvétele
</h1>

<?php if ($submitted): ?>

    <h5>Sikeres adatbevitel</h5>
    <div>
        Az alábbi adatok lettek felvéve
        <table>
            <tr>
                <td><strong>Cim:</strong></td>
                <td><?= $_POST['cim'] ?></td>
            </tr>
            <tr>
                <td><strong>Rendező:</strong></td>
                <td><?= $_POST['rendeő'] ?></td>
            </tr>
            <tr>
                <td><strong>Dátum:</strong></td>
                <td><?= $_POST['dátum'] ?></td>
            </tr>
        </table>
    </div>
<?php else: ?>
    <form action="index.php?page=create" method="GET">

    </form>
<?php endif; ?>
