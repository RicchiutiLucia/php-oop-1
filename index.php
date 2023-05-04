<?php

require_once __DIR__."\Models\Movie.php";
require_once __DIR__."\db\db.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>


<body>
  <?php
  
  echo  '<h1>Titolo:</h1>'. $dragon_heart->get_title() . '<br>';
  echo '<h2>Genere:</h2>'. $dragon_heart->get_All_genres() . '<br>';
  echo '<h3>Diretto da:</h3>'. $dragon_heart->get_director() . '<br>';

  echo '<h1>Titolo:</h1>'.  $il_signore_degli_anelli->get_title() . '<br>';
    echo '<h2>Genere:</h2>'. $il_signore_degli_anelli->get_All_genres() . '<br>';
    echo  '<h3>Diretto da:</h3>'. $il_signore_degli_anelli->get_director() ;

  ?>

    
</body>
</html>