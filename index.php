<?php
require_once __DIR__ . "./Models/Movie.php";

$matrix = new Movie("Matrix", "Larry e Andy Wachowski", "Keanu Reeves-Laurence Fishburne-Carrie-Anne Moss", "cyberpunk", "130 minuti", "1999", "english", 5);

echo $matrix->printMovieInfo();

$goodfellas = new Movie("Goodfellas", "Martin Scorsese", "Ray Liotta - Robert De Niro - Joe Pesci", "biographical", "145 minuti", "1990", "english", 5);

echo $goodfellas->printMovieInfo();