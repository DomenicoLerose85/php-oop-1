<?php
class Movies
{
    // variables
    public $name;
    public $genre;
    public $year;


    // construct
    function __construct($_name, $_genre, $_year)
    {
        $this->name = $_name;
        $this->genre = $_genre;
        $this->year = $_year;
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

    function get_year()
    {
        return $this->year;
    }
}

// new object
$film1 = new Movies('Is not a country for hold men', 'Action', 2007);
$film2 = new Movies('The neon demon', 'Horror', 2016);
$film3 = new Movies('Inglourios Bastards', 'Action-History', 2009);

echo $film1->get_name();
echo '<br>';
echo $film1->get_genre();
echo '<br>';
echo $film1->get_year();
echo '<br>';
echo $film2->get_name();
echo '<br>';
echo $film2->get_genre();
echo '<br>';
echo $film2->get_year();
echo '<br>';
echo $film3->get_name();
echo '<br>';
echo $film3->get_genre();
echo '<br>';
echo $film3->get_year();
