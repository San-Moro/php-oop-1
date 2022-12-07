<?php
require_once __DIR__ . "./Models/Movie.php";

$matrix = new Movie("Matrix", "Larry e Andy Wachowski", "Keanu Reeves-Laurence Fishburne-Carrie-Anne Moss", "cyberpunk", "130 minuti", "1999", "english", 5);

// echo $matrix->printMovieInfo();

$goodfellas = new Movie("Goodfellas", "Martin Scorsese", "Ray Liotta - Robert De Niro - Joe Pesci", "biographical", "145 minuti", "1990", "english", 5);

// echo $goodfellas->printMovieInfo();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    <main>
        <div class="container">
            <h1>Movies</h1>
            <div class="card">
                <h2><?php echo $matrix->name; ?></h2>
                <ul>
                    <li>Directors: <?php echo $matrix->directors; ?></li>
                    <li>Actors: <?php echo $matrix->actors; ?></li>
                    <li>Genre: <?php echo $matrix->genre; ?></li>
                    <li>Duration: <?php echo $matrix->duration; ?></li>
                    <li>Release Date: <?php echo $matrix->release_date; ?></li>
                    <li>Original Language: <?php echo $matrix->original_language; ?></li>
                    <li>Vote: <?php echo $matrix->vote; ?></li>
                </ul>
            </div>
            <div class="card">
                <h2><?php echo $goodfellas->name; ?></h2>
                <ul>
                    <li>Directors: <?php echo $goodfellas->directors; ?></li>
                    <li>Actors: <?php echo $goodfellas->actors; ?></li>
                    <li>Genre: <?php echo $goodfellas->genre; ?></li>
                    <li>Duration: <?php echo $goodfellas->duration; ?></li>
                    <li>Release Date: <?php echo $goodfellas->release_date; ?></li>
                    <li>Original Language: <?php echo $goodfellas->original_language; ?></li>
                    <li>Vote: <?php echo $goodfellas->vote; ?></li>
                </ul>
            </div>
        </div>
    </main>
</body>
</html>