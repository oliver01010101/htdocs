<?php
$result = null;
$is_valid = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        ///üres, nem szám | nem egész szám | nem 1-7
        $input = $_POST["day"] ?? '';
        if($input === '' || !is_numeric($input)){
            //is valid false
            $result = "Adj meg egy érvényes számot!";
        } else if(intval($input) != $input){
            $result = "Adj meg egy érvényes sorszámot!";
        } else{
            $number = (int)$_POST['day'] ?? 0;
            $result = "";

            $is_valid = true;
            switch($number){
                case 1: $result .= "Hétfő"; break;
                case 2: $result .= "Kedd"; break;
                case 3: $result .= "Szerda"; break;
                case 4: $result .= "Csütörtök"; break;
                case 5: $result .= "Péntek"; break;
                case 6: $result .= "Szombat"; break;
                case 7: $result .= "Vasárnap"; break;
                default: $result .= "Érvénytelen sorszám (1-7)"; $is_valid = false;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        .error-border {
            border: 2px solid red;
        }
    </style>
</head>
    <body>
        <form method="post">
            <label>
                Nap sorszáma(1-7):
                <input type="number" name="day" id="day" min="0" max="7" class="form-control <?= $is_valid ? '' : 'error-border'?>">
            </label>
            <button type="submit">Kiír</button>
        </form>
        <?php if($result): ?>
            <p>
                <?= $result ?>
            </p>
        <?php endif; ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    </body>
</html>
