<?php
class Movies
{
    // variables
    public $name;
    public $genre;
    public $year;


    // construct
    function __construct($_name, $_genre)
    {
        $this->name = $_name;
        $this->genre = $_genre;
    }

    // method (getter)
    function get_name()
    {
        return $this->name;
    }

    function get_genre()
    {
        return $this->genre;
    }
}

// new object
$film1 = new Movies('Is not a country for hold men', 'Action');
$film2 = new Movies('The neon demons', 'Horror');
// $film3 = new Movies ('Unglourios Bastards', 'Action-History', )

echo $film1->get_name();
echo '<br>';
echo $film1->get_genre();
echo '<br>';
echo $film2->get_name();
echo '<br>';
echo $film2->get_genre();
echo '<br>';
