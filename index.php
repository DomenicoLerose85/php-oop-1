<?php
class Movies
{
    // variables
    public $name;
    public $genre;
    public $year;


    // construct
    function __construct($name, $genre)
    {
        $this->name = $name;
        $this->genre = $genre;
    }

    // method (getter)
    function get_name($name)
    {
        return $this->name;
    }
}

// new object
$film1 = new Movies('Over the Top', 'Action');
echo
// var_dump($film1);
