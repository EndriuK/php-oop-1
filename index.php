<?php
class Movie
{
    public $title;
    public $genre;
    public $year;

    function __construct($title, $genre, $year)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    public function getMovieInfo()
    {
        return $this->title . "  " . $this->genre . "  " . $this->year;
    }
}

$lotr = new Movie('Il Signore degli Anelli: il ritorno del re', 'Fantasy', '2003');
$igl = new Movie('Il Grande Lebowsky', 'Comico', '1997');

var_dump($lotr);
var_dump($igl);
