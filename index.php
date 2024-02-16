<?php
    class Movie{
        public $name;
        public $description;
        private $isLiked;
        public $director;
        public $genre;


        function __construct($index){
            require __DIR__ .'/db.php';
            // var_dump($movieData);
            for ($i=0; $i < count($movieData); $i++){
                $this->name = $movieData[$index]['name'];
                $this->description = $movieData[$index]['description'];
                $this->director = $movieData[$index]['director'];
                $this->genre = $movieData[$index]['genre'];
                $this->manageLike($movieData[$index]['liked']);
            }
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

    $movie1 = new Movie(0);
    var_dump($movie1);
    $movie2 = new Movie(1);
    var_dump($movie2);
    $movie3 = new Movie(2);
    var_dump($movie3);
    $movie4 = new Movie(3);
    var_dump($movie4);
?>