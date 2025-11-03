<h1 class="page-title">
    <i class="material-icons large">event</i>
    <?= $page_title ?>
</h1>

<!-- Szűrés űrlap -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <span class="card-title">
                    <i class="material-icons">filter_list</i>
                    Szűrés év szerint
                </span>
                <form action="index.php" method="GET">
                    <input type="hidden" name="page" value="events">

                    <div class="row">
                        <div class="input-field col s12 m6">
                            <select id="year" name="year">
                                <option value="">Összes év</option>
                                <option value="2025">2025</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                            </select>
                            <label for="year">Válasz évet</label>
                        </div>

                        <div class="col s12 m6">
                            <button type="submit" class="btn-large blue waves-effect waves-light">
                                <i class="material-icons left">search</i>
                                Szűrés
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Események táblázat -->
<?php if (empty($movies)): ?>
    <div class="card-panel orange lighten-4">
        <i class="material-icons">warning</i>
        <span class="orange-text text-darken-4">
            <strong>
                Nincs találat!
            </strong>
            <?php if ($filter_year): ?>
                Nincs vetítés <?= $filter_year ?> évben.
            <?php else: ?>
                Még nincsenek vetítések a rendszerben.
            <?php endif; ?>
        </span>
    </div>
<?php else: ?>

    <div class="card-panel blue lighten-5">
        <i class="material-icons">info</i>
        <span class="blue-text text-darken-2">
            <strong>
                <?= count($movies) ?>
            </strong>
            Vetítés található
        </span>
    </div>

    <table class="highlight responsive-table">
        <thead class="blue darken-2 white-text">
        <tr>
            <th>ID</th>
            <th>Cím</th>
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
