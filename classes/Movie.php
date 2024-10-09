<?php

class Movie
{
    // Proprietà o variabili d'istanza
    public $title;
    public $author;
    public $year;
    public $genre;

    // Costruttore 
    public function __construct($title, $author, $year, $genre)
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->genre = $genre;
    }

    // Metodi
    public function getDescription()
    {
        return "
        Il titolo di questo film è: $this->title 
        <br> 
        Il suo autore è: $this->author 
        <br> 
        E' stato prodotto nell'anno: $this->year 
        <br> 
        Appartiene al genere: $this->genre
        ";
    }
}