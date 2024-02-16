<?php
    require __DIR__.'/models/movieclass.php';
    $movie1 = new Movie(0);
    var_dump($movie1);
    $movie2 = new Movie(1);
    var_dump($movie2);
    $movie3 = new Movie(2);
    var_dump($movie3);
    $movie4 = new Movie(3);
    var_dump($movie4);
?>