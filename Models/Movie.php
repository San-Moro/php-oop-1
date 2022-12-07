<?php

class Movie
{
    public $name;
    public $directors;
    public $actors;
    public $genre;
    public $duration;
    public $release_date;
    public $original_language;
    public $vote;

    // Construct
    function __construct(String $name, String $directors, String $actors, String $genre, String $duration, String $release_date, String $original_language, Int $vote) 
    {
        $this->name = $name;
        $this->directors = $directors;
        $this->actors = $actors;
        $this->genre = $genre;
        $this->duration = $duration;
        $this->release_date = $release_date;
        $this->original_language = $original_language;
        $this->vote = $vote;
    }

    // Method
    public function printMovieInfo() 
    {
        return 
        "Name: $this->name; 
        Directors: $this->directors;
        Actors: $this->actors;
        Genre: $this->genre;
        Duration: $this->duration;
        Release Date: $this->release_date;
        Original Language: $this->original_language;
        Vote: $this->vote;";
    }
}