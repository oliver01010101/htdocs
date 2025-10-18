
<form class="row" method="GET">
    <div class="col-5">
        <div class="input-group">
            <label class="input-group-text" for="reporterName">Szerző:</label>
            <input class="form-control" type="text" name="query" id="query">
            <input type="hidden" value="list" name="page" id="page">
            <input class="btn btn-primary" type="submit" value="Szűrés">
        </div>
    </div>
</form>
<table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Cím</th>
        <th scope="col">Szerző</th>
        <th scope="col">Év</th>
        </tr>
  </thead>
  <tbody>
    <?php
        foreach ($books as $book){
           echo render_book_row($book);
        }
    ?>
  </tbody>
</table>