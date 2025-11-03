<form method="GET">
    <label for="query">Filter</label>
    <input type="text" name="query" id="query">
    <input type="hidden" value="list" name="page" id="page">
    <input type="submit">
</form>
<form method="GET">
    <input type="hidden" value="list" name="page">
    <input type="submit" value="Szűrés törlése"">
</form>


<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Bejelentő</th>
            <th>Hely</th>
            <th>Műveletek</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($filtered_sightnigs as $k => $v):?>
        <tr>
            <td><?= $v["id"] ?></td>
            <td><?= $v["reporter"]["name"] . " (" . $v["reporter"]["age"] . ")"?></td>
            <td><?= $v["location"] ?></td>
            <td><button class="btn btn-secondary" type="button">Megnyitás</button></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>