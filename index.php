<?php

class Movie{
  private $originalTitle;
  public $genre;
  public $year;

  public function setOriginalTitle($title){
    $this -> originalTitle = $title;
  }
 
  public function getOriginalTitle(){
    return $this -> originalTitle;
  }
}

$Moonlight = new Movie ();
$Moonlight -> setOriginalTitle("Moonlight");
$Moonlight -> genre = "Drama";
$Moonlight -> year = 2016;

$Inception = new Movie ();
$Inception -> setOriginalTitle("Inception");
$Inception -> genre = "Action";
$Inception -> year = 2010;

var_dump($Moonlight);
var_dump($Inception)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php OOP</title>
</head>
<body>
    <h1> <?php echo $Moonlight -> getOriginalTitle(); ?> </h1>
    <h1> <?php echo $Inception -> getOriginalTitle(); ?> </h1>
</body>
</html>