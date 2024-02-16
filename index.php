<?php
    class Movie{
        public $name;
        public $description;
        private $isLiked;
        public $director;

        function __construct($name, $description, $director ,$liked = null){
            $this->name = $name;
            $this -> description = $description;
            $this -> director = $director;
            $this ->manageLike($liked);
        }

        function manageLike($liked){
            if($liked == 'Yes' || $liked == 'yes'){
                return $this->isLiked = true;
            }else if($liked == 'No' || $liked == 'no'){
                return $this->isLiked = false;
            }else if (!(isset($liked))){
                $this->isLiked = 'Not defined';
            }else{
                var_dump('Errore! Input inserito non valido');
            }
        }
    }

    $movie1 = new Movie('John Wick', 'Lorem Ipsum', 'Tarantino','No');
    $movie2 = new Movie('Resevoir Dogs', 'Lorem Ipsum', 'Tarantino', 'Yes');
    $movie3 = new Movie('Interstellar', 'Lorem Ipsum Dolor Amet', 'Nolan');
    $movie4 = new Movie('Avatar', 'Lorem Ipsum Dolor Amet', 'Cameron', 'Dipende');

    var_dump($movie1);
    var_dump($movie2);
    var_dump($movie3);
    var_dump($movie4);

?>