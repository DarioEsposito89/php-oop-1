<?php

class Movie{
    public $imgcover;
    public $title;
    public $genres;
    public $duration;
    public $splat;
    public $year;
    public $director;

    public function __construct(string $_imgcover ,string $_title , array $_genre , int $_duration , string $_director){
        
        $this->imgcover = $_imgcover;
        $this->title = $_title;
        $this->genres = $_genre;
        $this->duration = $_duration;
        $this->director = $_director;
        
    }

    

    // funzione che restituisce titolo e genere
    public function getInfo(){
        return "titolo:{$this->title} e genere:{$this->genres}";
    }

    // funzione che restituisce l'indirizzo dell'immagine
    public function getImage() {
        return $this->imgcover;
    }

}
