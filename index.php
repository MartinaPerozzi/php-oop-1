<?php

// Creo una classe Movie
class Movie
{
    // Con le sue specifiche caratteristiche
    public $movie_title;


    // Mi passo le variabili con un costruttore
    public function __construct($_movie_title)
    {
        $this->movie_title = $_movie_title;
    }
}

// Creo un'istanza di quella classe- in questo caso un array di istanze
$movies = [
    new Movie("Requiem for a Dream"),
    new Movie("Mr. Nobody"),
    new Movie("Brokeback Mountain"),
    new Movie("The Lion King"),
    new Movie("The Theory of Everything"),
    new Movie("Call me by your name"),
];
