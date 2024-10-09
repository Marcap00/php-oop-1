<?php
class Genre
{
    public array $names;

    public function __construct(
        $names
    ) {
        $this->names = $names;
    }

    public function getNames()
    {
        return $this->names;
    }
}