<?php
require_once __DIR__ . '/classes/Movie.php';
require_once __DIR__ . '/classes/Genre.php';

$action = new Genre('Action');
$comedy = new Genre('Comedy');
$horror = new Genre('Horror');


$theAvengers = new Movie('The Avengers', 'Joss Whedon', 2012, $action);
$theAvengersAgeOfUltron = new Movie('The Avengers: Age of Ultron', 'Joss Whedon', 2015, $action);
$movies = [
    $theAvengers,
    $theAvengersAgeOfUltron
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie OOP</title>
    <!-- Bootstrap 5 -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="container">
            <h1 class="text-center">Movies</h1>
            <ul>
                <?php foreach ($movies as $movie) : ?>
                <li>
                    <h2><?= $movie->title; ?></h2>
                    <ul>
                        <li>
                            Author: <?= $movie->author; ?>
                        </li>
                        <li>
                            Year: <?= $movie->year; ?>
                        </li>
                        <li>
                            Genere: <?= $movie->genre->getGenre(); ?>
                        </li>
                        <li>Descrizione: <?= $movie->getDescription() ?></li>
                    </ul>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </main>
</body>

</html>