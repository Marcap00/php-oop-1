<?php
class Genre
{
    public string $genre;

    public function __construct(
        $genre
    ) {
        $this->genre = $genre;
    }

    public function getGenre()
    {
        return $this->genre;
    }
}