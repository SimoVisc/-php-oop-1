<?php

class Movie{
  public $title;
  public $genres;
  public $duration;
  public $splat;
  public $year;

  public function __construct(string $_title , array $_genre , int $_duration){
    $this -> title = $_title;
    $this -> genres = $_genre;
    $this -> duration = $_duration;
  }

  public function getInfo(){
    return "titolo:{$this -> title} e genere:{$this -> genres}";
  }
 
}

?>