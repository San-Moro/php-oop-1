<?php
require_once __DIR__ . "./Models/Movie.php";

$matrix = new Movie();
$matrix->name = "Matrix";
var_dump($matrix);