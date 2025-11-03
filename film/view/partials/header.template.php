<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filmklub Kezelő Rendszer</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        main {
            flex: 1 0 auto;
        }

        .brand-logo {
            padding-left: 15px;
        }
    </style>
</head>
<body>

<nav class="blue darken-2">
    <div class="nav-wrapper container">
        <a href="index.php" class="brand-logo">
            <i class="material-icons">movie</i>
            Filmklub
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li>
                <a href="index.php?page=home">
                    <i class="material-icons">home</i> Kezdőlap
                </a>
            </li>
            <li>
                <a href="index.php?page=events">
                    <i class="material-icons">event</i> Vetítések
                </a>
            </li>
            <li>
                <a href="index.php?page=create">
                    <i class="material-icons">add</i> Új vetítés
                </a>
            </li>

        </ul>
    </div>
</nav>

<main>
    <div class="container">