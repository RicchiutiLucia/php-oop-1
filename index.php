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
    <link rel="stylesheet" href="/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-dark-subtle text-primary">
    <div class="container">
        <div class="row mt-4">
            <h1 class="text-center my-4">Lista Film</h1>
            <table class="table text-primary table-bordered border-primary">
                <thead>
                    <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Diretto da</th>
                    <th scope="col">Genere</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($movieList as $movie){ ?>
                            <tr>
                                <td> <?php echo $movie->title; ?></td>
                                <td> <?php echo $movie->director; ?></td>
                                <td> <?php 
                                    foreach($allGenres as $genere){
                                        echo $genere . ' , ';
                                    }
                                ?></td>
                            </tr>
                     <?php   } ?>
                </tbody>
            </table>
        </div>

    </div>
    
</body>
</html>