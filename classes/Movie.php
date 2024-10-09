<?php

class Movie
{
    // Proprietà o variabili d'istanza
    public string $title;
    public string $author;
    public int $year;
    public Genre $genres;

    // Costruttore 
    public function __construct(
        $title,
        $author,
        $year,
        $genres
    ) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->genres = $genres;
    }

    // Metodi
    public function getGenres($array): string
    {
        $stringGenres = implode(', ', $array);
        return $stringGenres;
    }

    public function getDescription(): string
    {
        return "
        lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        ";
    }
}
