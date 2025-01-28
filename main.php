<?php 
require_once "cinema.php";
require_once "film.php";

$cinema1 = new Cinema('Renoir Floridablanca', 'Barcelona');
$cinema2 = new Cinema('Renoir Princesa', 'Madrid');
$cinema3 = new Cinema('Renoir Retiro', 'Madrid');
$cinema4 = new Cinema('Verdi', 'Barcelona');

$film1 = new Film('Nosferatu', 132, 'Robert Eggers');
$film2 = new Film('Parthenope', 137, 'Paolo Sorrentino');
$film3 = new Film('The Brutalist', 214, 'Brady Corbet');
$film4 = new Film('Emilia Pérez', 132, 'Jacques Audiard');
$film5 = new Film('Conclave', 120, 'Edward Berger');
$film6 = new Film('Babygirl', 114, 'Halina Reijn');
$film7 = new Film('A Real Pain', 89, 'Jesse Eisenberg');

$cinema1->addFilm($film1);
$cinema1->addFilm($film2);
$cinema1->addFilm($film3);
$cinema2->addFilm($film4);
$cinema2->addFilm($film5);
$cinema2->addFilm($film6);
$cinema3->addFilm($film7);
$cinema3->addFilm($film1);
$cinema3->addFilm($film3);
$cinema4->addFilm($film2);
$cinema4->addFilm($film5);
$cinema4->addFilm($film6);

echo $cinema1->showFilms() . PHP_EOL;
echo $cinema2->showFilms() . PHP_EOL;
echo $cinema3->showFilms() . PHP_EOL;
echo $cinema4->showFilms() . PHP_EOL;

echo $cinema1->showLongestFilm();
echo $cinema2->showLongestFilm();
echo $cinema3->showLongestFilm();
echo $cinema4->showLongestFilm();

echo $cinema1->searchByDirector('Robert Eggers');

?>