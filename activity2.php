<?php

class Film {
    private $name;
    private $directorName;
    private $yearReleased;
    private $category;
    private $length;

    public function configureFilm($name, $directorName, $yearReleased, $category, $length) {
        $this->name = $name;
        $this->directorName = $directorName;
        $this->yearReleased = $yearReleased;
        $this->category = $category;
        $this->length = $length;
    }

    public function showFilmDetails() {
        return "Film Name: $this->name\n" .
               "Director: $this->directorName\n" .
               "Year Released: $this->yearReleased\n" .
               "Category: $this->category\n" .
               "Length: $this->length minutes\n";
    }
}

$film = new Film();
$film->configureFilm("Prey", "Christopher Nolan", 2010, "Sci-Fi", 148);
echo $film->showFilmDetails();
?>
