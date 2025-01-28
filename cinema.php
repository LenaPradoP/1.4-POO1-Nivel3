<?php 
declare(strict_types = 1);
require_once "film.php";

class Cinema {

private $name;
private $city;
private $films;

public function __construct(string $name, string $city) {
    $this->name = $name;
    $this->city = $city;
    $this->films = [];
}

public function addFilm(Film $film) : void {
    $this->films[] = $film;
}

public function showFilms() {

    echo "Cartelera $this->name:" . PHP_EOL;

    foreach($this->films as $film){
        echo  $film;
    }

}

public function showLongestFilm() : string {
    $minutes = 0;

    foreach($this->films as $film){
        if ($film->getLength() > $minutes) {
            $minutes = $film->getLength();
            $longestFilm = $film;
        }
    }
    return "$this->name: " . PHP_EOL 
    . "La película más larga es: $longestFilm" . PHP_EOL;
}

public function searchByDirector(string $director) {

    foreach($this->films as $film) {
        if ($film->getDirector() == $director) {
            echo "";
        }
    }
}

}
?>