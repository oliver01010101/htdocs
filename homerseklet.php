
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body class="d-flex flex-column min-vh-100" >
<header class="bg-dark text-light text-center p-4">
    <h1>Hőmérséklet számoló</h1>
</header>
<main class="d-flex flex-column flex-md-row flex-grow-1 justify-content-center">
    <form method="post" class="mt-3 text-center">
        <div class="">
            <label for="input" class="form-label mb-3"><strong>Adja meg a hőmérsékletet: </strong> </label>
            <input type="text" class="form-control mb-3" id="input" name="input">
            <input type="submit" value="beküldés" class="m-3 btn">

            <br>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temp = (double)$_POST['input'];

            echo check_input($temp);
        }

        function check_input($temp){
            if($temp == ""){
                return "Adj meg egy érvényes hőmérsékletet";
            }
            else if ($temp < 0 ){
                return "fagyos";
            }
            else if ($temp > 0 && $temp <= 15){
                return "hűvös";
            }
            else if ($temp > 15.0000000000000000000000000000000000000000000000000000000000000001 && $temp <= 25){
                return "kellemes";
            }
            else if ($temp > 25){
                return "meleg";
            }
            return "Adj meg egy érvényes hőmérsékletet";
        }

        ?>
        </div>
    </form>
</main>
<footer class="p-4 bg-dark position-sticky bottom-0 text-center w-100">
    <h1>asd</h1>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>


