<h1 class="page-title">
    <i class="material-icons large">add_circle</i>
    Új filmvetítés felvitele
</h1>

<?php if ($submitted): ?>

    <div class="card-panel green lighten-4">
        <h5 class="green-text text-darken-3">
            <i class="material-icons">check_circle</i>
            Sikeres adatbevitel!
        </h5>
        <p class="green-text text-darken-2">
            Az alábbi adatok lettek beküldve (a téyleges mentés nem történt meg!
        </p>

        <div class="card">
            <div class="card-content">
                <table>
                    <tr>
                        <td><strong>Cím:</strong></td>
                        <td><?= $_POST['cím'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Rendező:</strong></td>
                        <td><?= $_POST['rendező'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Dátum:</strong></td>
                        <td><?= $_POST['dátum'] ?></td>
                    </tr>
                </table>
            </div>
            <div class="card-action">
                <a href="index.php?page=create" class="btn blue">
                    <i class="material-icons">add</i>
                    Új vetítés hozzáadása
                </a>
                <a href="index.php?page=events" class="btn green">
                    <i class="material-icons">list</i>
                    Összes vetítés
                </a>
            </div>
        </div>
    </div>


<?php else: ?>

    <div class="row">
        <form method="post" action="index.php?page=create"
              class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">
                        <i class="material-icons">create</i>
                        Vetítés adatai
                    </span>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">movie</i>
                            <input id="cím" name="cím" value="" required/>
                            <label for="cím">Film címe</label>
                            <span class="helper-text">
                                Add meg a film címét magyar vagy eredeti nyelven
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">person</i>
                            <input id="rendező" name="rendező" value="" required/>
                            <label for="rendező">Film rendező</label>
                            <span class="helper-text">
                                A film rendezőjének neve
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">event</i>
                            <input id="dátum" type="date" name="dátum" value="" required/>
                            <label for="dátum">Vetítés dátuma</label>
                            <span class="helper-text">
                                Válaszd ki a vetítés időpontját (ÉÉÉÉ-HH-NN)
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <button type="submit" class="btn blue waves-effect waves-light">
                        <i class="material-icons left">add</i>
                        Vetítés hozzáadása
                    </button>
                    <a href="index.php?page=events" class="btn grey waves-effect waves-light">
                        <i class="material-icons left">close</i>
                        Mégse
                    </a>
                </div>
            </div>


            <input type="submit" value="Létrehozás" required/>
        </form>
    </div>

<?php endif; ?>