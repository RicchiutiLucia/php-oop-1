<?php

/* definisci una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà */

require __DIR__ . '/Models/Movie.php';

$dragon_heart = new Movie("Dragon Heart", "Fantasy", "Rob Cohen");
echo  '<h1>Titolo:</h1>'. $dragon_heart->get_title() . '<br>';
echo '<h2>Genere:</h2>'. $dragon_heart->get_genre() . '<br>';
echo '<h3>Diretto da:</h3>'. $dragon_heart->get_director() . '<br>';

$nightmare = new Movie("Nightmare", "Horror","Wes Craven");
echo  '<h1>Titolo:</h1>'. $nightmare->get_title() . '<br>';
echo  '<h2>Genere:</h2>'. $nightmare->get_genre() . '<br>';
echo '<h3>Diretto da:</h3>'.  $nightmare->get_director() . '<br>' ;

$il_signore_degli_anelli = new Movie("Il signore degli anelli", "Fantasy","Peter Jackson");
echo '<h1>Titolo:</h1>'.  $nightmare->get_title() . '<br>';
echo '<h2>Genere:</h2>'.  $nightmare->get_genre() . '<br>';
echo  '<h3>Diretto da:</h3>'. $nightmare->get_director() ;




?>