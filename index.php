<?php
class Movies
{
    // variables
    public $name;
    public $genre;
    public $year;


    // method (getter)
    function get_name($name)
    {
        return $this->name;
    }
}

$film1 = new Movies();
var_dump($film1);
