<?php
        class Movie{
            public $name;
            public $description;
            private $isLiked;
            public $director;
            public $genre;
    
    
            function __construct($index){
                require __DIR__ .'../../db.php';
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
?>