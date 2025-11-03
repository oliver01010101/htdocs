<h1>
    <i>event</i>
    <?= $page_title ?>

</h1>

<!-- szűrés űrlap -->
<form method="GET" action="index.php">
    <input type="hidden" value="events" name="page">

    <select name="year">
        <option value="">összes</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
    </select>

    <input type="submit" name="submit" value="Szűrés">
</form>

<!-- Események táblázat -->
<?php if (empty($movies)): ?>

    Nincs vetítés
    <?php if ($filter_year): ?>
        Nincs vetítés <?= $filter_year ?> évben.
    <?php else: ?>
        Még nincsenek vetítések a rendszerben
    <?php endif; ?>

<?php else: ?>

    Filmek száma: <?= count($movies) ?>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Cim</th>
            <th>Rendező</th>
            <th>Dátum</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($movies as $movie): ?>
                <?= render_movie_row($movie) ?>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>